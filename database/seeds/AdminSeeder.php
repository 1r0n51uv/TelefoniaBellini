<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(array(
            'id' => '71',
            'name' => 'Admin',
            'surname' => 'Admin',
            'email' => 'Admin@telbel.com',
            'password' => \Illuminate\Support\Facades\Hash::make('Nalva71'),
            'fb_id' => '',
            'g_id' => '',
            'fb_pic' => '',
            'g_pic' => '',
            'admin' => 1,
        ));
    }
}
