<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void {

        Schema::create( 'client_info', function ( Blueprint $table ) {
            $table->uuid( 'client_id' );
            $table->string( 'client_secret' );
            $table->string( 'url_callback' );
        } );

        DB::table( 'client_info' )->insert([
                'client_id'     => env( 'PRIVATEAREA_CLIENT_ID' ),
                'client_secret' => env( 'PRIVATEAREA_CLIENT_SECRET' ),
                'url_callback'  => env( 'PRIVATEAREA_CLIENT_CALLBACK' )
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void {
        Schema::dropIfExists( 'client_secret' );
    }
};
