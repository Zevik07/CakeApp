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
                'quantity' =>5
            ],
            [
                'cake_id' => 1,
                'flavor' => 'Matcha',
                'quantity' =>5
            ],
            [
                'cake_id' => 1,
                'flavor' => 'Strawberry',
                'quantity' =>5
            ],
            [
                'cake_id' => 1,
                'flavor' => 'Passion fruits',
                'quantity' =>5
            ],
            [
                'cake_id' => 2,
                'flavor' => 'Strawberry',
                'quantity' =>5
            ],
            [
                'cake_id' => 2,
                'flavor' => 'Chocolate',
                'quantity' =>5
            ],
            [
                'cake_id' => 2,
                'flavor' => 'Matcha',
                'quantity' =>5
            ],
            [
                'cake_id' => 2,
                'flavor' => 'Cherry',
                'quantity' =>5
            ],
            //
            [
                'cake_id' => 3,
                'flavor' => 'Strawberry',
                'quantity' =>5
            ],
            [
                'cake_id' => 3,
                'flavor' => 'Chocolate',
                'quantity' =>5
            ],
            [
                'cake_id' => 3,
                'flavor' => 'Matcha',
                'quantity' =>5
            ],
            [
                'cake_id' => 3,
                'flavor' => 'Cherry',
                'quantity' =>5
            ],
            [
                'cake_id' => 4,
                'flavor' => 'Mulberry',
                'quantity' =>5
            ],
            [
                'cake_id' => 4,
                'flavor' => 'Rose',
                'quantity' =>5
            ],
            [
                'cake_id' => 4,
                'flavor' => 'Corn',
                'quantity' =>5
            ],
            [
                'cake_id' => 4,
                'flavor' => 'Strawberry',
                'quantity' =>5
            ],
            //
            [
                'cake_id' => 5,
                'flavor' => 'Chocolate',
                'quantity' =>5
            ],
            [
                'cake_id' => 5,
                'flavor' => 'Matcha',
                'quantity' =>5
            ],
            [
                'cake_id' => 5,
                'flavor' => 'Strawberry',
                'quantity' =>5
            ],
            [
                'cake_id' => 5,
                'flavor' => 'Passion fruits',
                'quantity' =>5
            ],
            [
                'cake_id' => 6,
                'flavor' => 'Strawberry',
                'quantity' =>5
            ],
            [
                'cake_id' => 6,
                'flavor' => 'Chocolate',
                'quantity' =>5
            ],
            [
                'cake_id' => 6,
                'flavor' => 'Matcha',
                'quantity' =>5
            ],
            [
                'cake_id' => 6,
                'flavor' => 'Cherry',
                'quantity' =>5
            ],
            [
                'cake_id' => 7,
                'flavor' => 'Mulberry',
                'quantity' =>5
            ],
            [
                'cake_id' => 7,
                'flavor' => 'Rose',
                'quantity' =>5
            ],
            [
                'cake_id' => 7,
                'flavor' => 'Corn',
                'quantity' =>5
            ],
            [
                'cake_id' => 7,
                'flavor' => 'Strawberry',
                'quantity' =>5
            ],
        ];
        foreach ($details as $key => $value){
            CakeDetail::create($value);
        }
        
    }
}
