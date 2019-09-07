<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            'name' => 'reception',
            'email' => 'reception@mail.com',
            'department' => 'reception',
            'password' => Hash::make('reception')
        ]);
        User::create([
            'name' => 'radiology',
            'email' => 'radiology@mail.com',
            'department' => 'radiology',
            'password' => Hash::make('radiology')
        ]);
        User::create([
            'name' => 'treatment',
            'email' => 'treatment@mail.com',
            'department' => 'treatment',
            'password' => Hash::make('treatment')
        ]);
        User::create([
            'name' => 'optical',
            'email' => 'optical@mail.com',
            'department' => 'optical',
            'password' => Hash::make('optical')
        ]);
        User::create([
            'name' => 'nursing',
            'email' => 'nursing@mail.com',
            'department' => 'nursing',
            'password' => Hash::make('nursing')
        ]);
        User::create([
            'name' => 'laboratory',
            'email' => 'laboratory@mail.com',
            'department' => 'laboratory',
            'password' => Hash::make('laboratory')
        ]);
    }
}
