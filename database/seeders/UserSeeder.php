<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(array(
            array(
                'username'=>'Admin',
                'email'=>'admin@gmail.com',
                'password'=>Hash::make('12345'),
                'role'=> 1,
            ),
           
                array(
                    'username'=>'amggota',
                    'email'=>'anggota@gmail.com',
                    'password'=>Hash::make('12345'),
                    'role'=>2
                ),
            
                    array(
                        'username'=>'peserta',
                        'email'=>'peserta@gmail.com',
                        'password'=>Hash::make('12345'),
                        'role'=>3
                    ),
            ));
    }
}
