<?php

namespace App\Filament\Resources\ZineResource\Pages;

use App\Filament\Resources\ZineResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditZine extends EditRecord
{
    protected static string $resource = ZineResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
            Actions\ForceDeleteAction::make(),
            Actions\RestoreAction::make(),
        ];
    }
}
