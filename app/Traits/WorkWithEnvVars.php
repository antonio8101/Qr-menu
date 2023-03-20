<?php

namespace App\Traits;

use Dotenv\Dotenv;

trait WorkWithEnvVars {

    private string|null $react_app_sub_folder;
    private string|null $react_app_client_id;
    private string|null $react_app_client_secret;
    private string|null $react_app_client_host;
    private string|null $laravel_app_host;
    private string|null $react_app_callback;
    private int $react_app_client_port;

    /**
     * Load all env variables defined into the .env file of the React application
     * It is not necessary to the same with the laravel env vars, because they are already loaded
     * from the framework.
     *
     * @return void
     */
    function loadPrivateAreaEnvVars(): void {

        $dotenv = Dotenv::createMutable( 'resources\app' );
        $dotenv->load();

        $this->react_app_client_port   = env('PORT', 3000);
        $this->react_app_client_host   = env( 'REACT_APP_HOST' );
        $this->react_app_sub_folder    = env( 'REACT_APP_SUBFOLDER_NAME' );
        $this->react_app_client_id     = env( 'REACT_APP_CLIENT_ID' );
        $this->react_app_client_secret = env( 'REACT_APP_CLIENT_SECRET' );

        $this->laravel_app_host        = env( 'REACT_APP_URL' );

        $this->react_app_callback      = $this->react_app_client_host;
    }

    private function setPrivateAreaEnvVars($host, $client_id, $client_secret, $subFolder ): void {

        $this->changeReactPrivateAreaEnv( 'REACT_APP_HOST', $host );
        $this->changeReactPrivateAreaEnv( 'REACT_APP_CLIENT_ID', $client_id );
        $this->changeReactPrivateAreaEnv( 'REACT_APP_CLIENT_SECRET', $client_secret );
        $this->changeReactPrivateAreaEnv( 'REACT_APP_SUBFOLDER_NAME', $subFolder );

    }

    private function changeLaravelEnv($key, $value): void {

        $path = base_path( '.env' );

        $this->changeEnv( $key, $value, $path );

    }

    private function changeReactPrivateAreaEnv($key, $value): void {

        $path = base_path( 'resources\app\.env' );

        $this->changeEnv( $key, $value, $path );

    }

    /**
     * Allows to change the value of an env variable with the new value provided
     *
     * @param $key
     * @param $value
     * @param $path
     *
     * @return void
     */
    private function changeEnv( $key, $value, $path ): void {

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
