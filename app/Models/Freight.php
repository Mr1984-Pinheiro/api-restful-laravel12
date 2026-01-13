<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Step;
use App\Enums\Tickets;

class Freight extends Model
{
    protected $fillable = [
        'origin',
        'destination',
        'tracking_code',
        'status',
        'sender_id',
        'recipient_id'
    ];
    
    protected $casts = [
        'status' => Tickets::class
    ];
    
    public function steps(): HasMany 
    {
        return $this->hasMany(Step::class);
    }

    public function sender()
    {
        return $this->belongsTo(Customer::class);
    }

    public function recipient()
    {
        return $this->belongsTo(Customer::class);
    }
}

