<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cake;
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
        // Cake::truncate();
        $cakes = [
            [
                'name' => 'Tiramisu',
                'desc' => 'Không phải xuất xứ từ những câu chuyện thật cảm động nhưng những con người làm nên loại bánh này lại khiến ta cảm động bởi tình cảm họ gửi gắm qua chiếc bánh mang đến cho những người thân yêu của mình. Xuất xứ từ nước Ý, ngày nay, Tiramisu đã trở thành món bánh tráng miệng được yêu thích trên khắp thế giới. Chiếc bánh là sự kết hợp hòa quyện giữa hương thơm của cà phê, rượu nhẹ cùng vị béo của trứng và kem phô mai. Chỉ cần ăn một miếng là sẽ cảm nhận được tất cả các hương vị đó hòa quyện cùng một lúc, chính vì thế mà người ta còn gọi nó là “Thiên đường trong miệng của bạn” (Heaven in your mouth).',
                'price' => 100000,
                'quantity' => 10,
            ],
            [
                'name' => 'Cupcake',
                'desc' => 'Cupcake đã được 200 tuổi rồi đó. Cupcake xuất hiện đầu tiên tại Mỹ vào thế kỷ 19 và nhanh chóng tạo thành một bước đột phá và phổ biến trong các gian bếp. Theo trang Food Timeline, người ta vẫn chưa tìm ra nguồn gốc thật sự của tên gọi cupcake. Họ có 2 lý giải cho tên gọi như sau: 1 là chiếc bánh truyền thông được nướng trong những chiếc cup nhỏ, 2 là những thành phần nguyên liệu của bánh được đong theo cup.',
                'price' => 30000,
                'quantity' => 30,
            ],
            [
                'name' => 'Macaron',
                'desc' => 'Với hình dáng giống như những chiếc hamburger đầy màu sắc, macaron (hay còn được viết là macaroon) từ lâu đã trở thành loại bánh được yêu thích đặc biệt tại Pháp. Được tạo nên từ hai miếng bánh mỏng úp lại, bên trong là lớp nhân dẻo mềm, thơm ngọt và có nhiều hương vị khác nhau như socola, hạnh nhân, dâu, cam, quế, chanh… những chiếc macaron thật sự hấp dẫn thực khách ngay khi họ mới vừa nhìn thấy chúng. Và nếu nếm thử, bạn sẽ cảm nhận được ngay sự giòn tan của hai lớp bánh và vị béo ngậy của lớp kem bên trong cùng những mùi hương riêng của từng loại nhân.',
                'price' => 35000,
                'quantity' => 50,
            ],
            [
                'name' => 'Panna Cotta',
                'desc' => 'Panna cotta sẽ luôn là sự lựa chọn đúng đắn cho món tráng miệng, dù đó có là một buổi lễ trịnh trọng hay chỉ là buổi tiệc nhỏ, dù bạn có nhiều thời gian chuẩn bị hay phải làm gấp rút, dù bạn là người kị gluten, kị bơ sữa, dễ bị dị ứng, ăn chay hoặc đơn giản chỉ là muốn thưởng thức món kem ngọt ngào và thơm ngon. Nó thật sự hoàn hảo',
                'price' => 40000,
                'quantity' => 20,
            ]
        ];
        
        foreach ($cakes as $key => $value) {
            Cake::create($value);
        }
    }
}
