<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $guarded = [];

    public function routes()
    {
        return $this->hasMany(RouteWay::class);
    }
}
