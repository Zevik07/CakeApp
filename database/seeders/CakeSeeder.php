<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CakeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cakes')->insert([
            [
                'name' => 'Tiramisu',
                'desc' => 'Bánh tiramisu là một loại bánh ngoạt tráng miệng rất quen thuộc với hầu hết chúng ta.',
                'price' => 100000,
                'quantity' => 10,
            ],
            [
                'name' => 'Cupcake',
                'desc' => 'Cupcake xuất hiện đầu tiên tại Mỹ vào thế kỷ 19 và nhanh chóng tạo thành một bước đột phá và phổ biến trong các gian bếp.',
                'price' => 30000,
                'quantity' => 30,
            ],
            [
                'name' => 'Macaron',
                'desc' => 'Với hình dáng giống như những chiếc hamburger đầy màu sắc, 
                            macaron (hay còn được viết là macaroon) từ lâu đã trở thành loại bánh được yêu thích đặc biệt tại Pháp.',
                'price' => 35000,
                'quantity' => 50,
            ],
            [
                'name' => 'Panna Cotta',
                'desc' => 'Panna cotta sẽ luôn là sự lựa chọn đúng đắn cho món tráng miệng, 
                            hoặc đơn giản chỉ là muốn thưởng thức món kem ngọt ngào và thơm ngon. 
                            Nó thật sự hoàn hảo.',
                'price' => 40000,
                'quantity' => 20,
            ]
        ]);
    }
}
