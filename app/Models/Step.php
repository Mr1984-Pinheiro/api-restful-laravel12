<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Step extends Model
{
    protected $fillable = ['description', 'freight_id' ];

    public function freight(): BelongsTo
    {
        return $this->belongsTo(Freight::class);
    }
}
