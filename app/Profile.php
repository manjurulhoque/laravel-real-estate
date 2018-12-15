<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = []; // allow all for inserting

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
