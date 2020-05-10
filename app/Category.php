<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

class Category extends Model
{
    use SoftDeletes;
    //
    protected $fillable = [
        'name', 'slug', 'description'
    ];

    public function setSlugAttribute($value) {
        // grab the title and slugify it
        $this->attributes['slug'] = Str::slug($this->name);
    }

    public function products(): BelongsToMany 
    {
        return $this->belongsToMany(Product::class);
    }

    public function children(): HasMany
    {
        return $this->hasMany(Category::class, 'parent_id');
    }
}
