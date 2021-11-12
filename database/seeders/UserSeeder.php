<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // User::truncate();
        $password = Hash::make('12345678');
        $user = [
            [
                'name'=>'Ho Trung Nhan',
                'address'=>'DH Can Tho',
                'phone'=>'0774000828',
                'email'=> 'nhan@gmail.com',
                'password'=>$password,
                'role_id'=>2,
            ],
            [
                'name'=>'Nguyen Huu Thien Phu',
                'address'=>'DH Can Tho',
                'phone'=>'0898007389',
                'email'=> 'phu@gmail.com',
                'password'=>$password,
                'role_id'=>2,
            ],
            [
                'name'=>'Vo Van Khanh',
                'address'=>'DH Can Tho',
                'phone'=>'0328494707',
                'email'=> 'khanh@gmail.com',
                'password'=>$password,
                'role_id'=>2,
            ],
            [
                'name'=>'Nguyen Van a',
                'address'=>'DH Can Tho',
                'phone'=>'0774000828',
                'email'=> 'a@gmail.com',
                'password'=>$password,
                'role_id'=>1,
            ],
            [
                'name'=>'Nguyen Van b',
                'address'=>'DH Can Tho',
                'phone'=>'0774000828',
                'email'=> 'b@gmail.com',
                'password'=>$password,
                'role_id'=>1,
            ],
            [
                'name'=>'Nguyen Van c',
                'address'=>'DH Can Tho',
                'phone'=>'0774000828',
                'email'=> 'c@gmail.com',
                'password'=>$password,
                'role_id'=>1,
            ],
            [
                'name'=>'Nguyen Van d',
                'address'=>'DH Can Tho',
                'phone'=>'0774000828',
                'email'=> 'd@gmail.com',
                'password'=>$password,
                'role_id'=>1,
            ],
            [
                'name'=>'Nguyen Van e',
                'address'=>'DH Can Tho',
                'phone'=>'0774000828',
                'email'=> 'e@gmail.com',
                'password'=>$password,
                'role_id'=>1,
            ],
            [
                'name'=>'Nguyen Van f',
                'address'=>'DH Can Tho',
                'phone'=>'0774000828',
                'email'=> 'f@gmail.com',
                'password'=>$password,
                'role_id'=>1,
            ],
            [
                'name'=>'Nguyen Van g',
                'address'=>'DH Can Tho',
                'phone'=>'0774000828',
                'email'=> 'g@gmail.com',
                'password'=>$password,
                'role_id'=>1,
            ],
            [
                'name'=>'Nguyen Van h',
                'address'=>'DH Can Tho',
                'phone'=>'0774000828',
                'email'=> 'h@gmail.com',
                'password'=>$password,
                'role_id'=>1,
            ],
            [
                'name'=>'Nguyen Van i',
                'address'=>'DH Can Tho',
                'phone'=>'0774000828',
                'email'=> 'i@gmail.com',
                'password'=>$password,
                'role_id'=>1,
            ],
            [
                'name'=>'Nguyen Van k',
                'address'=>'DH Can Tho',
                'phone'=>'0774000828',
                'email'=> 'k@gmail.com',
                'password'=>$password,
                'role_id'=>1,
            ],
            [
                'name'=>'Nguyen Van l',
                'address'=>'DH Can Tho',
                'phone'=>'0774000828',
                'email'=> 'l@gmail.com',
                'password'=>$password,
                'role_id'=>1,
            ]
        ];
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
