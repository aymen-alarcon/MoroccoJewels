<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Materiel extends Model
{
    protected $fillable = ["name", "description"];

    public function product():BelongsToMany{
        return $this->belongsToMany(Product::class,  "products_materiels", "materiel_id", "product_id");
    } 
}
