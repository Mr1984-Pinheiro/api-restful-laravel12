<?php

namespace App\Filament\Resources\Freights\Pages;

use App\Enums\Tickets;
use App\Filament\Resources\Freights\FreightResource;
use App\Helpers;
use Filament\Resources\Pages\CreateRecord;


class CreateFreight extends CreateRecord
{
    protected static string $resource = FreightResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['tracking_code'] = Helpers::generateTrackingCode();
        $data['status'] = Tickets::IN_PROGRESS;

        return $data;        
    }
}