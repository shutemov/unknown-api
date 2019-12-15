<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RouteWay extends Model
{
    protected $guarded = [];

    public function points()
    {
        return $this->hasMany(Point::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
