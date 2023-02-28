<?php

namespace App\Providers;

use App\Services\Contracts\PassportClientCreatorContract;
use App\Services\PassportClientCreator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register():void
    {

        $this->app->bind(PassportClientCreatorContract::class, PassportClientCreator::class);

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
