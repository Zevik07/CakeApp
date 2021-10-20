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
                'user_id'=>1,
                'status'=>'Processing',
            ],
            [
                'user_id'=>3,
                'status'=>'Shipping',
            ]
        ];
        foreach ($Order as $key => $value) {
            Order::create($value);
        }
    }
}
