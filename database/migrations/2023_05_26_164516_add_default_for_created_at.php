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
        Schema::table('menu', function (Blueprint $table){
            $table->dropColumn('created_at');
        });
        Schema::table('menu', function (Blueprint $table){
            $table->timestamp('created_at')->useCurrent();
        });

        Schema::table('sections', function (Blueprint $table){
            $table->dropColumn('created_at');
        });
        Schema::table('sections', function (Blueprint $table){
            $table->timestamp('created_at')->useCurrent();
        });

        Schema::table('products', function (Blueprint $table){
            $table->dropColumn('created_at');
        });
        Schema::table('products', function (Blueprint $table){
            $table->timestamp('created_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
