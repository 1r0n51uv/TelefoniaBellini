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
            $table->string('marca');
            $table->string('model');
            $table->string('peso');
            $table->string('anno');
            $table->string('memory');
            $table->string('sistem');
            $table->string('processor');
            $table->string('screen');
            $table->string('display');
            $table->string('resolution');
            $table->string('camera');
            $table->string('media');
            $table->string('autofocus');
            $table->string('bluetooth');
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
        //
    }
}