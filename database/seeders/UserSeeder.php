<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
                'name'=>'user',
                'email'=>'user@user.com',
                'type'=>0,
                'password'=>bcrypt(123456),
            ],
            [
                'name'=>'admin',
                'email'=>'admin@admin.com',
                'type'=>1,
                'password'=>bcrypt(123456),
            ],
            [
                'name'=>'guru',
                'email'=>'guru@guru.com',
                'type'=>2,
                'password'=>bcrypt(123456),
            ],
            [
                'name'=>'murid',
                'email'=>'murid@murid.com',
                'type'=>3,
                'password'=>bcrypt(123456),
            ],
        ];

        foreach ($users as $key => $user){
            User::create($user);
        }
    }
}
