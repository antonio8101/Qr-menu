<?php

namespace App\Console\Commands;

use App\Services\Contracts\PassportClientCreatorContract;
use App\Traits\WorkWithEnvVars;
use Illuminate\Console\Command;
use Symfony\Component\Console\Command\Command as CommandAlias;

class SetClientFromConfig extends Command {

    use WorkWithEnvVars;

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
    protected $signature = 'qrmenu:set_client {env}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Write an oauth client into the database, according to the .env configuration of the projects.';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle(): int {

        if ( file_exists( 'resources/app/.env' ) ) {

            $this->loadPrivateAreaEnvVars();

            $this->info( 'File .env for React app exists' );

            $privatearea_url = $this->setPrivateAreaUrl();

            $react_app_callback = $this->react_app_client_host;

            if ( $this->react_app_sub_folder ) {

                $react_app_callback .= "/$this->react_app_sub_folder";

            }

            $this->clientCreator->upsert( $this->react_app_client_id, $this->react_app_client_secret, $react_app_callback, 'REACT_APP' );

            $this->info( "Client $this->react_app_client_id created and/or updated" );

            $this->changeLaravelEnv( 'PRIVATEAREA_CLIENT_ID', $this->react_app_client_id );
            $this->changeLaravelEnv( 'PRIVATEAREA_CLIENT_SECRET', $this->react_app_client_secret );
            $this->changeLaravelEnv( 'PRIVATEAREA_CLIENT_CALLBACK', $react_app_callback );
            $this->changeLaravelEnv( 'PRIVATEAREA_URL', $privatearea_url );

            $this->info( "Server env vars updated!!" );
        }

        return CommandAlias::SUCCESS;
    }

    private function setPrivateAreaUrl(): string | null {

        $defaultEnv = 'dev';
        $envArg = $this->argument('env');
        $env = strlen($envArg) > 0 ? $envArg : $defaultEnv;

        return $env == $defaultEnv ? $this->react_app_client_host : $this->react_app_sub_folder;
    }
}
