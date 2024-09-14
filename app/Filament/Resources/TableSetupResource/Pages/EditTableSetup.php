<?php

namespace App\Filament\Resources\TableSetupResource\Pages;

use App\Filament\Resources\TableSetupResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTableSetup extends EditRecord
{
    protected static string $resource = TableSetupResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
