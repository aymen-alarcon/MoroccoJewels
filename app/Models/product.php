<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    protected $fillable = ["name", "description", "price", "stock", "is_deleted"];

    public function category():BelongsTo{
        return $this->belongsTo(Category::class);
    }
}
