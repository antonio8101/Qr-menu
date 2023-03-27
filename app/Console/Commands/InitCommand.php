<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use PDO;
use PDOException;
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

        $isCreated = $this->createDatabase( env('db_host'), env('db_username'), env('db_password'), env('db_database') );

        Artisan::call( 'migrate' );

        if (!$isCreated)
            return CommandAlias::FAILURE;

        $this->info("Init command executed successfully");

        return CommandAlias::SUCCESS;
    }

    private function createDatabase(string $host, string $user, string $password, string $dbName):bool{

        try {

            $pdo = new PDO("mysql:host={$host}", $user, $password);

            $pdo->exec("DROP DATABASE IF EXISTS {$dbName}" );
            $pdo->exec("CREATE DATABASE {$dbName}" );

            return true;

        } catch (PDOException $exception){

            $this->error($exception->getMessage());

            return false;

        }

    }
}
