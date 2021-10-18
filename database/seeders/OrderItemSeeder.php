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
                'cake_id'=>1,
                'quantity'=>3
            ],
            [
                'order_id'=>1,
                'cake_id'=>2,
                'quantity'=>3

            ],
            [
                'order_id'=>2,
                'cake_id'=>3,
                'quantity'=>3

            ],
            [
                'order_id'=>2,
                'cake_id'=>4,
                'quantity'=>3

            ]
        ];
        foreach ($Orders as $key => $value) {
            OrderItem::create($value);
        }
    }
}
