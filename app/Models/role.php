<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Role extends Model
{
    protected $fillable = ["role_name"];

    public function User():HasMany{
        return $this->hasMany(User::class);
    }

    public function permissions():BelongsToMany{
        return $this->BelongsToMany(Permission::class, "permissions_roles", "role_id", "permission_id");
    }
}