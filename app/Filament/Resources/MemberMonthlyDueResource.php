<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MemberMonthlyDueResource\Pages;
use App\Models\MemberMonthlyDue;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\Action;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class MemberMonthlyDueResource extends Resource
{
    protected static ?string $model = MemberMonthlyDue::class;

    protected static ?string $navigationGroup = 'Finance';

    protected static ?string $navigationLabel = 'Iuran Bulanan';

    protected static ?string $modelLabel = 'Iuran Bulanan';

    protected static ?string $pluralModelLabel = 'Iuran Bulanan';

    protected static ?string $navigationIcon = 'heroicon-o-banknotes';

    public static function canCreate(): bool
    {
        return false;
    }

    public static function getNavigationBadge(): ?string
    {
        $user = Auth::user();

        if (! $user || ! $user->hasRole('member')) {
            return null;
        }

        $unpaidCount = MemberMonthlyDue::query()
            ->where('user_id', $user->id)
            ->whereNull('paid_at')
            ->count();

        return $unpaidCount > 0 ? (string) $unpaidCount : null;
    }

    public static function getNavigationBadgeColor(): ?string
    {
        return 'warning';
    }

    public static function table(Table $table): Table
    {
        return $table
            ->defaultSort('billing_month', 'desc')
            ->columns([
                Tables\Columns\TextColumn::make('user.name')
                    ->label('Member')
                    ->searchable(),
                Tables\Columns\TextColumn::make('billing_month')
                    ->label('Periode')
                    ->date('F Y')
                    ->sortable(),
                Tables\Columns\TextColumn::make('amount')
                    ->label('Nominal')
                    ->money('IDR', locale: 'id')
                    ->sortable(),
                Tables\Columns\TextColumn::make('status')
                    ->badge()
                    ->getStateUsing(fn(MemberMonthlyDue $record): string => $record->isPaid() ? 'Lunas' : 'Belum Lunas')
                    ->color(fn(string $state): string => $state === 'Lunas' ? 'success' : 'warning'),
                Tables\Columns\TextColumn::make('paid_at')
                    ->label('Tanggal Lunas')
                    ->dateTime('d M Y H:i')
                    ->placeholder('-')
                    ->sortable(),
                Tables\Columns\TextColumn::make('paidBy.name')
                    ->label('Ditandai Oleh')
                    ->placeholder('-'),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('status')
                    ->options([
                        'unpaid' => 'Belum Lunas',
                        'paid' => 'Lunas',
                    ])
                    ->query(function (Builder $query, array $data): Builder {
                        return match ($data['value'] ?? null) {
                            'paid' => $query->whereNotNull('paid_at'),
                            'unpaid' => $query->whereNull('paid_at'),
                            default => $query,
                        };
                    }),
            ])
            ->headerActions([
                Action::make('export_csv')
                    ->label('Ekspor Laporan')
                    ->icon('heroicon-o-arrow-down-tray')
                    ->visible(fn(): bool => Auth::user()?->hasRole('admin') ?? false)
                    ->action(function () {
                        $rows = MemberMonthlyDue::query()
                            ->with(['user', 'paidBy'])
                            ->orderByDesc('billing_month')
                            ->get();

                        $fileName = 'laporan-iuran-' . now()->format('Ymd-His') . '.csv';

                        return response()->streamDownload(function () use ($rows): void {
                            $handle = fopen('php://output', 'w');

                            fwrite($handle, "\xEF\xBB\xBF");
                            fputcsv($handle, ['Member', 'Periode', 'Nominal', 'Status', 'Tanggal Lunas', 'Ditandai Oleh']);

                            foreach ($rows as $row) {
                                fputcsv($handle, [
                                    $row->user?->name,
                                    Carbon::parse($row->billing_month)->translatedFormat('F Y'),
                                    (float) $row->amount,
                                    $row->isPaid() ? 'Lunas' : 'Belum Lunas',
                                    $row->paid_at?->format('Y-m-d H:i:s') ?? '-',
                                    $row->paidBy?->name ?? '-',
                                ]);
                            }

                            fclose($handle);
                        }, $fileName, [
                            'Content-Type' => 'text/csv; charset=UTF-8',
                        ]);
                    }),
            ])
            ->actions([
                EditAction::make()
                    ->label('Set Nominal')
                    ->icon('heroicon-o-pencil-square')
                    ->visible(fn(MemberMonthlyDue $record): bool => Auth::user()?->can('update', $record) ?? false)
                    ->form([
                        TextInput::make('amount')
                            ->label('Nominal Iuran')
                            ->numeric()
                            ->required()
                            ->minValue(1)
                            ->prefix('Rp'),
                    ]),
                Action::make('mark_paid')
                    ->label('Tandai Lunas')
                    ->icon('heroicon-o-check-circle')
                    ->color('success')
                    ->requiresConfirmation()
                    ->visible(fn(MemberMonthlyDue $record): bool => Auth::user()?->can('markPaid', $record) ?? false)
                    ->action(function (MemberMonthlyDue $record): void {
                        $record->markAsPaid(Auth::user());
                    }),
            ])
            ->bulkActions([]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListMemberMonthlyDues::route('/'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        $query = parent::getEloquentQuery()->with(['user', 'paidBy']);

        if (! Auth::user()?->hasRole('admin')) {
            $query->where('user_id', Auth::id());
        }

        return $query;
    }
}
