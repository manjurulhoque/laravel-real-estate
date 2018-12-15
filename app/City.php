<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    public function areas()
    {
        return $this->hasMany(Area::class);
    }
}
