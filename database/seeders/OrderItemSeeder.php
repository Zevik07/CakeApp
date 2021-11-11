<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\OrderItem;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class OrderItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // OrderItem::truncate();
        $Orders = [
            [
                'order_id'=>1,
                'cake_detail_id'=>1,
                'quantity'=>3,
                'note'=>'Giao từ 1h-3h chiều'
            ],
            [
                'order_id'=>1,
                'cake_detail_id'=>5,
                'quantity'=>3,
                'note'=>'Giao cả ngày'
            ],
            [
                'order_id'=>2,
                'cake_detail_id'=>1,
                'quantity'=>3,
                'note'=>'Gửi bánh dưới quầy lễ tân'
            ],
            [
                'order_id'=>2,
                'cake_detail_id'=>10,
                'quantity'=>3,
                'note'=>'Gửi bánh chú bảo vệ'

            ]
        ];
        foreach ($Orders as $key => $value) {
            OrderItem::create($value);
        }
    }
}
