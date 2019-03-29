<?php

use Illuminate\Database\Seeder;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('slider')->insert(array(
            array(
                'id'=>'1',
                'pic1' => '../assets/image/slider/iphonexr.jpg',
                'pic2' => '../assets/image/slider/s10.jpg',
                'pic3' => '../assets/image/slider/s10.jpg'
            )
        ));
    }
}
