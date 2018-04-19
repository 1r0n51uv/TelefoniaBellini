<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Specification extends Model
{

    protected $table = 'specification';

    protected $fillable = [
        'marca', 'model', 'peso', 'anno', 'memory', 'sistem', 'processor', 'screen', 'display', 'resolution', 'camera', 'media', 'autofocus', 'bluetooth',
    ];
}
