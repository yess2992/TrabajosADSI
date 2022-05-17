<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
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
        DB::table('users')->insert([
            'fullname' => 'Homero J Simpson',
            'email' => 'homerojames@gmail.com',
            'phone' => '3006027063',
            'birthdate' => '1960-08-06',
            'gender' => 'Male',
            'address' => 'Avenida Siempre Viva',
            'role' => 'Admin',
            'password' => hash::make('admin'),
        ]);
    }
}

    //Method ORM
    $user = new User;
    $user->fullname = 'Ned Flanders';
    $user->email = 'flanders@gmail.com';
    $user->phone = '3218414224';
    $user->birthdate = '1970-02-01';
    $user->gender = 'Male';
    $user->address = 'Esquina Avenida Siempre Viva';
    $user->password = bcrypt('customer');
    $user->save();
