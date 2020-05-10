<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Brand extends Model
{
    use SoftDeletes;
    //
    public function products(): HasMany 
    {
        return $this->hasMany(Product::class);
    }
}
