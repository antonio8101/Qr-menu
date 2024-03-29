<?php

namespace App\Console\Commands;

use App\Traits\WorkWithEnvVars;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Str;
use Symfony\Component\Console\Command\Command as CommandAlias;

class SwitchPrivateAreaEnvToProd extends Command {

    use WorkWithEnvVars;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'qrmenu:switch_privatearea_env_prod';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command modify the .env configuration of the project to enable prod setting for the privatearea.';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle(): int {

        $this->info( 'File .env for React app exists' );

        $loadResult = $this->loadPrivateAreaEnvVars();

        if ( ! $loadResult ) {

            $this->warn('skipped');

            return CommandAlias::SUCCESS;
        }

        $this->info( "Client $this->react_app_client_id created and/or updated" );

        $subFolder = 'app';

        $host = env( 'APP_URL' );
        $port = env('SERVER_PORT');

        if ($port != 80 &&  $port !== 433){
            $host .= ":$port";
        }

        $client_id = strlen($this->react_app_client_id) > 0 ? $this->react_app_client_id : Str::uuid();

        $client_secret = strlen($this->react_app_client_secret) > 0 ? $this->react_app_client_secret :
            md5(Str::random(40));

        $this->setPrivateAreaEnvVars( $host, $client_id, $client_secret, $subFolder );

        Artisan::call( 'qrmenu:set_client', ['env' => 'prod'] );

        return CommandAlias::SUCCESS;
    }
}
