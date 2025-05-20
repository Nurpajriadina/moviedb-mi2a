<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
     protected $fillable = ['id', 'category_name', 'description'];
    public $incrementing = false; // disable auto-incrementing to allow manual id update

    public function movies(): HasMany
    {
        return $this->hasMany(Category::class);
    }
}
