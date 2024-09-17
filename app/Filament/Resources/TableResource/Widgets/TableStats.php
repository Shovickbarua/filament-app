<?php

namespace App\Filament\Resources\TableResource\Widgets;

use App\Models\TableBook;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class TableStats extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            // Stat::make("Total Seats", TableBook::query()->count()),
            Stat::make("Total Seats", 6),
            Stat::make("Occupied", TableBook::query()->count()),
        ];
    }
}
