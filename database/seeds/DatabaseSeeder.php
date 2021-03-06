<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('users')->insert([
            [
                'profile_pict' => '/images/users/person.png',
                'name' => 'test',
                'password'=> app('hash')->make('test123'),
                'email'=>'test@gmail.com'
            ],
            [
                'profile_pict' => '/images/users/person.png',
                'name' => 'elpolloloco',
                'password'=> app('hash')->make('elpolloloco123'),
                'email'=>'elpolloloco@gmail.com'
            ],
            [
                'profile_pict' => '/images/users/person.png',
                'name' => 'boi',
                'password'=> app('hash')->make('boi123'),
                'email'=>'boi@gmail.com'
            ],
            [
                'profile_pict' => '/images/users/person.png',
                'name' => 'user',
                'password'=> app('hash')->make('user123'),
                'email'=>'user@gmail.com'
            ],
        ]);
        
    }
}
