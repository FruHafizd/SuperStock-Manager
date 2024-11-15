<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Item extends Model
{
    

    public function Categories() : BelongsTo
    {
        return $this->belongsTo(Categories::class);    
    }

    public function Supplier() : HasMany
    {
        return $this->HasMany(Supplier::class);    
    }

}
