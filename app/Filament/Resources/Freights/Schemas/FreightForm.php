<?php

namespace App\Filament\Resources\Freights\Schemas;

use App\Enums\Tickets;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class FreightForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('origin')
                    ->required(),
                TextInput::make('destination')
                    ->required(),
                TextInput::make('tracking_code')
                    ->required(),
                Select::make('status')
                    ->options(Tickets::class)
                    ->required(),
                Select::make('sender_id')
                    ->label('Sender')
                    ->relationship('sender', 'name')
                    ->required(),
                Select::make('recipient_id')
                    ->label('Recipient')
                    ->relationship('recipient', 'name')
                    ->required(),
            ]);
    }
}
