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
                //1
                'name' => 'Tiramisu',
                'desc' => 'Không phải xuất xứ từ những câu chuyện thật cảm động nhưng những con người làm nên loại bánh này lại khiến ta cảm động bởi tình cảm họ gửi gắm qua chiếc bánh mang đến cho những người thân yêu của mình. Xuất xứ từ nước Ý, ngày nay, Tiramisu đã trở thành món bánh tráng miệng được yêu thích trên khắp thế giới. Chiếc bánh là sự kết hợp hòa quyện giữa hương thơm của cà phê, rượu nhẹ cùng vị béo của trứng và kem phô mai. Chỉ cần ăn một miếng là sẽ cảm nhận được tất cả các hương vị đó hòa quyện cùng một lúc, chính vì thế mà người ta còn gọi nó là “Thiên đường trong miệng của bạn” (Heaven in your mouth).',
                'price' => 100000,
                
            ],
            [
                //2
                'name' => 'Cupcake',
                'desc' => 'Cupcake đã được 200 tuổi rồi đó. Cupcake xuất hiện đầu tiên tại Mỹ vào thế kỷ 19 và nhanh chóng tạo thành một bước đột phá và phổ biến trong các gian bếp. Theo trang Food Timeline, người ta vẫn chưa tìm ra nguồn gốc thật sự của tên gọi cupcake. Họ có 2 lý giải cho tên gọi như sau: 1 là chiếc bánh truyền thông được nướng trong những chiếc cup nhỏ, 2 là những thành phần nguyên liệu của bánh được đong theo cup.',
                'price' => 30000,
                
            ],
            [
                //3
                'name' => 'Macaron',
                'desc' => 'Với hình dáng giống như những chiếc hamburger đầy màu sắc, macaron (hay còn được viết là macaroon) từ lâu đã trở thành loại bánh được yêu thích đặc biệt tại Pháp. Được tạo nên từ hai miếng bánh mỏng úp lại, bên trong là lớp nhân dẻo mềm, thơm ngọt và có nhiều hương vị khác nhau như socola, hạnh nhân, dâu, cam, quế, chanh… những chiếc macaron thật sự hấp dẫn thực khách ngay khi họ mới vừa nhìn thấy chúng. Và nếu nếm thử, bạn sẽ cảm nhận được ngay sự giòn tan của hai lớp bánh và vị béo ngậy của lớp kem bên trong cùng những mùi hương riêng của từng loại nhân.',
                'price' => 35000,
               
            ],
            [
                //4
                'name' => 'Panna Cotta',
                'desc' => 'Panna cotta sẽ luôn là sự lựa chọn đúng đắn cho món tráng miệng, dù đó có là một buổi lễ trịnh trọng hay chỉ là buổi tiệc nhỏ, dù bạn có nhiều thời gian chuẩn bị hay phải làm gấp rút, dù bạn là người kị gluten, kị bơ sữa, dễ bị dị ứng, ăn chay hoặc đơn giản chỉ là muốn thưởng thức món kem ngọt ngào và thơm ngon. Nó thật sự hoàn hảo',
                'price' => 40000,
            ],
            [
                //5
                'name' => 'New York Cheesecake',
                'desc' => 'Ngày trước, dạng sơ khai của cheesecake đã là một món ăn nổi tiếng ở Hi Lạp cổ mặc cho sự xâm chiếm và sát nhập vào Roman. Người đầu tiên làm ra Cheesecake như hiện nay là nhà vật lý người Hi Lạp Aegimus, ông đã viết ra cuốn sách về nghệ thuật làm ra chiếc bánh này (πλακουντοποιικόν σύγγραμμα—plakountopoiikon suggramma) . Cuốn De Agri Cultura của Marcus Porcius Cato xuất hiện nhiều công thức của hai món bánh dành cho những tu sĩ: Libum và Placenta. Trong số hai, Placenta là chiếc bánh giống với cheesecake hiện nay nhất, với một lớp vụn được chuẩn bị trước và nướng. Nhưng điều quan trọng nên ghi nhớ rằng, mặc dù những chiếc bánh này được gọi là cheesecake, chúng khác xa về vị và độ đặc so với cheesecake mà chúng ta biết bây giờ.',
                'price' => 100000,
                
            ],
            [
                //6
                'name' => 'Crème Bruleé',
                'desc' => 'Khi nhắc đến Crème Brûlée, người ta thường hay nghĩ đến một sự hòa quyện của vị thanh ngọt và béo mượt hấp dẫn, cùng với lớp đường được khò cứng lại ở trên. Trong công thức crème brûlée đầu tiên được viết trong quyển sách dạy nấu ăn của François Massialot, xuất bản năm 1691, crème brûlée là một hỗn hợp đơn giản bao gồm kem, lòng đỏ trứng, đường và vanilla, được phủ một lớp caramel cứng mà người ăn sẽ phải gõ vỡ ra để tiếp tục thưởng thức.',
                'price' => 30000,
                
            ],
            [
                //7
                'name' => 'Bánh sừng bò',
                'desc' => 'Nhắc đến chiếc bánh Croissant (hay còn gọi là bánh sừng bò), chúng ta sẽ nghĩ ngay đến thủ đô Paris hoa lệ. Nhưng ít ai biết rằng, nước Áo mới là vùng đất khai sinh ra món bánh nổi tiếng này, và hành trình từ nước Áo sang đất Pháp của Croissant cũng thú vị và li kì không kém bất kì câu chuyện lịch sử nào. Về cơ bản, Croissant chỉ là món bánh ăn sáng rất một mạc được làm từ pâte feuilletée (bột xốp tạo bởi bột mì, men, bơ, sữa và muối)',
                'price' => 35000,
               
            ],
            [
                //8
                'name' => 'Bánh nướng Muffin',
                'desc' => 'Cái tên “muffin” trong tiếng Anh có nghĩa là một loại bánh mì có nhân trộn cùng với bột và có kích thước nhỏ. Tên này cũng có nguồn gốc từ chữ “moufflet” trong tiếng Pháp có nghĩa là bánh mì mềm hoặc “Muffe” trong tiếng Đức, có nghĩa là một loại bánh nhỏ.',
                'price' => 40000,
            ],
            [
                //9
                'name' => 'Bánh kem',
                'desc' => 'Bánh kem ra đời ở các nước Tây Âu từ giữa thế kỷ 19, khi đó, nó xuất hiện trong các ngày lễ sinh nhật và trở thành một nét văn hóa đặc trưng cho phương tây. Ở Đức, bánh kem cũng đã xuất hiện sớm vào thế kỉ 18, khi đó nó được đi cùng với nghi thức thắp nến lên chiếc bánh để tạo sự lung linh. Đến thời La Mã cổ đại, chiếc bánh kem đã trở nên phổ biến và gắn bó với cuộc sống của người dân nơi đây.',
                'price' => 100000,
                
            ],
            [
                //10
                'name' => 'Donut',
                'desc' => 'Bánh vòng là một loại bánh ngọt rán hoặc nướng để ăn tráng miệng hay ăn vặt. Đây là loại bánh rất nổi tiếng và phổ biến ở nhiều nước phương Tây, có thể được mua trong cửa hàng hoặc tự làm ở nhà. Thường bánh có dạng hình vòng nhồi nhân bên trong hoặc không nhồi nhân bên trong.',
                'price' => 30000,
                
            ],
            
        ];
        
        foreach ($cakes as $key => $value) {
            Cake::create($value);
        }
        
    }
}
