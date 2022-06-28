<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
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
                'name'=> 'Alonica Maiza Cantoneros',
                'email'=> 'alonica@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password'=> bcrypt('test123456')
            ],
            [
                'name'=> 'John Doe',
                'email'=> 'doe@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password'=> bcrypt('doe123456')
            ],

            [
                'name'=> 'Don Pasito',
                'email'=> 'pasito@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password'=> bcrypt('pasito123456')
            ],
            [
                'name'=> 'Sasha Grey',
                'email'=> 'gray@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password'=> bcrypt('grey12345')
            ],
        ];

        foreach($users as $user){
            User::create($user);
        }
    }
}
