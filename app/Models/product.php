<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Product extends Model
{
    protected $fillable = ["name", "description", "history", "price", "stock", "is_deleted", "category_id", "main_image"];

    public function category():BelongsTo{
        return $this->belongsTo(Category::class);
    }

    public function favorite():BelongsToMany{
        return $this->belongsToMany(User::class, "favorites");
    }
}
