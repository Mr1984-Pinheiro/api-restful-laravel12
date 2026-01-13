<?php

namespace App\Filament\Resources\Freights\Pages;

use App\Filament\Resources\Freights\FreightResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewFreight extends ViewRecord
{
    protected static string $resource = FreightResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
