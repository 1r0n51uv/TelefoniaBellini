<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShipmentDetails extends Model
{

    protected $table = 'shipmentDetails';

    protected $fillable = [
        'address', 'number', 'city', 'province', 'state', 'cap', 'phone', 'description', 'user_id', 'updated_at','created_at',
    ];
}
