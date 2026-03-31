<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Materiel extends Model
{
    protected $fillable = ["name", "description"];

    public function product():BelongsToMany{
        return $this->belongsToMany(Product::class, "materiel_id");
    } 
}
