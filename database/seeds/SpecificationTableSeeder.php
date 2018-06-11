<?php

use Illuminate\Database\Seeder;

class SpecificationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('specification')->insert(array(
            array('id'=>'1','pic1'=>'P10','pic2'=>'P10','pic3'=>'P10','brand'=>'Samsung','model'=>'S9','weight'=>'1.92','year'=>'2018','memory'=>'128 Gb','system'=>'Andorid 8.1','processor'=>'4x 2.8 GHz M3 Mongoose + 4x 1.7 GHz Cortex-A55','screen'=>'5.8','display'=>'Super AMOLED','resolution'=>'1440 x 2960 pixel','camera'=>'12 Mp', 'price'=>'899',),
            array('id'=>'2','pic1'=>'P10','pic2'=>'P10','pic3'=>'P10','brand'=>'Samsung','model'=>'S9+','weight'=>'189 g','year'=>'2018','memory'=>'256 Gb','system'=>'Andorid 8.1','processor'=>'4x 2.8 GHz M3 Mongoose + 4x 1.7 GHz Cortex-A55','screen'=>'6.2','display'=>'Super AMOLED','resolution'=>'1440 x 2960 pixel','camera'=>'12 Mp + 12 Mp','price'=>'899',),
            array('id'=>'3','pic1'=>'P10','pic2'=>'P10','pic3'=>'P10','brand'=>'Samsung','model'=>'S8+','weight'=>'155 g','year'=>'2017','memory'=>'64 Gb','system'=>'Andorid 7.0','processor'=>'Quad-core 2.3 GHz + Quad-core 1.7 GHz','screen'=>'6.2','display'=>'Super AMOLED','resolution'=>'1440 x 2960 pixel','camera'=>'12 Mp','price'=>'450',),
            array('id'=>'4','pic1'=>'P10','pic2'=>'P10','pic3'=>'P10','brand'=>'Samsung','model'=>'S8','weight'=>'173 g','year'=>'2017','memory'=>'128 Gb','system'=>'Andorid 7.0','processor'=>'Quad-core 2.3 GHz + Quad-core 1.7 GHz','screen'=>'5.8','display'=>'Super AMOLED','resolution'=>'1440 x 2960 pixel','camera'=>'12 Mp','price'=>'450',),
            array('id'=>'5','pic1'=>'P10','pic2'=>'P10','pic3'=>'P10','brand'=>'Samsung','model'=>'A5','weight'=>'159 g','year'=>'2017','memory'=>'32 Gb','system'=>'Andorid 6.0','processor'=>'1.9 GHz 8 Core','screen'=>'5.2','display'=>'Super AMOLED','resolution'=>'1080 x 1920 pixel','camera'=>'16 Mp','price'=>'220',),

        ));
    }
}
