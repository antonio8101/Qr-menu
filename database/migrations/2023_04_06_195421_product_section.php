<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('product_section', function (Blueprint $table){
            $table->id()->unique();
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('section_id');
            $table->foreign('product_id')->references('id')->on('products');
            $table->foreign('section_id')->references('id')->on('sections');
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('product_section');
    }
};
