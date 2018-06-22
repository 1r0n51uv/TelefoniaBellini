<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Specification extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('specification', function (Blueprint $table) {
            $table->increments('id');
            $table->string('pic1');
            $table->string('pic2');
            $table->string('pic3');
            $table->string('pic4');
            $table->string('brand');
            $table->string('model');
            $table->string('weight');
            $table->string('year');
            $table->string('memory');
            $table->string('system');
            $table->string('processor');
            $table->string('screen');
            $table->string('display');
            $table->string('resolution');
            $table->string('camera');
            $table->string('color');
            $table->string('status');
            $table->string('description');
            $table->integer('price');
            $table->integer('qty');
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
        Schema::dropIfExists('specification');
    }
}