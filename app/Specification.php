<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Specification extends Model
{

    protected $table = 'specification';

    protected $fillable = [
        'pic1', 'pic2', 'pic3', 'marca', 'model', 'peso', 'anno', 'memory', 'sistem', 'processor', 'screen', 'display', 'resolution', 'camera', 'media', 'autofocus', 'bluetooth',
    ];
}
