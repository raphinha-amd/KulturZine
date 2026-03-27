<?php

namespace App\Filament\Exports;

use App\Models\MemberMonthlyDue;
use Filament\Actions\Exports\ExportColumn;
use Filament\Actions\Exports\Exporter;
use Filament\Actions\Exports\Models\Export;

class MemberMonthlyDueExporter extends Exporter
{
    protected static ?string $model = MemberMonthlyDue::class;

    public static function getColumns(): array
    {
        return [
            ExportColumn::make('user.name')->label('Member'),
            ExportColumn::make('billing_month')->label('Periode'),
            ExportColumn::make('amount')->label('Nominal'),
            ExportColumn::make('paid_at')->label('Tanggal Lunas'),
            ExportColumn::make('paidBy.name')->label('Ditandai Oleh'),
            ExportColumn::make('created_at')->label('Dibuat Pada'),
        ];
    }

    public static function getCompletedNotificationBody(Export $export): string
    {
        $body = 'Ekspor laporan iuran selesai dengan ' . number_format($export->successful_rows) . ' baris.';

        if ($failedRowsCount = $export->getFailedRowsCount()) {
            $body .= ' ' . number_format($failedRowsCount) . ' baris gagal diekspor.';
        }

        return $body;
    }
}
