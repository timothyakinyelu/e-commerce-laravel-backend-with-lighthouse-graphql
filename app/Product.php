<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;

class Product extends Model
{
    use SoftDeletes;
    //
    protected $fillable = [
        'sku', 'gtin', 'name', 'short_description', 'full_description',
        'slug', 'color', 'featured', 'status', 'stock'
    ];

    public function setSlugAttribute($value) {
        // grab the title and slugify it
        $this->attributes['slug'] = Str::slug($this->name);
    }

    public function brand(): BelongsTo 
    {
        return $this->belongsTo(Brand::class);
    }

    public function categories(): BelongsToMany 
    {
        return $this->belongsToMany(Category::class);
    }

    public function orders(): BelongsToMany 
    {
        return $this->belongsTo(Order::class);
    }
}
