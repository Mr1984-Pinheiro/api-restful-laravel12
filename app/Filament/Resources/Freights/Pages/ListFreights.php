<?php

namespace App\Filament\Resources\Freights\Pages;

use App\Filament\Resources\Freights\FreightResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListFreights extends ListRecords
{
    protected static string $resource = FreightResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
