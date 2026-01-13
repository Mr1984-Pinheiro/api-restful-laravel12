<?php

namespace App\Filament\Resources\Freights;

use App\Filament\Resources\Freights\Pages\CreateFreight;
use App\Filament\Resources\Freights\Pages\EditFreight;
use App\Filament\Resources\Freights\Pages\ListFreights;
use App\Filament\Resources\Freights\Pages\ViewFreight;
use App\Filament\Resources\Freights\Schemas\FreightForm;
use App\Filament\Resources\Freights\Schemas\FreightInfolist;
use App\Filament\Resources\Freights\Tables\FreightsTable;
use App\Models\Freight;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class FreightResource extends Resource
{
    protected static ?string $model = Freight::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return FreightForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return FreightInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return FreightsTable::configure($table);
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
            'index' => ListFreights::route('/'),
            'create' => CreateFreight::route('/create'),
            'view' => ViewFreight::route('/{record}'),
            'edit' => EditFreight::route('/{record}/edit'),
        ];
    }
}
