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
            'name'=>'Hello Kitty',
            'slug'=> str_slug('Hello Kitty', '-'),
            'image'=>'banh1.jmg',
            'price'=>'200000',
            'sale_price'=>'0',
            'new'=>'1',
            'count_view'=>0,
            'count_sale'=>0,
            'short_description'=>'Hello short_description',
            'full_description'=>'Hello full_description',
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
