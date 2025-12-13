<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Freight;

class Customer extends Model
{
    protected $fillable = ['name', 'phone'];
    
    public function senders(): HasMany
    {
        return $this->hasMany(Freight::class, 'sender_id');
    }

    public function recipients(): HasMany
    {
        return $this->hasMany(Freight::class, 'recipient_id');
    }
}
