<?php

namespace App\Console\Commands;


use App\Services\Contracts\PassportClientCreatorContract;
use App\Services\PassportClientCreator;
use Illuminate\Console\Command;
use Illuminate\Support\Str;


class Qrmenu_create_client extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'qrmenu:create_client';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create client and store it in database';

    protected $passportClientCreator;

    public function __construct(PassportClientCreatorContract $clientCreator)
    {
            parent::__construct();
            $this->passportClientCreator = $clientCreator;
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
      $this->passportClientCreator->create(env('REACT_APP_CLIENT_ID'), env('REACT_APP_CLIENT_SECRET'), env('REACT_APP_CLIENT_CALLBACK'), Str::random(8));

      return Command::SUCCESS;

    }

}
