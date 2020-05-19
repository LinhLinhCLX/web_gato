<?php
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

use \Illuminate\Support\Facades\DB;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *      
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('cate_menu')->insert([
            [
                'name'=>'Danh mục sản phẩm',
                'number_order'=>2,
                'active'=>1,
                'description'=>'mô tả Danh mục sản phẩm',
                'created_at'=> now(),
            ],
            [
                'name'=>'Home',
                'number_order'=>1,
                'active'=>1,
                'description'=>'mô tả Home',
                'created_at'=> now(),
            ], [
                'name'=>'Bai viet',
                'number_order'=>3,
                'active'=>1,
                'description'=>'mô tả Danh mục bài viết',
                'created_at'=> now(),
            ], [
                'name'=>'Liên hệ',
                'number_order'=>4,
                'active'=>1,
                'description'=>'mô tả Liên hệ',
                'created_at'=> now(),
            ]
        ]);
        DB::table('cate_product')->insert([
            [
                'name'=>'Bánh sinh nhật',
                'slug'=> str_slug('Bánh sinh nhật', '-'),
                'image'=>'banhhoa4.jpg',
                'id_cate_menu'=>1,
                'active'=>1,
                'description'=>'Bánh sinh nhật',
                'created_at'=> now(),
            ],
            [
                'name'=>'Bánh Kem (hình con vật)',
                'slug'=> str_slug('Bánh Kem (hình con vật)', '-'),
                'image'=>'banhhoa4.jpg',
                'id_cate_menu'=>1,
                'active'=>1,
                'description'=>'Banh hình con vật',
                'created_at'=> now(),
            ]
        ]);
        DB::table('permission')->insert([
            [
                'name'=>'admin',
                'created_at'=>now(),
            ],
            [
                'name'=>'Cộng tác viên viết bài',
                'created_at'=>now(),
            ]
        ]);
        
        DB::table('admin_table')->insert([
            [
                'name'=>'Admin admin',
                'email'=> 'admin123@gmail.com',
                'password'=> bcrypt('123456'),
                'image' => "anh.jpg",
                'phone'=>123456789,
                'active'=>1,
                'level'=>1,
                'created_at'=> now(),
            ],[
                'name'=>'Linhlinh',
                'email'=> 'linh123@gmail.com',
                'password'=> bcrypt('123456'),
                'image' => "anh.jpg",
                'phone'=>123456789,
                'active'=>1,
                'level'=>1,
                'created_at'=> now(),
            ],[
                'name'=>'admin Truong',
                'email'=> 'truong123@gmail.com',
                'password'=> bcrypt('123456'),
                'image' => "anh.jpg",
                'phone'=>123456789,
                'active'=>1,
                'level'=>1,
                'created_at'=> now(),
            ],[
                'name'=>'Admin Dai',
                'email'=> 'dai123@gmail.com',
                'password'=> bcrypt('123456'),
                'image' => "anh.jpg",
                'phone'=>123456789,
                'active'=>1,
                'level'=>1,
                'created_at'=> now(),
            ]
        ]);
        
        DB::table('product')->insert([
          [
            'name'=>'Blue Kitty',
            'slug'=> str_slug('Hello Kitty', '-'),
            'image'=>'banh1.jpg',
            'price'=>'200000',
            'sale_price'=>'0',
            'news' => random_int(0,1),
            'count_view'=>random_int(10, 60),
            'count_sale'=>random_int(10, 60),
            'short_description'=>'Mã: BDD001',
            'full_description'=>'Mã: BDD001
            Kích thước to nhỏ tùy theo mức giá. 200.000đ Kích thước đế 18 cm 260.000đ Kích thước đế 22 cm 300.000đ Kích thước đế 26 cm 500.000đ Kích thước đế 35 cm',
            'id_cate_product'=>2,
            'size'=>'22cm',
            'created_at'=> now(),
          ],

          [
            'name'=>'Maruco',
            'slug'=> str_slug('Maruco', '-'),
            'image'=>'banh2.jpg',
            'price'=>'200000',
            'sale_price'=>'0',
            'news'=>'0',
            'count_view'=>random_int(10, 60),
            'count_sale'=>random_int(10, 60),
            'short_description'=>'Mã: BDD002',
            'full_description'=>'Mã: BDD002
            Kích thước to nhỏ tùy theo mức giá. 200.000đ Kích thước đế 18 cm 260.000đ Kích thước đế 22 cm 300.000đ Kích thước đế 26 cm 500.000đ Kích thước đế 35 cm',
            'id_cate_product'=>2,
            'size'=>'22cm',
            'created_at'=> now(),
          ],

            [
                'name'=>'Kute Dog',
                'slug'=> str_slug('Kute Dog', '-'),
                'image'=>'banh3.jpg',
                'price'=>'200000',
                'sale_price'=>'0',
                'news'=>'0',
                'count_view'=>random_int(10, 60),
                'count_sale'=>random_int(10, 60),
                'short_description'=>'Mã: BDD003',
                'full_description'=>'Mã: BDD003
Kích thước to nhỏ tùy theo mức giá. 200.000đ Kích thước đế 18 cm 250.000đ Kích thước đế 22 cm 300.000đ Kích thước đế 26 cm 500.000đ Kích thước đế 35 cm',
                'id_cate_product'=>2,
                'size'=>'22cm',
                'created_at'=> now(),
            ],

            [
                'name'=>'Mèo 3D',
                'slug'=> str_slug('Mèo 3D', '-'),
                'image'=>'banh4.jpg',
                'price'=>'200000',
                'sale_price'=>'0',
                'news'=>'0',
                'count_view'=>random_int(10, 60),
                'count_sale'=>random_int(10, 60),
                'short_description'=>'Mã: BDD004',
                'full_description'=>'Mã: BDD00p
Kích thước to nhỏ tùy theo mức giá. 180.000đ Kích thước đế 18 cm 190.000đ Kích thước đế 20 cm 240.000đ-250.000đ Kích thước đế 22 cm 300.000đ Kích thước đế 26 cm 500.000đ Kích thước đế 35 cm',
                'id_cate_product'=>2,
                'size'=>'22cm',
                'created_at'=> now(),
            ],

            [
                'name'=>'Chim cánh cụt',
                'slug'=> str_slug('Chim cánh cụt', '-'),
                'image'=>'banh5.jpg',
                'price'=>'200000',
                'sale_price'=>'0',
                'news'=>'0',
                'count_view'=>random_int(10, 60),
                'count_sale'=>random_int(10, 60),
                'short_description'=>'Mã: BDD005',
                'full_description'=>'Mã: BDD005
Kích thước to nhỏ tùy theo mức giá. 200.000đ Kích thước đế 18 cm 260.000đ Kích thước đế 22 cm 300.000đ Kích thước đế 26 cm 500.000đ Kích thước đế 35 cm',
                'id_cate_product'=>2,
                'size'=>'22cm',
                'created_at'=> now(),
            ],

            [
                'name'=>'Gấu vẽ mặt',
                'slug'=> str_slug('Gấu vẽ mặt', '-'),
                'image'=>'banh6.jpg',
                'price'=>'200000',
                'sale_price'=>'0',
                'news'=>'0',
                'count_view'=>random_int(10, 60),
                'count_sale'=>random_int(10, 60),
                'short_description'=>'Mã: BDD006',
                'full_description'=>'Mã: BDD006
                Kích thước to nhỏ tùy theo mức giá. 200.000đ Kích thước đế 18 cm 260.000đ Kích thước đế 22 cm 300.000đ Kích thước đế 26 cm 500.000đ Kích thước đế 35 cm',
                'id_cate_product'=>2,
                'size'=>'22cm',
                'created_at'=> now(),
            ],

            [
                'name'=>'Smiling girl',
                'slug'=> str_slug('Smiling girl', '-'),
                'image'=>'banh7.jpg',
                'price'=>'200000',
                'sale_price'=>'0',
                'news'=>'0',
                'count_view'=>random_int(10, 60),
                'count_sale'=>random_int(10, 60),
                'short_description'=>'Mã: BDD007',
                'full_description'=>'Mã: BDD007
                Kích thước to nhỏ tùy theo mức giá. 200.000đ Kích thước đế 18 cm 260.000đ Kích thước đế 22 cm 300.000đ Kích thước đế 26 cm 500.000đ Kích thước đế 35 cm',
                'id_cate_product'=>2,
                'size'=>'22cm',
                'created_at'=> now(),
            ],

            [
                'name'=>'Angry bird',
                'slug'=> str_slug('Angry bird', '-'),
                'image'=>'banh8.jpg',
                'price'=>'200000',
                'sale_price'=>'0',
                'news'=>'0',
                'count_view'=>random_int(10, 60),
                'count_sale'=>random_int(10, 60),
                'short_description'=>'Mã: BDD008',
                'full_description'=>'Mã: BDD008
                Kích thước to nhỏ tùy theo mức giá. 200.000đ Kích thước đế 18 cm 260.000đ Kích thước đế 22 cm 300.000đ Kích thước đế 26 cm 500.000đ Kích thước đế 35 cm',
                'id_cate_product'=>2,
                'size'=>'22cm',
                'created_at'=> now(),
            ],

            [
                'name'=>'Doremon',
                'slug'=> str_slug('Doremon', '-'),
                'image'=>'banh9.jpg',
                'price'=>'200000',
                'sale_price'=>'110000',
                'news'=>'0',
                'count_view'=>random_int(10, 60),
                'count_sale'=>random_int(10, 60),
                'short_description'=>'Mã: BDD009',
                'full_description'=>'Mã: BDD009
                Kích thước to nhỏ tùy theo mức giá. 200.000đ Kích thước đế 18 cm 260.000đ Kích thước đế 22 cm 300.000đ Kích thước đế 26 cm 500.000đ Kích thước đế 35 cm',
                'id_cate_product'=>2,
                'size'=>'22cm',
                'created_at'=> now(),
            ],

            [
                'name'=>'Ô tô 3d',
                'slug'=> str_slug('Ô tô 3d', '-'),
                'image'=>'banh10.jpg',
                'price'=>'200000',
                'sale_price'=>'110000',
                'news'=>'0',
                'count_view'=>random_int(10, 60),
                'count_sale'=>random_int(10, 60),
                'short_description'=>'Mã: BDD010',
                'full_description'=>'Mã: BDD010',
                'id_cate_product'=>2,
                'size'=>'22cm',
                'created_at'=> now(),
            ],

            [
                'name'=>'Khỉ 3d',
                'slug'=> str_slug('Khỉ 3d', '-'),
                'image'=>'banh11.jpg',
                'price'=>'200000',
                'sale_price'=>'110000',
                'news'=>'0',
                'count_view'=>random_int(10, 60),
                'count_sale'=>random_int(10, 60),
                'short_description'=>'Mã: BDD011',
                'full_description'=>'Mã: BDD011',
                'id_cate_product'=>2,
                'size'=>'22cm',
                'created_at'=> now(),
            ],

            [
                'name'=>'Gấu 3d',
                'slug'=> str_slug('Gấu 3d', '-'),
                'image'=>'banh10.jpg',
                'price'=>'200000',
                'sale_price'=>'110000',
                'news'=>'0',
                'count_view'=>random_int(10, 60),
                'count_sale'=>random_int(10, 60),
                'short_description'=>'Mã: BDD012',
                'full_description'=>'Mã: BDD012',
                'id_cate_product'=>2,
                'size'=>'22cm',
                'created_at'=> now(),
            ],

            [
                'name'=>'Gấu panda 3d',
                'slug'=> str_slug('Gấu panda 3d', '-'),
                'image'=>'banh10.jpg',
                'price'=>'200000',
                'sale_price'=>'110000',
                'news' => random_int(0,1),
                'count_view'=>random_int(10, 60),
                'count_sale'=>random_int(10, 60),
                'short_description'=>'Mã: BDD015',
                'full_description'=>'Mã: BDD015
                Kích thước to nhỏ tùy theo mức giá. 180.000đ Kích thước đế 18 cm 240.000đ-250.000đ Kích thước đế 22 cm 300.000đ Kích thước đế 26 cm 500.000đ Kích thước đế 35 cm',
                'id_cate_product'=>2,
                'size'=>'22cm',
                'created_at'=> now(),
            ],

            [
                'name'=>'Fly Cock',
                'slug'=> str_slug('Fly Cock', '-'),
                'image'=>'banh16.jpg',
                'price'=>'200000',
                'sale_price'=>'110000',
                'news' => random_int(0,1),
                'count_view'=>random_int(10, 60),
                'count_sale'=>random_int(10, 60),
                'short_description'=>'Mã: BDD016',
                'full_description'=>'Mã: BDD016
                Kích thước to nhỏ tùy theo mức giá. 200.000đ Kích thước đế 18 cm 260.000đ Kích thước đế 22 cm 300.000đ Kích thước đế 26 cm 500.000đ Kích thước đế 35 cm',
                'id_cate_product'=>2,
                'size'=>'22cm',
                'created_at'=> now(),
            ],

            [
                'name'=>'Eating Dog',
                'slug'=> str_slug('Eating Dog', '-'),
                'image'=>'banh17.jpg',
                'price'=>'200000',
                'sale_price'=>'110000',
                'news' => random_int(0,1),
                'count_view'=>random_int(10, 60),
                'count_sale'=>random_int(10, 60),
                'short_description'=>'Mã: BDD017',
                'full_description'=>'Mã: BDD017
                Kích thước to nhỏ tùy theo mức giá. 200.000đ Kích thước đế 18 cm 260.000đ Kích thước đế 22 cm 300.000đ Kích thước đế 26 cm 500.000đ Kích thước đế 35 cm',
                'id_cate_product'=>2,
                'size'=>'22cm',
                'created_at'=> now(),
            ],

            [
                'name'=>'Fat Dog',
                'slug'=> str_slug('Fat Dog', '-'),
                'image'=>'banh18.jpg',
                'price'=>'200000',
                'sale_price'=>'110000',
                'news' => random_int(0,1),
                'count_view'=>random_int(10, 60),
                'count_sale'=>random_int(10, 60),
                'short_description'=>'Mã: BDD018',
                'full_description'=>'Mã: BDD018
                Kích thước to nhỏ tùy theo mức giá. 200.000đ Kích thước đế 18 cm 260.000đ Kích thước đế 22 cm 300.000đ Kích thước đế 26 cm 500.000đ Kích thước đế 35 cm',
                'id_cate_product'=>2,
                'size'=>'22cm',
                'created_at'=> now(),
            ],

            [
                'name'=>'Monkey Face',
                'slug'=> str_slug('Monkey Face', '-'),
                'image'=>'banh19.jpg',
                'price'=>'200000',
                'sale_price'=>'110000',
                'news' => random_int(0,1),
                'count_view'=>random_int(10, 60),
                'count_sale'=>random_int(10, 60),
                'short_description'=>'Mã: BDD019',
                'full_description'=>'Mã: BDD019
                Kích thước to nhỏ tùy theo mức giá. 200.000đ Kích thước đế 18 cm 260.000đ Kích thước đế 22 cm 300.000đ Kích thước đế 26 cm 500.000đ Kích thước đế 35 cm',
                'id_cate_product'=>2,
                'size'=>'22cm',
                'created_at'=> now(),
            ],

            [
                'name'=>'Pink Pig',
                'slug'=> str_slug('Pink Pig', '-'),
                'image'=>'banh20.jpg',
                'price'=>'200000',
                'sale_price'=>'160000',
                'news' => random_int(0,1),
                'count_view'=>random_int(10, 60),
                'count_sale'=>random_int(10, 60),
                'short_description'=>'Mã: BDD020',
                'full_description'=>'Mã: BDD020
                Kích thước to nhỏ tùy theo mức giá. 200.000đ Kích thước đế 18 cm 260.000đ Kích thước đế 22 cm 300.000đ Kích thước đế 26 cm 500.000đ Kích thước đế 35 cm',
                'id_cate_product'=>2,
                'size'=>'22cm',
                'created_at'=> now(),
            ],

            [
                'name'=>'Trâu xinh',
                'slug'=> str_slug('Trâu xinh', '-'),
                'image'=>'banh21.jpg',
                'price'=>'320000',
                'sale_price'=>'110000',
                'news' => random_int(0,1),
                'count_view'=>random_int(10, 60),
                'count_sale'=>random_int(10, 60),
                'short_description'=>'Mã: BDD021',
                'full_description'=>'Mã: BDD021
                Kích thước to nhỏ tùy theo mức giá. 200.000đ Kích thước đế 18 cm 260.000đ Kích thước đế 22 cm 300.000đ Kích thước đế 26 cm 500.000đ Kích thước đế 35 cm',
                'id_cate_product'=>2,
                'size'=>'22cm',
                'created_at'=> now(),
            ],

            [
                'name'=>'Mickey',
                'slug'=> str_slug('Mickey', '-'),
                'image'=>'banh22.jpg',
                'price'=>'320000',
                'sale_price'=>'110000',
                'news' => random_int(0,1),
                'count_view'=>random_int(10, 60),
                'count_sale'=>random_int(10, 60),
                'short_description'=>'Mã: BDD022',
                'full_description'=>'Mã: BDD022
                Kích thước to nhỏ tùy theo mức giá. 200.000đ Kích thước đế 18 cm 260.000đ Kích thước đế 22 cm 300.000đ Kích thước đế 26 cm 500.000đ Kích thước đế 35 cm',
                'id_cate_product'=>2,
                'size'=>'22cm',
                'created_at'=> now(),
            ],

            [
                'name'=>'Minnie',
                'slug'=> str_slug('Minnie', '-'),
                'image'=>'banh23.jpg',
                'price'=>'320000',
                'sale_price'=>'0',
                'news' => random_int(0,1),
                'count_view'=>random_int(10, 60),
                'count_sale'=>random_int(10, 60),
                'short_description'=>'Mã: BDD023',
                'full_description'=>'Mã: BDD023
                Kích thước to nhỏ tùy theo mức giá. 200.000đ Kích thước đế 18 cm 260.000đ Kích thước đế 22 cm 300.000đ Kích thước đế 26 cm 500.000đ Kích thước đế 35 cm',
                'id_cate_product'=>1,
                'size'=>'22cm',
                'created_at'=> now(),
            ],

            [
                'name'=>'Bánh gato mẫu 1 Tiger',
                'slug'=> str_slug('Bánh gato mẫu 1 Tiger', '-'),
                'image'=>'bsn1.jpg',
                'price'=>'320000',
                'sale_price'=>'0',
                'news' => random_int(0,1),
                'count_view'=>random_int(10, 60),
                'count_sale'=>random_int(10, 60),
                'short_description'=>'Mã: BDD024',
                'full_description'=>'Mã: BDD024
                Kích thước to nhỏ tùy theo mức giá. 200.000đ Kích thước đế 18 cm 260.000đ Kích thước đế 22 cm 300.000đ Kích thước đế 26 cm 500.000đ Kích thước đế 35 cm',
                'id_cate_product'=>1,
                'size'=>'22cm',
                'created_at'=> now(),
            ],

            [
                'name'=>'Lợn siêu nhân (Super pig)',
                'slug'=> str_slug('Lợn siêu nhân (Super pig)', '-'),
                'image'=>'banh25.jpg',
                'price'=>'320000',
                'sale_price'=>'0',
                'news' => random_int(0,1),
                'count_view'=>random_int(10, 60),
                'count_sale'=>random_int(10, 60),
                'short_description'=>'Mã: BDD025',
                'full_description'=>'Mã: BDD025
                Kích thước to nhỏ tùy theo mức giá. 200.000đ Kích thước đế 18 cm 260.000đ Kích thước đế 22 cm 300.000đ Kích thước đế 26 cm 500.000đ Kích thước đế 35 cm',
                'id_cate_product'=>1,
                'size'=>'22cm',
                'created_at'=> now(),
            ],
            [
                'name'=>'Purple Dragon',
                'slug'=> str_slug('Purple Dragon', '-'),
                'image'=>'banh26.jpg',
                'price'=>'320000',
                'sale_price'=>'0',
                'news' => random_int(0,1),
                'count_view'=>random_int(10, 60),
                'count_sale'=>random_int(10, 60),
                'short_description'=>'Mã: BDD026',
                'full_description'=>'Mã: BDD026
                Kích thước to nhỏ tùy theo mức giá. 200.000đ Kích thước đế 18 cm 260.000đ Kích thước đế 22 cm 300.000đ Kích thước đế 26 cm 500.000đ Kích thước đế 35 cm',
                'id_cate_product'=>1,
                'size'=>'22cm',
                'created_at'=> now(),
            ],

            [
                'name'=>'Mèo mimi',
                'slug'=> str_slug('Mèo mimi', '-'),
                'image'=>'banh27.jpg',
                'price'=>'320000',
                'sale_price'=>'0',
                'news' => random_int(0,1),
                'count_view'=>random_int(10, 60),
                'count_sale'=>random_int(10, 60),
                'short_description'=>'Mã: BDD027',
                'full_description'=>'Mã: BDD027
                Kích thước to nhỏ tùy theo mức giá. 200.000đ Kích thước đế 18 cm 260.000đ Kích thước đế 22 cm 300.000đ Kích thước đế 26 cm 500.000đ Kích thước đế 35 cm',
                'id_cate_product'=>1,
                'size'=>'22cm',
                'created_at'=> now(),
            ],

            [
                'name'=>'Hey boy',
                'slug'=> str_slug('Hey boy', '-'),
                'image'=>'banh28.jpg',
                'price'=>'320000',
                'sale_price'=>'0',
                'news' => random_int(0,1),
                'count_view'=>random_int(10, 60),
                'count_sale'=>random_int(10, 60),
                'short_description'=>'Mã: BDD028',
                'full_description'=>'Mã: BDD028
                Kích thước to nhỏ tùy theo mức giá. 200.000đ Kích thước đế 18 cm 260.000đ Kích thước đế 22 cm 300.000đ Kích thước đế 26 cm 500.000đ Kích thước đế 35 cm',
                'id_cate_product'=>1,
                'size'=>'22cm',
                'created_at'=> now(),
            ],

            [
                'name'=>'Lady smiling',
                'slug'=> str_slug('Lady smiling', '-'),
                'image'=>'banh29.jpg',
                'price'=>'320000',
                'sale_price'=>'0',
                'news' => random_int(0,1),
                'count_view'=>random_int(10, 60),
                'count_sale'=>random_int(10, 60),
                'short_description'=>'Mã: BDD029',
                'full_description'=>'Mã: BDD029
                Kích thước to nhỏ tùy theo mức giá. 200.000đ Kích thước đế 18 cm 260.000đ Kích thước đế 22 cm 300.000đ Kích thước đế 26 cm 500.000đ Kích thước đế 35 cm',
                'id_cate_product'=>1,
                'size'=>'22cm',
                'created_at'=> now(),
            ],

            [
                'name'=>'Tiger face',
                'slug'=> str_slug('Tiger face', '-'),
                'image'=>'banh30.jpg',
                'price'=>'320000',
                'sale_price'=>'0',
                'news' => random_int(0,1),
                'count_view'=>random_int(10, 60),
                'count_sale'=>random_int(10, 60),
                'short_description'=>'Mã: BDD030',
                'full_description'=>'Mã: BDD030
                Kích thước to nhỏ tùy theo mức giá. 200.000đ Kích thước đế 18 cm 260.000đ Kích thước đế 22 cm 300.000đ Kích thước đế 26 cm 500.000đ Kích thước đế 35 cm',
                'id_cate_product'=>1,
                'size'=>'22cm',
                'created_at'=> now(),
            ],

            [
                'name'=>'Snake',
                'slug'=> str_slug('Snake', '-'),
                'image'=>'banh31.jpg',
                'price'=>'320000',
                'sale_price'=>'0',
                'news' => random_int(0,1),
                'count_view'=>random_int(10, 60),
                'count_sale'=>random_int(10, 60),
                'short_description'=>'Mã: BDD031',
                'full_description'=>'Mã: BDD031
                Kích thước to nhỏ tùy theo mức giá. 200.000đ Kích thước đế 18 cm 260.000đ Kích thước đế 22 cm 300.000đ Kích thước đế 26 cm 500.000đ Kích thước đế 35 cm',
                'id_cate_product'=>1,
                'size'=>'22cm',
                'created_at'=> now(),
            ],

            [
                'name'=>'Fat Pig',
                'slug'=> str_slug('Fat Pig', '-'),
                'image'=>'banh32.jpg',
                'price'=>'320000',
                'sale_price'=>'0',
                'news' => random_int(0,1),
                'count_view'=>random_int(10, 60),
                'count_sale'=>random_int(10, 60),
                'short_description'=>'Mã: BDD032',
                'full_description'=>'Mã: BDD032
                Kích thước to nhỏ tùy theo mức giá. 200.000đ Kích thước đế 18 cm 260.000đ Kích thước đế 22 cm 300.000đ Kích thước đế 26 cm 500.000đ Kích thước đế 35 cm',
                'id_cate_product'=>1,
                'size'=>'22cm',
                'created_at'=> now(),
            ],

            [
                'name'=>'Dog Dog',
                'slug'=> str_slug('Dog Dog', '-'),
                'image'=>'banh33.jpg',
                'price'=>'320000',
                'sale_price'=>'0',
                'news' => random_int(0,1),
                'count_view'=>random_int(10, 60),
                'count_sale'=>random_int(10, 60),
                'short_description'=>'Mã: BDD033',
                'full_description'=>'Mã: BDD033
                Kích thước to nhỏ tùy theo mức giá. 200.000đ Kích thước đế 18 cm 260.000đ Kích thước đế 22 cm 300.000đ Kích thước đế 26 cm 500.000đ Kích thước đế 35 cm',
                'id_cate_product'=>1,
                'size'=>'22cm',
                'created_at'=> now(),
            ],

            [
                'name'=>'Gà Mẹ',
                'slug'=> str_slug('Gà Mẹ', '-'),
                'image'=>'banh34.jpg',
                'price'=>'200000',
                'sale_price'=>'0',
                'news' => random_int(0,1),
                'count_view'=>random_int(10, 60),
                'count_sale'=>random_int(10, 60),
                'short_description'=>'Mã: BDD034',
                'full_description'=>'Mã: BDD034
                Kích thước to nhỏ tùy theo mức giá. 200.000đ Kích thước đế 18 cm 260.000đ Kích thước đế 22 cm 300.000đ Kích thước đế 26 cm 500.000đ Kích thước đế 35 cm',
                'id_cate_product'=>1,
                'size'=>'22cm',
                'created_at'=> now(),
            ],

            [
                'name'=>'Vịt Donald',
                'slug'=> str_slug('Vịt Donald', '-'),
                'image'=>'banh35.jpg',
                'price'=>'200000',
                'sale_price'=>'0',
                'news' => random_int(0,1),
                'count_view'=>random_int(10, 60),
                'count_sale'=>random_int(10, 60),
                'short_description'=>'Mã: BDD035',
                'full_description'=>'Mã: BDD035
                Kích thước to nhỏ tùy theo mức giá. 200.000đ Kích thước đế 18 cm 260.000đ Kích thước đế 22 cm 300.000đ Kích thước đế 26 cm 500.000đ Kích thước đế 35 cm',
                'id_cate_product'=>1,
                'size'=>'22cm',
                'created_at'=> now(),
            ],

            [
                'name'=>'Dê xì tin',
                'slug'=> str_slug('Dê xì tin', '-'),
                'image'=>'banh36.jpg',
                'price'=>'200000',
                'sale_price'=>'0',
                'news' => random_int(0,1),
                'count_view'=>random_int(10, 60),
                'count_sale'=>random_int(10, 60),
                'short_description'=>'Mã: BDD036',
                'full_description'=>'Mã: BDD036
                Kích thước to nhỏ tùy theo mức giá. 200.000đ Kích thước đế 18 cm 260.000đ Kích thước đế 22 cm 300.000đ Kích thước đế 26 cm 500.000đ Kích thước đế 35 cm',
                'id_cate_product'=>1,
                'size'=>'22cm',
                'created_at'=> now(),
            ],

            [
                'name'=>'Bánh giỏ hoa',
                'slug'=> str_slug('Bánh giỏ hoa', '-'),
                'image'=>'banhhoa1.jpg',
                'price'=>'200000',
                'sale_price'=>'0',
                'news' => random_int(0,1),
                'count_view'=>random_int(10, 60),
                'count_sale'=>random_int(10, 60),
                'short_description'=>'Mã: BH001',
                'full_description'=>'Mã: BH001
                Kích thước to nhỏ tùy theo mức giá. 200.000đ Kích thước đế 18 cm 260.000đ Kích thước đế 22 cm 300.000đ Kích thước đế 26 cm 500.000đ Kích thước đế 35 cm',
                'id_cate_product'=>1,
                'size'=>'22cm',
                'created_at'=> now(),
            ],

            [
                'name'=>'Bánh màu hoa',
                'slug'=> str_slug('Bánh màu hoa', '-'),
                'image'=>'banhhoa2.jpg',
                'price'=>'200000',
                'sale_price'=>'0',
                'news' => random_int(0,1),
                'count_view'=>random_int(10, 60),
                'count_sale'=>random_int(10, 60),
                'short_description'=>'Mã: BH002',
                'full_description'=>'Mã: BH002
                Kích thước to nhỏ tùy theo mức giá. 200.000đ Kích thước đế 18 cm 260.000đ Kích thước đế 22 cm 300.000đ Kích thước đế 26 cm 500.000đ Kích thước đế 35 cm',
                'id_cate_product'=>1,
                'size'=>'22cm',
                'created_at'=> now(),
            ],
            [
                'name'=>'Bánh hoa trái tim',
                'slug'=> str_slug('Bánh hoa trái tim', '-'),
                'image'=>'banhhoa3.jpg',
                'price'=>'200000',
                'sale_price'=>'0',
                'news' => random_int(0,1),
                'count_view'=>random_int(10, 60),
                'count_sale'=>random_int(10, 60),
                'short_description'=>'Mã: BH003',
                'full_description'=>'Mã: BH003
                Kích thước to nhỏ tùy theo mức giá. 200.000đ Kích thước đế 18 cm 260.000đ Kích thước đế 22 cm 300.000đ Kích thước đế 26 cm 500.000đ Kích thước đế 35 cm',
                'id_cate_product'=>1,
                'size'=>'22cm',
                'created_at'=> now(),
            ],
            [
                'name'=>'Bánh hoa tim',
                'slug'=> str_slug('Bánh hoa tim', '-'),
                'image'=>'banhhoa4.jpg',
                'price'=>'200000',
                'sale_price'=>'0',
                'news' => random_int(0,1),
                'count_view'=>random_int(10, 60),
                'count_sale'=>random_int(10, 60),
                'short_description'=>'Mã: BH004',
                'full_description'=>'Mã: BH004
                Kích thước to nhỏ tùy theo mức giá. 200.000đ Kích thước đế 18 cm 260.000đ Kích thước đế 22 cm 300.000đ Kích thước đế 26 cm 500.000đ Kích thước đế 35 cm',
                'id_cate_product'=>1,
                'size'=>'22cm',
                'created_at'=> now(),
            ]

        ]);
        DB::table('permission')->insert([
            [
                'name'=>'Admin - Quarn trij vieen',
                'view_post'=>1,
                'add_post'=> 1,
                'edit_post'=> 1,
                'approve_post'=> 1,
                'delete_post'=> 1,

                'view_category_post'=> 1,
                'add_category_post'=> 1,
                'edit_category_post'=> 1,
                'delete_category_post'=> 1,

                'view_tag_post'=> 1,
                'add_tag_post'=> 1,
                'edit_tag_post'=> 1,
                'delete_tag_post'=> 1,

                'view_product'=> 1,
                'add_product'=> 1,
                'edit_product'=> 1,
                'approve_product'=> 1,
                'delete_product'=> 1,

                'view_category_product'=> 1,
                'add_category_product'=> 1,
                'edit_category_product'=> 1,
                'delete_category_product'=> 1,

                'view_permission'=> 1,
                'add_permission'=> 1,
                'edit_permission'=> 1,
                'delete_permission'=> 1,

                'created_at'=> now(),
            ]
        ]);
        DB::table('blog')->insert([
            [
                'name'=>'Bài viết 1 Bánh quy',
                'slug'=> str_slug('Bài viết 1', '-'),
                'short_description'=>'Tóm tắt nội dung Bài viết 1',
                'full_description'=>'nội dung dài Bài viết 1',
                'active'=>1,
                'image'=>'blog1-banhquy.png',
                'id_admin'=>1,
                'id_cate_blog'=>1,
                'created_at'=> now(),
            ],[
                'name'=>'Bài viết 2: Bánh kép thơm ngon',
                'slug'=> str_slug('Bài viết 2', '-'),
                'short_description'=>'Tóm tắt nội dung Bài viết 1',
                'full_description'=>'nội dung dài Bài viết 1',
                'active'=>1,
                'image'=>'cach-lam-banh-kep-thom-ngon-600x400.jpg',
                'id_admin'=>1,
                'id_cate_blog'=>1,
                'created_at'=> now(),
            ]
        ]);
        DB::table('cate_blog')->insert([
            [
                'name'=>'Cách làm Bánh quy',
                'slug'=> str_slug('Cách làm Bánh quy', '-'),
                'description'=>'Mô tả tiêu đề: làm bánh ngon, bánh quy',
                'active'=>1,
                'image'=>'blog1-banhquy.png',
                'id_cate_menu'=>1,
                'created_at'=> now(),
            ],[
                'name'=>'Cách làm Bánh kép thơm ngon',
                'slug'=> str_slug('Cách làm Bánh kép thơm ngon', '-'),
                'description'=>'Mô tả tiêu đề: Tóm tắt nội dung cate_menu Bài viết 1',
                'active'=>1,
                'image'=>'cach-lam-banh-kep-thom-ngon-600x400.jpg',
                'id_cate_menu'=>2,
                'created_at'=> now(),
            ]
        ]);

    }
}
