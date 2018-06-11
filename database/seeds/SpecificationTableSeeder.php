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
            array(
                'id'=>'1',
                'pic1'=>'P10',
                'pic2'=>'P10',
                'pic3'=>'P10',
                'brand'=>'Samsung',
                'model'=>'S9',
                'weight'=>'1.92',
                'year'=>'2018',
                'memory'=>'128 Gb',
                'system'=>'Andorid 8.1',
                'processor'=>'4x 2.8 GHz M3 Mongoose + 4x 1.7 GHz Cortex-A55',
                'screen'=>'5.8',
                'display'=>'Super AMOLED',
                'resolution'=>'1440 x 2960 pixel',
                'camera'=>'12 Mp',
                'price'=>'899',
                'color' => 'black',
                'status' => 'nuovo',
            ),array(
                'id'=>'2',
                'pic1'=>'P10',
                'pic2'=>'P10',
                'pic3'=>'P10',
                'brand'=>'Samsung',
                'model'=>'S9',
                'weight'=>'1.92',
                'year'=>'2018',
                'memory'=>'128 Gb',
                'system'=>'Andorid 8.1',
                'processor'=>'4x 2.8 GHz M3 Mongoose + 4x 1.7 GHz Cortex-A55',
                'screen'=>'5.8',
                'display'=>'Super AMOLED',
                'resolution'=>'1440 x 2960 pixel',
                'camera'=>'12 Mp',
                'price'=>'899',
                'color' => 'black',
                'status' => 'nuovo',
            ),array(
                'id'=>'3',
                'pic1'=>'P10',
                'pic2'=>'P10',
                'pic3'=>'P10',
                'brand'=>'Samsung',
                'model'=>'S9',
                'weight'=>'1.92',
                'year'=>'2018',
                'memory'=>'128 Gb',
                'system'=>'Andorid 8.1',
                'processor'=>'4x 2.8 GHz M3 Mongoose + 4x 1.7 GHz Cortex-A55',
                'screen'=>'5.8',
                'display'=>'Super AMOLED',
                'resolution'=>'1440 x 2960 pixel',
                'camera'=>'12 Mp',
                'price'=>'899',
                'color' => 'black',
                'status' => 'nuovo',
            )

        ));
    }
}
