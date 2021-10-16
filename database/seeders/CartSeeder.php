<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class CartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('carts')->insert([
            [
                'user_id'=>1,
                'cake_id'=>1,
                'quantity' =>2,
            ],
            [
                'user_id'=>2,
                'cake_id'=>3,
                'quantity' =>5,
            ]
        ]);
    }
}
