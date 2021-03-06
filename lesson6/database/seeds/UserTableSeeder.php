<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
        	[
        		'name' => 'admin', 
        		'email' => 'admin@gmail.com' , 
        		'password' => Hash::make('secret')
        	],
        	[
        		'name' => 'nguyen van giap', 
        		'email' => 'giapnv@gmail.com' , 
        		'password' => Hash::make('123456')
        	],
        ];

        DB::table('users')->insert($users);
    }
}
