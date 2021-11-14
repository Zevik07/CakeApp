<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CakeDetail;

class CakeDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $details = [
            [
                'cake_id' => 1,
                'flavor' => 'Chocolate',
            ],
            [
                'cake_id' => 1,
                'flavor' => 'Matcha',
            ],
            [
                'cake_id' => 1,
                'flavor' => 'Strawberry',
            ],
            [
                'cake_id' => 1,
                'flavor' => 'Passion fruits',
            ],
            [
                'cake_id' => 2,
                'flavor' => 'Strawberry',
            ],
            [
                'cake_id' => 2,
                'flavor' => 'Chocolate',
            ],
            [
                'cake_id' => 2,
                'flavor' => 'Matcha',
            ],
            [
                'cake_id' => 2,
                'flavor' => 'Cherry',
            ],
            [
                'cake_id' => 3,
                'flavor' => 'Strawberry',
            ],
            [
                'cake_id' => 3,
                'flavor' => 'Chocolate',
            ],
            [
                'cake_id' => 3,
                'flavor' => 'Matcha',
            ],
            [
                'cake_id' => 3,
                'flavor' => 'Cherry',
            ],
            [
                'cake_id' => 4,
                'flavor' => 'Mulberry',
            ],
            [
                'cake_id' => 4,
                'flavor' => 'Rose',
            ],
            [
                'cake_id' => 4,
                'flavor' => 'Corn',
            ],
            [
                'cake_id' => 4,
                'flavor' => 'Strawberry',
            ],
            //
            [
                'cake_id' => 5,
                'flavor' => 'Truyền thống',
            ],
            [
                'cake_id' => 5,
                'flavor' => 'Mulberry',
            ],
            [
                'cake_id' => 5,
                'flavor' => 'Strawberry',
            ],
            [
                'cake_id' => 5,
                'flavor' => 'Blue Berries',
            ],
            [
                'cake_id' => 6,
                'flavor' => 'Truyền thống',
            ],
            [
                'cake_id' => 7,
                'flavor' => 'Truyền thống',
            ],
            //
            [
                'cake_id' => 8,
                'flavor' => 'Chocolate',
            ],
            [
                'cake_id' => 8,
                'flavor' => 'Bule Berries',
            ],
            [
                'cake_id' => 8,
                'flavor' => 'Raisins',
            ],
            [
                'cake_id' => 8,
                'flavor' => 'Cereals',
            ],
            [
                'cake_id' => 9,
                'flavor' => 'Strawberry',
            ],
            [
                'cake_id' => 9,
                'flavor' => 'Chocolate',
            ],
            [
                'cake_id' => 9,
                'flavor' => 'Matcha',
            ],
            [
                'cake_id' => 9,
                'flavor' => 'Cherry',
            ],
            [
                'cake_id' => 10,
                'flavor' => 'Chocolate',
            ],
            [
                'cake_id' => 10,
                'flavor' => 'Matcha',
            ],
            [
                'cake_id' => 10,
                'flavor' => 'Strawberry',
            ],
            [
                'cake_id' => 10,
                'flavor' => 'Candy',
            ],
        ];
        foreach ($details as $key => $value){
            CakeDetail::create($value);
        }
        
    }
}
