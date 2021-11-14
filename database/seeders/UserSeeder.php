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
                'name'=>'Lê Thị Huỳnh Giao',
                'address'=>'DH Can Tho',
                'phone'=>'0774000828',
                'email'=> 'giao@gmail.com',
                'password'=>$password,
                'role_id'=>1,
            ],
            [
                'name'=>'Lê Văn Hảo',
                'address'=>'DH Can Tho',
                'phone'=>'0774000828',
                'email'=> 'hao@gmail.com',
                'password'=>$password,
                'role_id'=>1,
            ],
            [
                'name'=>'Đinh Hiếu Nghĩa',
                'address'=>'DH Can Tho',
                'phone'=>'0774000828',
                'email'=> 'nghia@gmail.com',
                'password'=>$password,
                'role_id'=>1,
            ],
            [
                'name'=>'Nguyễn Bảo Long',
                'address'=>'DH Can Tho',
                'phone'=>'0774000828',
                'email'=> 'long@gmail.com',
                'password'=>$password,
                'role_id'=>1,
            ],
            [
                'name'=>'Võ Trung Toàn',
                'address'=>'DH Can Tho',
                'phone'=>'0774000828',
                'email'=> 'toan@gmail.com',
                'password'=>$password,
                'role_id'=>1,
            ],
            [
                'name'=>'Trần Việt Trung',
                'address'=>'DH Can Tho',
                'phone'=>'0774000828',
                'email'=> 'trung@gmail.com',
                'password'=>$password,
                'role_id'=>1,
            ],
            [
                'name'=>'Võ Trung Kiên',
                'address'=>'DH Can Tho',
                'phone'=>'0774000828',
                'email'=> 'kien@gmail.com',
                'password'=>$password,
                'role_id'=>1,
            ],
            [
                'name'=>'Võ Trung Hậu',
                'address'=>'DH Can Tho',
                'phone'=>'0774000828',
                'email'=> 'hau@gmail.com',
                'password'=>$password,
                'role_id'=>1,
            ],
            [
                'name'=>'Thái Minh Tuấn',
                'address'=>'DH Can Tho',
                'phone'=>'0774000828',
                'email'=> 'tuan@gmail.com',
                'password'=>$password,
                'role_id'=>1,
            ],
            [
                'name'=>'Trần Minh Thư',
                'address'=>'DH Can Tho',
                'phone'=>'0774000828',
                'email'=> 'thu@gmail.com',
                'password'=>$password,
                'role_id'=>1,
            ],
            [
                'name'=>'Đoàn Thị Thơm',
                'address'=>'DH Can Tho',
                'phone'=>'0774000828',
                'email'=> 'thom@gmail.com',
                'password'=>$password,
                'role_id'=>1,
            ]
        ];
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
