<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    protected $fillable = ["link","slug"];
    protected $hidden = ["id"];
}
