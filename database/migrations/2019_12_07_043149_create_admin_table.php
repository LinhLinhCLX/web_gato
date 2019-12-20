<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_table', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('email')->unique();
            $table->string('name');
            $table->string('password');
            $table->bigInteger('phone');
            $table->integer('active')->default(1);//
            $table->bigInteger('level')->unsigned();
            // $table
            //     ->foreign('level')
            //     ->references('id')
            //     ->on('permission');
            $table->timestamps();
        });
         Schema::create('user', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('email')->unique();
            $table->string('name');
            $table->string('password');
            $table->integer('active')->default(1);
            $table->bigInteger('phone');
            $table->timestamps();
        });
          Schema::create('message_contact', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('email');
            $table->string('name');
            $table->string('title');
            $table->string('content');
            $table->integer('active')->default(1);//1: pending, 2:Thành công, 3:đang đàm phán, 4:Không thành công
            $table->bigInteger('phone');
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
        Schema::dropIfExists('admin_table');
        Schema::dropIfExists('user');
        Schema::dropIfExists('message_contact');
    }
}
