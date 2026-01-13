<?php

namespace App\Filament\Resources\Freights\Pages;

use App\Filament\Resources\Freights\FreightResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditFreight extends EditRecord
{
    protected static string $resource = FreightResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
