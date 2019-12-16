<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Point extends Model
{
    protected $guarded = [];

    public function route()
    {
        return $this->belongsTo(RouteWay::class);
    }
}
