<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Categories extends Model
{

    public function Item() : HasMany
    {
        return $this->hasMany(Item::class);
    }

    

}
