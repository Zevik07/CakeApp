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
            //
            [
                'type' => 'thumb',
                'url' => 'https://imagesvc.meredithcorp.io/v3/mm/image?url=https%3A%2F%2Fassets.marthastewart.com%2Fstyles%2Fwmax-750%2Fd28%2Fnew-york-cheesecake-mhlb2030%2Fnew-york-cheesecake-mhlb2030_horiz.jpg%3Fitok%3DTzQ4YbmH',
                'imageable_id' => 5,
                'imageable_type' => 'cake'
            ],
            [
                'type' => 'colection',
                'url' => 'https://img.taste.com.au/O8JC4F3Q/taste/2016/11/new-york-cheesecake-40742-1.jpeg',
                'imageable_id' => 5,
                'imageable_type' => 'cake'
            ],
            [
                'type' => 'colection',
                'url' => 'https://cdn.daylambanh.edu.vn/wp-content/uploads/2016/05/cheesecake-dau-tay-ngon.jpg',
                'imageable_id' => 5,
                'imageable_type' => 'cake'
            ],
            [
                'type' => 'colection',
                'url' => 'https://img-global.cpcdn.com/recipes/c085112e1b888aad/1200x630cq70/photo.jpg',
                'imageable_id' => 5,
                'imageable_type' => 'cake'
            ],
            [
                'type' => 'thumb',
                'url' => 'https://www.jessicagavin.com/wp-content/uploads/2021/03/creme-brulee-44-1200.jpg',
                'imageable_id' => 6,
                'imageable_type' => 'cake'
            ],
            [
                'type' => 'colection',
                'url' => 'https://img-global.cpcdn.com/recipes/2cf5e31e91968369/1200x630cq70/photo.jpg',
                'imageable_id' => 6,
                'imageable_type' => 'cake'
            ],
            [
                'type' => 'colection',
                'url' => 'https://www.livewellbakeoften.com/wp-content/uploads/2019/02/Homemade-Creme-Brulee-9-500x500.jpg',
                'imageable_id' => 6,
                'imageable_type' => 'cake'
            ],
            [
                'type' => 'colection',
                'url' => 'https://www.foodiecrush.com/wp-content/uploads/2015/12/Creme-Brulee-foodiecrush.com-27.jpg',
                'imageable_id' => 6,
                'imageable_type' => 'cake'
            ],
            [
                'type' => 'thumb',
                'url' => 'https://cdn.tgdd.vn/Files/2020/03/23/1243894/lam-banh-sung-trau-banh-croissant-trung-muoi-ng-1.jpg',
                'imageable_id' => 7,
                'imageable_type' => 'cake'
            ],
            [
                'type' => 'colection',
                'url' => 'https://lh3.googleusercontent.com/proxy/7G_Virs1yxo0JTbdkLSb2-_sPTNKBdIcZSMlNAUOp13u6rr89O0XeQIuG1qpwb9GGlLfFBOH244txP81-arw8CLcx_IO1xHlOAzVuJ9abSVryQd5ZDsrwkiyueFLKN83PoCND8jY',
                'imageable_id' => 7,
                'imageable_type' => 'cake'
            ],
            [
                'type' => 'colection',
                'url' => 'https://lh3.googleusercontent.com/proxy/HF1sYTRvIBT_qc0JkjE5gwYS1M9R_1Xk86ywo0riRAvSLJ5U8mMyzD5qgKSMVwHb3odxG-DLULWYGuCPHRs29e8F6opR-eWuZqtL0GoHfKEoaEZcfMXHS-ZpdAYV3G8clJdhag',
                'imageable_id' => 7,
                'imageable_type' => 'cake'
            ],
            [
                'type' => 'colection',
                'url' => 'https://cf.shopee.vn/file/64c9c4345ed6a98bdfdf6cc678ec917a',
                'imageable_id' => 7,
                'imageable_type' => 'cake'
            ],
            [
                'type' => 'thumb',
                'url' => 'https://tuvaobep.com/wp-content/uploads/2021/04/cach-lam-banh-cupcake-socola.jpg',
                'imageable_id' => 8,
                'imageable_type' => 'cake'
            ],
            [
                'type' => 'colection',
                'url' => 'https://cdn.tgdd.vn/Files/2018/10/04/1122356/cach-lam-banh-muffins-viet-quat-yaourt-chua-ngot-an-la-nghien-760x367.jpg',
                'imageable_id' => 8,
                'imageable_type' => 'cake'
            ],
            [
                'type' => 'colection',
                'url' => 'https://lh3.googleusercontent.com/proxy/41cpGEo4mJxAO9K3WVetvjEg8DxUa7uThopNruW5iP9aGwRnfcNRRHnIW2X1lvSLjhtYoh2bqCEz115Ezcvct--MI37vtKslUKz9RIxE-wzJYrjNsLoyMcX4Jw',
                'imageable_id' => 8,
                'imageable_type' => 'cake'
            ],
            [
                'type' => 'colection',
                'url' => 'http://afamilycdn.com/thumb_w/660/2017/7-1496692157431.jpg',
                'imageable_id' => 8,
                'imageable_type' => 'cake'
            ],
            [
                'type' => 'thumb',
                'url' => 'https://cdn.tgdd.vn/2020/11/CookProduct/1260-1200x643-48.jpg',
                'imageable_id' => 9,
                'imageable_type' => 'cake'
            ],
            [
                'type' => 'colection',
                'url' => 'https://cdn.daylambanh.edu.vn/wp-content/uploads/2017/11/f2cd3ea2fa74205369dfcf9169ee1dae.jpg',
                'imageable_id' => 9,
                'imageable_type' => 'cake'
            ],
            [
                'type' => 'colection',
                'url' => 'https://cdn.tgdd.vn/2020/06/CookRecipe/Avatar/banh-kem-tra-xanh-matcha-thumbnail-2.jpg',
                'imageable_id' => 9,
                'imageable_type' => 'cake'
            ],
            [
                'type' => 'colection',
                'url' => 'https://cdn.tgdd.vn/2020/12/CookProduct/1260-1200x643-8.jpg',
                'imageable_id' => 9,
                'imageable_type' => 'cake'
            ],
            [
                'type' => 'thumb',
                'url' => 'https://fujimart.vn/image/cache/catalog/thu2-vuive/22.%20B%C3%A1nh%20Donut%20socola-502x502.png',
                'imageable_id' => 10,
                'imageable_type' => 'cake'
            ],
            [
                'type' => 'colection',
                'url' => 'https://cdn.shopify.com/s/files/1/0270/7554/3129/products/IMG_2532_Fotor_1024x1024@2x.jpg?v=1589347973',
                'imageable_id' => 10,
                'imageable_type' => 'cake'
            ],
            [
                'type' => 'colection',
                'url' => 'https://congthucmonngon.com/wp-content/uploads/2021/09/cach-lam-banh-donut-dau-tay-ngon-kho-cuong.jpg',
                'imageable_id' => 10,
                'imageable_type' => 'cake'
            ],
            [
                'type' => 'colection',
                'url' => 'https://bizweb.dktcdn.net/thumb/1024x1024/100/053/059/products/donut-socola.jpg?v=1500883853487',
                'imageable_id' => 10,
                'imageable_type' => 'cake'
            ],
        ];
        foreach ($images as $key => $value) {
            Image::create($value);
        }
    }
}
