<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Order;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Order::truncate();
        $Order = [
            [
                'user_id'=>4,
                'note'=>'Giao hàng trước 4h chiều',
                'status'=>'Đang xử lý',
            ],
            [
                'user_id'=>5,
                'note'=>'Giao hàng trước 4h chiều',
                'status'=>'Đã xác nhận',
            ],
            [
                'user_id'=>6,
                'note'=>'Giao hàng trước 4h chiều',
                'status'=>'Đang xử lý',
            ],
            [
                'user_id'=>7,
                'note'=>'Giao hàng trước 4h chiều',
                'status'=>'Đã xác nhận',
            ],
            [
                'user_id'=>8,
                'note'=>'Giao hàng trước 4h chiều',
                'status'=>'Đang xử lý',
            ],
            [
                'user_id'=>9,
                'note'=>'Giao hàng trước 4h chiều',
                'status'=>'Đã xác nhận',
            ],
            [
                'user_id'=>10,
                'note'=>'Giao hàng trước 4h chiều',
                'status'=>'Đang xử lý',
            ],
            [
                'user_id'=>11,
                'note'=>'Giao hàng trước 4h chiều',
                'status'=>'Đã xác nhận',
            ],
            [
                'user_id'=>12,
                'note'=>'Giao hàng trước 4h chiều',
                'status'=>'Đang xử lý',
            ],
            [
                'user_id'=>13,
                'note'=>'Giao hàng trước 4h chiều',
                'status'=>'Đã xác nhận',
            ],
            [
                'user_id'=>14,
                'note'=>'Giao hàng trước 4h chiều',
                'status'=>'Đang xử lý',
            ],
            
        ];
        foreach ($Order as $key => $value) {
            Order::create($value);
        }
    }
}
