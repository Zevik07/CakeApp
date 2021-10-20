<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Image;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $images = [
            [
                'type' => 'thumb',
                'url' => 'https://product.hstatic.net/200000276911/product/181744784_504578530678656_8755988932493881845_n_3d856961f7294e9aab95b1af39336294_master.jpg',
                'imageable_id' => 1,
                'imageable_type' => 'cake'
            ],
            [
                'type' => 'colection',
                'url' => 'https://cdn.tgdd.vn/2021/03/CookRecipe/GalleryStep/thanh-pham-1706.jpg',
                'imageable_id' => 1,
                'imageable_type' => 'cake'
            ],
            [
                'type' => 'colection',
                'url' => 'https://toisongkhoe.com/wp-content/uploads/2020/10/b%C3%A1nh-d%C3%A2u.jpg',
                'imageable_id' => 1,
                'imageable_type' => 'cake'
            ],
            [
                'type' => 'colection',
                'url' => 'https://1.bp.blogspot.com/-hOeEXkMVaZ4/WfQeSyxA0NI/AAAAAAAAAI0/BR1VkhYFJHE_d3MMd1Nvp8zyd3Sr6DpvgCEwYBhgL/s1600/5.2.jpg',
                'imageable_id' => 1,
                'imageable_type' => 'cake'
            ],
            [
                'type' => 'thumb',
                'url' => 'http://4.bp.blogspot.com/-sbpJrKlHCXA/VOmV6vxWpXI/AAAAAAAAAQY/7jPzIfW5HA0/s1600/4.jpg',
                'imageable_id' => 2,
                'imageable_type' => 'cake'
            ],
            [
                'type' => 'colection',
                'url' => 'http://image.optcdn.me/744b17cdad41f1bf8042ca091bef4316-moist-chocolate-cupcakes-5.jpg',
                'imageable_id' => 2,
                'imageable_type' => 'cake'
            ],
            [
                'type' => 'colection',
                'url' => 'https://cdn.tgdd.vn/2021/07/CookRecipe/GalleryStep/thanh-pham-1049.jpg',
                'imageable_id' => 2,
                'imageable_type' => 'cake'
            ],
            [
                'type' => 'colection',
                'url' => 'https://www.cookingclassy.com/wp-content/uploads/2014/01/cherry-almond-cupcakes-edit+srgb+text..jpg',
                'imageable_id' => 2,
                'imageable_type' => 'cake'
            ],
            [
                'type' => 'thumb',
                'url' => 'https://cdn.tgdd.vn/Files/2021/08/31/1379394/cach-lam-banh-macaron-nhan-kem-pho-mai-thom-ngon-dep-mat-don-gian-202108312359103668.jpg',
                'imageable_id' => 3,
                'imageable_type' => 'cake'
            ],
            [
                'type' => 'colection',
                'url' => 'https://product.hstatic.net/1000104153/product/img_5479_master.jpg',
                'imageable_id' => 3,
                'imageable_type' => 'cake'
            ],
            [
                'type' => 'colection',
                'url' => 'https://i.ytimg.com/vi/8UpgK0cj7XY/maxresdefault.jpg',
                'imageable_id' => 3,
                'imageable_type' => 'cake'
            ],
            [
                'type' => 'colection',
                'url' => 'https://salt.tikicdn.com/ts/product/d4/de/8c/85fdaced8f113a3a62699b21340ea01c.png',
                'imageable_id' => 3,
                'imageable_type' => 'cake'
            ],
            [
                'type' => 'thumb',
                'url' => 'https://assets.epicurious.com/photos/5761d0268accf290434553aa/master/pass/panna-cotta.jpg',
                'imageable_id' => 4,
                'imageable_type' => 'cake'
            ],
            [
                'type' => 'colection',
                'url' => 'https://cdn.tgdd.vn/2021/03/CookProduct/12000-1200x676.jpg',
                'imageable_id' => 4,
                'imageable_type' => 'cake'
            ],
            [
                'type' => 'colection',
                'url' => 'https://cookkim.com/wp-content/uploads/2019/06/b%C3%A1nh-panna-cotta-b%E1%BA%AFp-6.jpg',
                'imageable_id' => 4,
                'imageable_type' => 'cake'
            ],
            [
                'type' => 'colection',
                'url' => 'https://traicayvuongtron.vn/resources/uploads/toplist2/pannacotta/6.jpg',
                'imageable_id' => 4,
                'imageable_type' => 'cake'
            ],
        ];
        foreach ($images as $key => $value) {
            Image::create($value);
        }
    }
}
