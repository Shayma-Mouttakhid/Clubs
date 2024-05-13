<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use DB ;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('users')->insert([
            [
                //admin
                'name'=>'Admin',
                'email'=>'admin@gmail.com',
                'password'=>Hash::make('911'),
                'role'=>'Admin',
               

            ],
            [
                //responsable
                'name'=>'responsable',
                'email'=>'responsable@gmail.com',
                'password'=>Hash::make('911'),
                'role'=>'responsable',

            ],
            [
                //user
                'name'=>'user',
                'email'=>'user@gmail.com',
                'password'=>Hash::make('911'),
                'role'=>'user',

            ]
            ]);
    }
}
