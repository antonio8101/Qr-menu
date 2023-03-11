<?php

namespace App\Console\Commands;

use App\Services\Contracts\PassportClientCreatorContract;
use Dotenv\Dotenv;
use Illuminate\Console\Command;

class SetClientFromConfig extends Command {
    private PassportClientCreatorContract $clientCreator;

    public function __construct( PassportClientCreatorContract $clientCreator ) {
        parent::__construct();
        $this->clientCreator = $clientCreator;
    }

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'qrmenu:set_client';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle(): int {

        if ( file_exists( 'resources/app/.env' ) ) {

            $this->info( 'File .env for React app exists' );

            $dotenv = Dotenv::createImmutable( 'resources\app' );
            $dotenv->load();

            $react_app_sub_folder    = env( 'REACT_APP_SUBFOLDER_NAME' );
            $react_app_client_id     = env( 'REACT_APP_CLIENT_ID' );
            $react_app_client_secret = env( 'REACT_APP_CLIENT_SECRET' );
            $react_app_client_host   = env( 'REACT_APP_HOST' );
            $laravel_app_host        = env( 'REACT_APP_URL' );

            $privatearea_url = ($react_app_client_host == $laravel_app_host) ? $react_app_sub_folder : $react_app_client_host;

            $react_app_callback = "{$react_app_client_host}";

            if ( $react_app_sub_folder ) {

                $react_app_callback .= "/{$react_app_sub_folder}";

            }

            $this->clientCreator->upsert( $react_app_client_id, $react_app_client_secret, $react_app_callback, 'REACT_APP' );

            $this->info( "Client {$react_app_client_id} created and/or updated" );

            $this->changeEnv( 'PRIVATEAREA_CLIENT_ID', $react_app_client_id );
            $this->changeEnv( 'PRIVATEAREA_CLIENT_SECRET', $react_app_client_secret );
            $this->changeEnv( 'PRIVATEAREA_CLIENT_CALLBACK', $react_app_callback );
            $this->changeEnv( 'PRIVATEAREA_URL', $privatearea_url );

            $this->info( "Server env vars updated!!" );
        }

        return Command::SUCCESS;
    }

    public function changeEnv( $key, $value ) {
        $path = base_path( '.env' );

        if ( is_bool( env( $key ) ) ) {
            $old = env( $key ) ? 'true' : 'false';
        } elseif ( env( $key ) === null ) {
            $old = 'null';
        } else {
            $old = env( $key );
        }

        if ( file_exists( $path ) ) {
            file_put_contents( $path, str_replace(
                "$key=" . $old, "$key=" . $value, file_get_contents( $path )
            ) );
        }
    }
}
