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
                TextInput::make('tracking_code')
                    ->required()
                    ->label('Tracking Code')
                    ->default('Default Tracking Code Automatically Generated')
                    ->readOnly(),
                TextInput::make('status')
                    ->readOnly()
                    ->label('Status')
                    ->default('Default Status Automatically (In Progress)')
                    ->required(),
                TextInput::make('origin')
                    ->required(),
                TextInput::make('destination')
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
