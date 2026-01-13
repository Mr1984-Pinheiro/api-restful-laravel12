<?php

namespace App\Filament\Resources\Freights\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class FreightInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('origin'),
                TextEntry::make('destination'),
                TextEntry::make('tracking_code'),
                TextEntry::make('status')
                    ->badge(),
                TextEntry::make('sender_id')
                    ->numeric(),
                TextEntry::make('recipient_id')
                    ->numeric(),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
