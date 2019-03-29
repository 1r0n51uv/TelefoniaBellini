<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{

    protected $table = 'slider';

    protected $fillable = [
        'pic1', 'pic2', 'pic3'
    ];
}
