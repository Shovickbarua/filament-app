<?php

namespace App\Filament\Resources\TableResource\Pages;

use App\Filament\Resources\TableResource;
use App\Filament\Resources\TableResource\Widgets\TableStats;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTables extends ListRecords
{
    protected static string $resource = TableResource::class;

    protected int | string | array $columnSpan = [
        'md' => 2,
        'xl' => 2,
    ];

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    protected function getHeaderWidgets(): array{
        return [
            TableStats::class,
        ];
    }
}
