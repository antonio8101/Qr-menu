<?php

namespace App\Console\Commands;

use App\Traits\WorkWithEnvVars;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Str;
use Symfony\Component\Console\Command\Command as CommandAlias;

class SwitchPrivateAreaEnvToDev extends Command
{

    use WorkWithEnvVars;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'qrmenu:switch_privatearea_env_dev';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command modify the .env configuration of the project to enable development of the privatearea.';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle(): int
    {
        $this->info('File .env for React app exists');

        $loadResult = $this->loadPrivateAreaEnvVars();

        if ( ! $loadResult ) {

            $this->warn('skipped');

            return CommandAlias::SUCCESS;
        }

        $this->info("Client $this->react_app_client_id created and/or updated");

        // Always on localhost for development
        $host = "http://localhost:$this->react_app_client_port";

        $client_id = $this->react_app_client_id ?? Str::uuid();

        $client_secret =  strlen($this->react_app_client_secret) > 0 ? $this->react_app_client_secret : md5(Str::random(40));

        $this->setPrivateAreaEnvVars($host, $client_id, $client_secret, '');

        Artisan::call('qrmenu:set_client', ['env' => 'dev']);

        return CommandAlias::SUCCESS;
    }
}
