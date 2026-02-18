<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    protected $fillable = ["name", "description", "history", "price", "stock", "is_deleted", "category_id", "main_image"];

    public function category():BelongsTo{
        return $this->belongsTo(Category::class);
    }
}
