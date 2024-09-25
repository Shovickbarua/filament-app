<?php

namespace App\Filament\Resources\DishResource\Widgets;

use App\Models\Dish;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class MealStats extends BaseWidget
{

    protected function getStats(): array
    {
        return [
            Stat::make("Total Meals", Dish::query()->count()),
        ];
    }
}
