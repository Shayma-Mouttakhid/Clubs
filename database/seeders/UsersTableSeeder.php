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
                'username'=>'admin',
                'email'=>'admin@gamil.com',
                'password'=>Hash::make('111'),
                'role'=>'Admin',
                'status'=>'active',

            ],
            [
                //responsable
                'name'=>'responsable',
                'username'=>'responsable',
                'email'=>'responsable@gamil.com',
                'password'=>Hash::make('111'),
                'role'=>'responsable',
                'status'=>'active',

            ],
            [
                //user
                'name'=>'user',
                'username'=>'user',
                'email'=>'user@gamil.com',
                'password'=>Hash::make('111'),
                'role'=>'user',
                'status'=>'active',

            ]
            ]);
    }
}
