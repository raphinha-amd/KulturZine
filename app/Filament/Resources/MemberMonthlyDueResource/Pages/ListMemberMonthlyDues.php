<?php

namespace App\Filament\Resources\MemberMonthlyDueResource\Pages;

use App\Filament\Resources\MemberMonthlyDueResource;
use App\Models\MemberMonthlyDue;
use App\Models\User;
use Filament\Actions;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Auth;

class ListMemberMonthlyDues extends ListRecords
{
    protected static string $resource = MemberMonthlyDueResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\Action::make('generate_dues')
                ->label('Generate Tagihan')
                ->icon('heroicon-o-plus-circle')
                ->visible(fn(): bool => Auth::user()?->hasRole('admin') ?? false)
                ->form([
                    DatePicker::make('billing_month')
                        ->label('Periode Bulan')
                        ->required()
                        ->default(now()->startOfMonth())
                        ->displayFormat('F Y'),
                    TextInput::make('amount')
                        ->label('Nominal Iuran')
                        ->numeric()
                        ->required()
                        ->minValue(1)
                        ->default((int) config('app.member_monthly_due_amount', 100000))
                        ->prefix('Rp'),
                ])
                ->action(function (array $data): void {
                    $billingMonth = \Illuminate\Support\Carbon::parse($data['billing_month'])->startOfMonth()->toDateString();
                    $amount = (float) $data['amount'];
                    $created = 0;

                    User::role('member')->select('id')->chunkById(100, function ($members) use ($billingMonth, $amount, &$created) {
                        foreach ($members as $member) {
                            $exists = MemberMonthlyDue::query()
                                ->where('user_id', $member->id)
                                ->whereDate('billing_month', $billingMonth)
                                ->exists();

                            if ($exists) {
                                continue;
                            }

                            try {
                                MemberMonthlyDue::create([
                                    'user_id' => $member->id,
                                    'billing_month' => $billingMonth,
                                    'amount' => $amount,
                                ]);

                                $created++;
                            } catch (QueryException $exception) {
                                // Ignore duplicate key conflicts when concurrent generation occurs.
                                if ((string) $exception->getCode() !== '23000') {
                                    throw $exception;
                                }
                            }
                        }
                    });

                    Notification::make()
                        ->title("{$created} tagihan berhasil dibuat")
                        ->success()
                        ->send();
                }),
        ];
    }
}
