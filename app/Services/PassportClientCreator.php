<?php

namespace App\Services;

use App\Services\Contracts\PassportClientCreatorContract;
use Illuminate\Support\Facades\DB;
use function PHPUnit\Framework\isNull;

class PassportClientCreator implements PassportClientCreatorContract {
    const TABLE_NAME = 'oauth_clients';

    public function create( string $id, string $secret, string $callbackUrl, ?string $name = null ): void {

        $client = DB::table( self::TABLE_NAME )
                    ->where( [
                        'id'       => $id,
                        'secret'   => $secret,
                        'redirect' => $callbackUrl,
                        'name'     => $name
                    ] )
                    ->first();

        if ( $client != null )
            return;

        $this->internalCreate( $id, $secret, $callbackUrl, $name );
    }

    private function internalCreate( string $id, string $secret, string $callbackUrl, ?string $name ): void {
        DB::table( self::TABLE_NAME )
          ->insert( [
              'id'                     => $id,
              'secret'                 => $secret,
              'redirect'               => $callbackUrl,
              'name'                   => $name,
              'personal_access_client' => 0,
              'password_client'        => 0,
              'revoked'                => 0,
              'created_at'             => date( 'c' ),
              'updated_at'             => date( 'c' )
          ] );
    }
}
