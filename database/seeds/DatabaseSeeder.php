<?php

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
        DB::table('product')->insert(
           [],
           []
        );
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
