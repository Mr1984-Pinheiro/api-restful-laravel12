<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Category;

class Product extends Model
{
    protected $fillable = [
        'label', 
        'price', 
        'description', 
        'category_id', 
        'sales_count', 
        'views_count'
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
