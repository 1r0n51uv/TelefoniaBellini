<?php

use Illuminate\Database\Seeder;

class PhoneTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('phone')->insert(array(
                array(
                    'id'=>'1',
                    'brand'=>'Samsung',
                    'model'=>'S9',
                    'storage'=>'128',
                    'color'=>'Black',
                    'price'=>'899',
                    'description'=>'',
                    'pic' => '',
                ),array(
                    'id'=>'2',
                    'brand'=>'Samsung',
                    'model'=>'S9',
                    'storage'=>'128',
                    'color'=>'Black',
                    'price'=>'899',
                    'description'=>'',
                    'pic' => '',
                ),array(
                    'id'=>'3',
                    'brand'=>'Samsung',
                    'model'=>'S9',
                    'storage'=>'128',
                    'color'=>'Black',
                    'price'=>'899',
                    'description'=>'',
                    'pic' => '',
                ),


            )
        );
    }
}
