<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TableSetupResource\Pages;
use App\Filament\Resources\TableSetupResource\RelationManagers;
use App\Models\TableSetup;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TableSetupResource extends Resource
{
    protected static ?string $model = TableSetup::class;

    protected static ?string $modelLabel = 'Table Setup';

    protected static ?string $pluralModelLabel = 'Table Setup';

    protected static ?string $navigationIcon = '';

    protected static ?int $navigationSort = 4;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('meal'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('meal')->sortable()->searchable()->toggleable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTableSetups::route('/'),
            'create' => Pages\CreateTableSetup::route('/create'),
            'edit' => Pages\EditTableSetup::route('/{record}/edit'),
        ];
    }
}
