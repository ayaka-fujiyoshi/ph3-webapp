<?php

use Illuminate\Database\Seeder;
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
        $param_user = [
            [
                'name' => 'taro',
                'email' => 'taro@gmail.com',
                'password' => Hash::make('taromail'),
            ],
            [
                'name' => 'hanako',
                'email' => 'hanako@gmail.com',
                'password' => Hash::make('hanakomail'),
            ]
        ];
        DB::table('users')->insert($param_user);
    }
}
