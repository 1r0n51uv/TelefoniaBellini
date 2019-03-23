<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{

    protected $table = 'phone';

    protected $fillable = [
        'brand', 'model', 'storage', 'color', 'price', 'pic', 'description',
    ];


}
