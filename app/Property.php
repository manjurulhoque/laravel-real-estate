<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $guarded = [];

//    public function scopeFilter($q)
//    {
//        if (request('city')) {
//            $q->where('city', '=', request('city'));
//        }
////        if (request('color')) {
////            $q->where('color', '>', request('color'));
////        }
//
//        return $q;
//    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function photos()
    {
        return $this->hasMany(Photo::class);
    }

    public function get_featured_image()
    {
        //return $this->photos()->where('is_featured', '=', true)->get();
        return $this->photos()->featured()->first();
    }
}
