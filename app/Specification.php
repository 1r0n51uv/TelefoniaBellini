<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Specification extends Model
{

    protected $table = 'specification';

    protected $fillable = [
        'pic1', 'pic2', 'pic3', 'brand', 'model', 'weight', 'year', 'memory', 'system', 'processor', 'screen', 'display', 'resolution', 'camera', 'media', 'autofocus', 'bluetooth',
    ];
}
