<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FlightsModel extends Model
{
    protected $table = 'flights';

    protected $fillable = ['description','from','to','when'];
}
