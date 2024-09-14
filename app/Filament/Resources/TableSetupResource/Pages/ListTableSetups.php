<?php

namespace App\Filament\Resources\TableSetupResource\Pages;

use App\Filament\Resources\TableSetupResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTableSetups extends ListRecords
{
    protected static string $resource = TableSetupResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
