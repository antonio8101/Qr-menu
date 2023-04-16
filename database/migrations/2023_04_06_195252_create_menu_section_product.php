<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu', function (Blueprint $table){
            $table->id('menu_id');
            $table->string('name_menu');
            $table->integer('order');
            $table->boolean('visible');
            $table->timestamp('created_at');
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });

        Schema::table('menu', function (Blueprint $table){
            $table->string('user_id');
            $table->foreign('user_id','user_fk')->references('id')->on('users');
        });
        Schema::create('sections', function (Blueprint $table){
            $table->id('section_id')->unique();
            $table->string('name_section');
            $table->integer('order');
            $table->boolean('visible');
            $table->timestamp('created_at');
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
        Schema::table('sections', function (Blueprint $table){
            $table->unsignedBigInteger('menu_id');
            $table->foreign('menu_id', 'menu_fk')->references('menu_id')->on('menu');
        });

        Schema::create('products', function (Blueprint $table) {
            $table->id('product_id')->unique();
            $table->string('name_dish');
            $table->string('description');
            $table->string('featured')->nullable();
            $table->string('starred')->nullable();
            $table->timestamp('created_at');
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menu');
        Schema::dropIfExists('section');
        Schema::dropIfExists('product');
    }
};
