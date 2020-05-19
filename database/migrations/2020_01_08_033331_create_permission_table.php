<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePermissionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permission', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->unique();//check tên ko được trùng lặp
            //*Bài viết
            $table->tinyInteger('view_post')->default($value = 0);
            $table->tinyInteger('add_post')->default($value = 0);
            $table->tinyInteger('edit_post')->default($value = 0);
            $table->tinyInteger('approve_post')->default($value = 0);
            $table->tinyInteger('delete_post')->default($value = 0);

            $table->tinyInteger('view_category_post')->default($value = 0);
            $table->tinyInteger('add_category_post')->default($value = 0);
            $table->tinyInteger('edit_category_post')->default($value = 0);
            $table->tinyInteger('delete_category_post')->default($value = 0);

            $table->tinyInteger('view_tag_post')->default($value = 0);
            $table->tinyInteger('add_tag_post')->default($value = 0);
            $table->tinyInteger('edit_tag_post')->default($value = 0);
            $table->tinyInteger('delete_tag_post')->default($value = 0);

            //*Product
            $table->tinyInteger('view_product')->default($value = 0);
            $table->tinyInteger('add_product')->default($value = 0);
            $table->tinyInteger('edit_product')->default($value = 0);
            $table->tinyInteger('approve_product')->default($value = 0);
            $table->tinyInteger('delete_product')->default($value = 0);

            $table->tinyInteger('view_category_product')->default($value = 0);
            $table->tinyInteger('add_category_product')->default($value = 0);
            $table->tinyInteger('edit_category_product')->default($value = 0);
            $table->tinyInteger('delete_category_product')->default($value = 0);

            //permission
            $table->tinyInteger('view_permission')->default($value = 0);
            $table->tinyInteger('add_permission')->default($value = 0);
            $table->tinyInteger('edit_permission')->default($value = 0);
            $table->tinyInteger('delete_permission')->default($value = 0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('permission');
    }
}
