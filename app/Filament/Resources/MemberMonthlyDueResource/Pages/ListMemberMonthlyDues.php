<?php

namespace App\Filament\Resources\MemberMonthlyDueResource\Pages;

use App\Filament\Resources\MemberMonthlyDueResource;
use App\Services\MemberMonthlyDueService;
use Filament\Actions;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Support\Carbon;
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
                    $billingMonth = Carbon::parse($data['billing_month'])->startOfMonth();
                    $amount = (float) $data['amount'];
                    app(MemberMonthlyDueService::class)->generateForMonth($billingMonth, $amount);
                }),
        ];
    }
}
