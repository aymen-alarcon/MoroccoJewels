<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Favorite extends Model
{
    protected $fillable = ["order_id", "user_id"];

    public function user():BelongsTo{
        return $this->belongsTo(User::class);
    }

    public function order():HasMany{
        return $this->hasMany(Order::class);
    }
}
