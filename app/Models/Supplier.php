<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Supplier extends Model
{
    
    public function Item() : BelongsTo
    {
        return $this->belongsTo(Item::class);
    }
}
