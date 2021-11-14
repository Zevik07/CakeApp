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
                'price'=>100000,
                'quantity'=>3,
                'note'=>'Giao từ 1h-3h chiều'
            ],
            [
                'order_id'=>1,
                'cake_detail_id'=>2,
                'price'=>100000,
                'quantity'=>3,
                'note'=>'Giao cả ngày'
            ],
            [
                'order_id'=>2,
                'cake_detail_id'=>3,
                'price'=>100000,
                'quantity'=>3,
                'note'=>'Gửi bánh dưới quầy lễ tân'
            ],
            [
                'order_id'=>3,
                'cake_detail_id'=>4,
                'price'=>100000,
                'quantity'=>3,
                'note'=>'Gửi bánh chú bảo vệ'
            ],
            [
                'order_id'=>4,
                'cake_detail_id'=>5,
                'price'=>30000,
                'quantity'=>3,
                'note'=>'Gửi bánh dưới quầy lễ tân'
            ],
            [
                'order_id'=>5,
                'cake_detail_id'=>6,
                'price'=>30000,
                'quantity'=>3,
                'note'=>'Gửi bánh chú bảo vệ'
            ],
            [
                'order_id'=>6,
                'cake_detail_id'=>7,
                'price'=>30000,
                'quantity'=>3,
                'note'=>'Gửi bánh dưới quầy lễ tân'
            ],
            [
                'order_id'=>7,
                'cake_detail_id'=>8,
                'price'=>30000,
                'quantity'=>3,
                'note'=>'Gửi bánh chú bảo vệ'
            ],
            [
                'order_id'=>8,
                'cake_detail_id'=>9,
                'price'=>35000,
                'quantity'=>3,
                'note'=>'Gửi bánh dưới quầy lễ tân'
            ],
            [
                'order_id'=>9,
                'cake_detail_id'=>10,
                'price'=>35000,
                'quantity'=>3,
                'note'=>'Gửi bánh chú bảo vệ'
            ],
            [
                'order_id'=>10,
                'cake_detail_id'=>11,
                'price'=>35000,
                'quantity'=>3,
                'note'=>'Gửi bánh dưới quầy lễ tân'
            ],
            [
                'order_id'=>11,
                'cake_detail_id'=>12,
                'price'=>35000,
                'quantity'=>3,
                'note'=>'Gửi bánh chú bảo vệ'
            ],
            
            
        ];
        foreach ($Orders as $key => $value) {
            OrderItem::create($value);
        }
    }
}
