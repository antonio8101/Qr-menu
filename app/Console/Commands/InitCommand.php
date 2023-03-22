<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Command\Command as CommandAlias;

class InitCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'qrmenu:init';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Initialize the QrMenu project';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle(): int {

        Artisan::call( 'key:generate' );
        Artisan::call( 'passport:keys', ['--force' => true] );
        exec('chmod -R 777 storage bootstrap/cache');
        DB::statement("CREATE DATABASE IF NOT EXISTS " . env('DB_DATABASE') );
        Artisan::call('migrate', ['--no-interaction'=> true]);

        return CommandAlias::SUCCESS;
    }
}
