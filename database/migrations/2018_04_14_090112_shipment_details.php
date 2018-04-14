<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ShipmentDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shipmentDetails', function (Blueprint $table) {
            $table->increments('id');
            $table->string('address');
            $table->string('number');
            $table->string('city');
            $table->string('province');
            $table->string('state');
            $table->integer('cap');
            $table->bigInteger('phone');
            $table->string('description')->nullable();
            $table->integer('user_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shipmentDetails');
    }
}
