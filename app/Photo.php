<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    public function property()
    {
        return $this->belongsTo(Property::class);
    }

    public function scopeFeatured(Builder $builder)
    {
        return $builder->where('is_featured', true);
    }
}
