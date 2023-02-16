<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class RoleSeeder extends Seeder
{

    public function run()
     {
    //     Schema::disableForeignKeyConstraints();
    //     Role::truncate();
    //     Schema::enableForeignKeyConstraints();


    //     $data = [
    //         'admin', 'client'
    //     ];

    //     foreach ($data as $value)
    //     {   
    //         Role::insert([
    //             'name' => $value 
    //         ]);
    //     }

    DB::table('users')->insert([
        [
            'name' => 'nazifa',
            'email' =>  'nazifaumar@gmail.com',
            'originalPass' => 'zifa1212',
            'password' => Hash::make ('zifa1212'),
            'phone' => '08569070016',
            'address' => 'bogor',
            'role_id' => 1
        ],
        
        [
            'name' => 'sarah',
            'email' =>  'sarah@gmail.com',
            'originalPass' => 'zifa1212',
            'password' => Hash::make ('sarah1212'),
            'phone' => '08569070016',
            'address' => 'bandung',
            'role_id' => 2
        ]
        ]);
    }
}
