<?php
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

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
        DB::table('product')->insert([
          [
            'name'=>'Blue Kitty',
            'slug'=> str_slug('Hello Kitty', '-'),
            'image'=>'banh1.jmg',
            'price'=>'200000',
            'sale_price'=>'0',
            'new'=>'1',
            'count_view'=>0,
            'count_sale'=>0,
            'short_description'=>'Mã: BDD001',
            'full_description'=>'Mã: BDD001
Kích thước to nhỏ tùy theo mức giá. 200.000đ Kích thước đế 18 cm 260.000đ Kích thước đế 22 cm 300.000đ Kích thước đế 26 cm 500.000đ Kích thước đế 35 cm',
            'id_cate_product'=>1,
            'size'=>'22cm',
            'created_at'=> now(),
          ],

          [
            'name'=>'Maruco',
            'slug'=> str_slug('Maruco', '-'),
            'image'=>'banh2.jmg',
            'price'=>'200000',
            'sale_price'=>'0',
            'new'=>'1',
            'count_view'=>0,
            'count_sale'=>0,
            'short_description'=>'Mã: BDD002',
            'full_description'=>'Mã: BDD002
Kích thước to nhỏ tùy theo mức giá. 200.000đ Kích thước đế 18 cm 260.000đ Kích thước đế 22 cm 300.000đ Kích thước đế 26 cm 500.000đ Kích thước đế 35 cm',
            'id_cate_product'=>1,
            'size'=>'22cm',
            'created_at'=> now(),
          ],

            [
                'name'=>'Kute Dog',
                'slug'=> str_slug('Kute Dog', '-'),
                'image'=>'banh3.jmg',
                'price'=>'200000',
                'sale_price'=>'0',
                'new'=>'1',
                'count_view'=>0,
                'count_sale'=>0,
                'short_description'=>'Mã: BDD003',
                'full_description'=>'Mã: BDD003
Kích thước to nhỏ tùy theo mức giá. 200.000đ Kích thước đế 18 cm 250.000đ Kích thước đế 22 cm 300.000đ Kích thước đế 26 cm 500.000đ Kích thước đế 35 cm',
                'id_cate_product'=>1,
                'size'=>'22cm',
                'created_at'=> now(),
            ],

            [
                'name'=>'Mèo 3D',
                'slug'=> str_slug('Mèo 3D', '-'),
                'image'=>'banh4.jmg',
                'price'=>'200000',
                'sale_price'=>'0',
                'new'=>'1',
                'count_view'=>0,
                'count_sale'=>0,
                'short_description'=>'Mã: BDD004',
                'full_description'=>'Mã: BDD004
Kích thước to nhỏ tùy theo mức giá. 180.000đ Kích thước đế 18 cm 190.000đ Kích thước đế 20 cm 240.000đ-250.000đ Kích thước đế 22 cm 300.000đ Kích thước đế 26 cm 500.000đ Kích thước đế 35 cm',
                'id_cate_product'=>1,
                'size'=>'22cm',
                'created_at'=> now(),
            ],

            [
                'name'=>'Chim cánh cụt',
                'slug'=> str_slug('Chim cánh cụt', '-'),
                'image'=>'banh5.jmg',
                'price'=>'200000',
                'sale_price'=>'0',
                'new'=>'1',
                'count_view'=>0,
                'count_sale'=>0,
                'short_description'=>'Mã: BDD005',
                'full_description'=>'Mã: BDD005
Kích thước to nhỏ tùy theo mức giá. 200.000đ Kích thước đế 18 cm 260.000đ Kích thước đế 22 cm 300.000đ Kích thước đế 26 cm 500.000đ Kích thước đế 35 cm',
                'id_cate_product'=>1,
                'size'=>'22cm',
                'created_at'=> now(),
            ],

            [
                'name'=>'Gấu vẽ mặt',
                'slug'=> str_slug('Gấu vẽ mặt', '-'),
                'image'=>'banh6.jmg',
                'price'=>'200000',
                'sale_price'=>'0',
                'new'=>'1',
                'count_view'=>0,
                'count_sale'=>0,
                'short_description'=>'Mã: BDD006',
                'full_description'=>'Mã: BDD006
                Kích thước to nhỏ tùy theo mức giá. 200.000đ Kích thước đế 18 cm 260.000đ Kích thước đế 22 cm 300.000đ Kích thước đế 26 cm 500.000đ Kích thước đế 35 cm',
                'id_cate_product'=>1,
                'size'=>'22cm',
                'created_at'=> now(),
            ],

            [
                'name'=>'Smiling girl',
                'slug'=> str_slug('Smiling girl', '-'),
                'image'=>'banh7.jmg',
                'price'=>'200000',
                'sale_price'=>'0',
                'new'=>'1',
                'count_view'=>0,
                'count_sale'=>0,
                'short_description'=>'Mã: BDD007',
                'full_description'=>'Mã: BDD007
                Kích thước to nhỏ tùy theo mức giá. 200.000đ Kích thước đế 18 cm 260.000đ Kích thước đế 22 cm 300.000đ Kích thước đế 26 cm 500.000đ Kích thước đế 35 cm',
                'id_cate_product'=>1,
                'size'=>'22cm',
                'created_at'=> now(),
            ],

            [
                'name'=>'Angry bird',
                'slug'=> str_slug('Angry bird', '-'),
                'image'=>'banh8.jmg',
                'price'=>'200000',
                'sale_price'=>'0',
                'new'=>'1',
                'count_view'=>0,
                'count_sale'=>0,
                'short_description'=>'Mã: BDD008',
                'full_description'=>'Mã: BDD008
                Kích thước to nhỏ tùy theo mức giá. 200.000đ Kích thước đế 18 cm 260.000đ Kích thước đế 22 cm 300.000đ Kích thước đế 26 cm 500.000đ Kích thước đế 35 cm',
                'id_cate_product'=>1,
                'size'=>'22cm',
                'created_at'=> now(),
            ],

            [
                'name'=>'Doremon',
                'slug'=> str_slug('Doremon', '-'),
                'image'=>'banh9.jmg',
                'price'=>'200000',
                'sale_price'=>'0',
                'new'=>'1',
                'count_view'=>0,
                'count_sale'=>0,
                'short_description'=>'Mã: BDD009',
                'full_description'=>'Mã: BDD009
                Kích thước to nhỏ tùy theo mức giá. 200.000đ Kích thước đế 18 cm 260.000đ Kích thước đế 22 cm 300.000đ Kích thước đế 26 cm 500.000đ Kích thước đế 35 cm',
                'id_cate_product'=>1,
                'size'=>'22cm',
                'created_at'=> now(),
            ],

            [
                'name'=>'Ô tô 3d',
                'slug'=> str_slug('Ô tô 3d', '-'),
                'image'=>'banh10.jmg',
                'price'=>'200000',
                'sale_price'=>'0',
                'new'=>'1',
                'count_view'=>0,
                'count_sale'=>0,
                'short_description'=>'Mã: BDD010',
                'full_description'=>'Mã: BDD010',
                'id_cate_product'=>1,
                'size'=>'22cm',
                'created_at'=> now(),
            ],

            [
                'name'=>'Khỉ 3d',
                'slug'=> str_slug('Khỉ 3d', '-'),
                'image'=>'banh11.jmg',
                'price'=>'200000',
                'sale_price'=>'0',
                'new'=>'1',
                'count_view'=>0,
                'count_sale'=>0,
                'short_description'=>'Mã: BDD011',
                'full_description'=>'Mã: BDD011',
                'id_cate_product'=>1,
                'size'=>'22cm',
                'created_at'=> now(),
            ],

            [
                'name'=>'Gấu 3d',
                'slug'=> str_slug('Gấu 3d', '-'),
                'image'=>'banh10.jmg',
                'price'=>'200000',
                'sale_price'=>'0',
                'new'=>'1',
                'count_view'=>0,
                'count_sale'=>0,
                'short_description'=>'Mã: BDD012',
                'full_description'=>'Mã: BDD012',
                'id_cate_product'=>1,
                'size'=>'22cm',
                'created_at'=> now(),
            ],

            [
                'name'=>'Gấu panda 3d',
                'slug'=> str_slug('Gấu panda 3d', '-'),
                'image'=>'banh10.jmg',
                'price'=>'200000',
                'sale_price'=>'0',
                'new'=>'1',
                'count_view'=>0,
                'count_sale'=>0,
                'short_description'=>'Mã: BDD015',
                'full_description'=>'Mã: BDD015
                Kích thước to nhỏ tùy theo mức giá. 180.000đ Kích thước đế 18 cm 240.000đ-250.000đ Kích thước đế 22 cm 300.000đ Kích thước đế 26 cm 500.000đ Kích thước đế 35 cm',
                'id_cate_product'=>1,
                'size'=>'22cm',
                'created_at'=> now(),
            ],

            [
                'name'=>'Fly Cock',
                'slug'=> str_slug('Fly Cock', '-'),
                'image'=>'banh16.jmg',
                'price'=>'200000',
                'sale_price'=>'0',
                'new'=>'1',
                'count_view'=>0,
                'count_sale'=>0,
                'short_description'=>'Mã: BDD016',
                'full_description'=>'Mã: BDD016
                Kích thước to nhỏ tùy theo mức giá. 200.000đ Kích thước đế 18 cm 260.000đ Kích thước đế 22 cm 300.000đ Kích thước đế 26 cm 500.000đ Kích thước đế 35 cm',
                'id_cate_product'=>1,
                'size'=>'22cm',
                'created_at'=> now(),
            ],

            [
                'name'=>'Eating Dog',
                'slug'=> str_slug('Eating Dog', '-'),
                'image'=>'banh17.jmg',
                'price'=>'200000',
                'sale_price'=>'0',
                'new'=>'1',
                'count_view'=>0,
                'count_sale'=>0,
                'short_description'=>'Mã: BDD017',
                'full_description'=>'Mã: BDD017
                Kích thước to nhỏ tùy theo mức giá. 200.000đ Kích thước đế 18 cm 260.000đ Kích thước đế 22 cm 300.000đ Kích thước đế 26 cm 500.000đ Kích thước đế 35 cm',
                'id_cate_product'=>1,
                'size'=>'22cm',
                'created_at'=> now(),
            ],

            [
                'name'=>'Fat Dog',
                'slug'=> str_slug('Fat Dog', '-'),
                'image'=>'banh18.jmg',
                'price'=>'200000',
                'sale_price'=>'0',
                'new'=>'1',
                'count_view'=>0,
                'count_sale'=>0,
                'short_description'=>'Mã: BDD018',
                'full_description'=>'Mã: BDD018
                Kích thước to nhỏ tùy theo mức giá. 200.000đ Kích thước đế 18 cm 260.000đ Kích thước đế 22 cm 300.000đ Kích thước đế 26 cm 500.000đ Kích thước đế 35 cm',
                'id_cate_product'=>1,
                'size'=>'22cm',
                'created_at'=> now(),
            ],

            [
                'name'=>'Monkey Face',
                'slug'=> str_slug('Monkey Face', '-'),
                'image'=>'banh19.jmg',
                'price'=>'200000',
                'sale_price'=>'0',
                'new'=>'1',
                'count_view'=>0,
                'count_sale'=>0,
                'short_description'=>'Mã: BDD019',
                'full_description'=>'Mã: BDD019
                Kích thước to nhỏ tùy theo mức giá. 200.000đ Kích thước đế 18 cm 260.000đ Kích thước đế 22 cm 300.000đ Kích thước đế 26 cm 500.000đ Kích thước đế 35 cm',
                'id_cate_product'=>1,
                'size'=>'22cm',
                'created_at'=> now(),
            ],

            [
                'name'=>'Pink Pig',
                'slug'=> str_slug('Pink Pig', '-'),
                'image'=>'banh20.jmg',
                'price'=>'200000',
                'sale_price'=>'0',
                'new'=>'1',
                'count_view'=>0,
                'count_sale'=>0,
                'short_description'=>'Mã: BDD020',
                'full_description'=>'Mã: BDD020
                Kích thước to nhỏ tùy theo mức giá. 200.000đ Kích thước đế 18 cm 260.000đ Kích thước đế 22 cm 300.000đ Kích thước đế 26 cm 500.000đ Kích thước đế 35 cm',
                'id_cate_product'=>1,
                'size'=>'22cm',
                'created_at'=> now(),
            ],

            [
                'name'=>'Trâu xinh',
                'slug'=> str_slug('Trâu xinh', '-'),
                'image'=>'banh21.jmg',
                'price'=>'200000',
                'sale_price'=>'0',
                'new'=>'1',
                'count_view'=>0,
                'count_sale'=>0,
                'short_description'=>'Mã: BDD021',
                'full_description'=>'Mã: BDD021
                Kích thước to nhỏ tùy theo mức giá. 200.000đ Kích thước đế 18 cm 260.000đ Kích thước đế 22 cm 300.000đ Kích thước đế 26 cm 500.000đ Kích thước đế 35 cm',
                'id_cate_product'=>1,
                'size'=>'22cm',
                'created_at'=> now(),
            ],

            [
                'name'=>'Mickey',
                'slug'=> str_slug('Mickey', '-'),
                'image'=>'banh22.jmg',
                'price'=>'200000',
                'sale_price'=>'0',
                'new'=>'1',
                'count_view'=>0,
                'count_sale'=>0,
                'short_description'=>'Mã: BDD022',
                'full_description'=>'Mã: BDD022
                Kích thước to nhỏ tùy theo mức giá. 200.000đ Kích thước đế 18 cm 260.000đ Kích thước đế 22 cm 300.000đ Kích thước đế 26 cm 500.000đ Kích thước đế 35 cm',
                'id_cate_product'=>1,
                'size'=>'22cm',
                'created_at'=> now(),
            ],

            [
                'name'=>'Minnie',
                'slug'=> str_slug('Minnie', '-'),
                'image'=>'banh23.jmg',
                'price'=>'200000',
                'sale_price'=>'0',
                'new'=>'1',
                'count_view'=>0,
                'count_sale'=>0,
                'short_description'=>'Mã: BDD023',
                'full_description'=>'Mã: BDD023
                Kích thước to nhỏ tùy theo mức giá. 200.000đ Kích thước đế 18 cm 260.000đ Kích thước đế 22 cm 300.000đ Kích thước đế 26 cm 500.000đ Kích thước đế 35 cm',
                'id_cate_product'=>1,
                'size'=>'22cm',
                'created_at'=> now(),
            ],

            [
                'name'=>'Tiger',
                'slug'=> str_slug('Tiger', '-'),
                'image'=>'banh24.jmg',
                'price'=>'200000',
                'sale_price'=>'0',
                'new'=>'1',
                'count_view'=>0,
                'count_sale'=>0,
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
                'image'=>'banh25.jmg',
                'price'=>'200000',
                'sale_price'=>'0',
                'new'=>'1',
                'count_view'=>0,
                'count_sale'=>0,
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
                'image'=>'banh26.jmg',
                'price'=>'200000',
                'sale_price'=>'0',
                'new'=>'1',
                'count_view'=>0,
                'count_sale'=>0,
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
                'image'=>'banh27.jmg',
                'price'=>'200000',
                'sale_price'=>'0',
                'new'=>'1',
                'count_view'=>0,
                'count_sale'=>0,
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
                'image'=>'banh28.jmg',
                'price'=>'200000',
                'sale_price'=>'0',
                'new'=>'1',
                'count_view'=>0,
                'count_sale'=>0,
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
                'image'=>'banh29.jmg',
                'price'=>'200000',
                'sale_price'=>'0',
                'new'=>'1',
                'count_view'=>0,
                'count_sale'=>0,
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
                'image'=>'banh30.jmg',
                'price'=>'200000',
                'sale_price'=>'0',
                'new'=>'1',
                'count_view'=>0,
                'count_sale'=>0,
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
                'image'=>'banh31.jmg',
                'price'=>'200000',
                'sale_price'=>'0',
                'new'=>'1',
                'count_view'=>0,
                'count_sale'=>0,
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
                'image'=>'banh32.jmg',
                'price'=>'200000',
                'sale_price'=>'0',
                'new'=>'1',
                'count_view'=>0,
                'count_sale'=>0,
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
                'image'=>'banh33.jmg',
                'price'=>'200000',
                'sale_price'=>'0',
                'new'=>'1',
                'count_view'=>0,
                'count_sale'=>0,
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
                'image'=>'banh34.jmg',
                'price'=>'200000',
                'sale_price'=>'0',
                'new'=>'1',
                'count_view'=>0,
                'count_sale'=>0,
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
                'image'=>'banh35.jmg',
                'price'=>'200000',
                'sale_price'=>'0',
                'new'=>'1',
                'count_view'=>0,
                'count_sale'=>0,
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
                'image'=>'banh36.jmg',
                'price'=>'200000',
                'sale_price'=>'0',
                'new'=>'1',
                'count_view'=>0,
                'count_sale'=>0,
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
                'image'=>'banhhoa1.jmg',
                'price'=>'200000',
                'sale_price'=>'0',
                'new'=>'1',
                'count_view'=>0,
                'count_sale'=>0,
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
                'image'=>'banhhoa2.jmg',
                'price'=>'200000',
                'sale_price'=>'0',
                'new'=>'1',
                'count_view'=>0,
                'count_sale'=>0,
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
                'image'=>'banhhoa3.jmg',
                'price'=>'200000',
                'sale_price'=>'0',
                'new'=>'1',
                'count_view'=>0,
                'count_sale'=>0,
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
                'image'=>'banhhoa4.jmg',
                'price'=>'200000',
                'sale_price'=>'0',
                'new'=>'1',
                'count_view'=>0,
                'count_sale'=>0,
                'short_description'=>'Mã: BH004',
                'full_description'=>'Mã: BH004
                Kích thước to nhỏ tùy theo mức giá. 200.000đ Kích thước đế 18 cm 260.000đ Kích thước đế 22 cm 300.000đ Kích thước đế 26 cm 500.000đ Kích thước đế 35 cm',
                'id_cate_product'=>1,
                'size'=>'22cm',
                'created_at'=> now(),
            ],

        ]);
        DB::table('cate_product')->insert(
           [],
           []
        );
        DB::table('cate_menu')->insert(
           [],
           []
        );
        DB::table('cate_blog')->insert(
           [],
           []
        );
        DB::table('blog')->insert(
           [],
           []
        );
        DB::table('users')->insert(
           [],
           []
        );
        DB::table('users')->insert(
           [],
           []
        );
        
        
        
    }
}
