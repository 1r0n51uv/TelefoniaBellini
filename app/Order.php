<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'order';

    protected $fillable = [
        'products_id', 'user_id', 'shipment_id', 'total'
    ];
}
