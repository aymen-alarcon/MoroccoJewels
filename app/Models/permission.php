<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class permission extends Model
{
    protected $fillable = ["name", "description"];

    public function role():BelongsTo{
        return $this->belongsTo(Role::class);
    }
}
