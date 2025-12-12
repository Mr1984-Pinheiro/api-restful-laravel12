<?php

namespace App\Enums;

enum Tickets: string 
{
    case IN_PROGRESS = 'In transit';
    case OUT_FOR_DELIVERY = 'Out for delivery';
    case DELIVERED = 'Delivered'; 

    public function getColorTicket(): string
    {
        return match($this) {
            self::IN_PROGRESS => 'bg-yellow-100 text-yellow-800',
            self::OUT_FOR_DELIVERY => 'bg-blue-100 text-blue-800',
            self::DELIVERED => 'bg-green-100 text-green-800'
        };
    }
}
