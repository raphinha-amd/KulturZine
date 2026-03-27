<?php

namespace App\Filament\Resources;

use App\Filament\Exports\MemberMonthlyDueExporter;
use App\Filament\Resources\MemberMonthlyDueResource\Pages;
use App\Models\MemberMonthlyDue;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\Action;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\ExportAction;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
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
                ExportAction::make('export')
                    ->label('Ekspor Laporan')
                    ->exporter(MemberMonthlyDueExporter::class)
                    ->visible(fn(): bool => Auth::user()?->hasRole('admin') ?? false),
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

                        Notification::make()
                            ->title('Tagihan berhasil ditandai lunas')
                            ->success()
                            ->send();
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
