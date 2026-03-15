<?php

namespace App\Filament\Resources\ZineResource\Pages;

use App\Filament\Resources\ZineResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListZines extends ListRecords
{
    protected static string $resource = ZineResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
