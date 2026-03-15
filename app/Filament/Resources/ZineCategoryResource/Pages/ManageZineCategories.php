<?php

namespace App\Filament\Resources\ZineCategoryResource\Pages;

use App\Filament\Resources\ZineCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageZineCategories extends ManageRecords
{
    protected static string $resource = ZineCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
