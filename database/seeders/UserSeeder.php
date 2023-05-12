<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

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
                "name" => "Parth Patel",
                "email" => "Parth@gmail.com",
                "password" => bcrypt("123456"),
                "birthdate" => "2001-05-15"
            ],
            [
                "name" => "Ram Patel",
                "email" => "Ram@gmail.com",
                "password" => bcrypt("123456"),
                "birthdate" => "2001-05-23"
            ],
            [
                "name" => "Vimal Kashiyani",
                "email" => "vimal@gmail.com",
                "password" => bcrypt("123456"),
                "birthdate" => "2001-06-23"
            ],
            [
                "name" => "Harshad Pathak",
                "email" => "harshad@gmail.com",
                "password" => bcrypt("123456"),
                "birthdate" => "2001-07-23"
            ]
        ];
  
        foreach ($users as $key => $value) {
            User::create($value);
        }
    }
}
