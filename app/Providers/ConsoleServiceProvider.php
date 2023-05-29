<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Console\Commands\AdditionCommand;
use App\Console\Commands\SubtractionCommand;
use App\Console\Commands\MultiplicationCommand;
use App\Console\Commands\DivisionCommand;
use App\Services\AdditionService;
use App\Services\SubtractionService;
use App\Services\MultiplicationService;
use App\Services\DivisionService;

class ConsoleServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

        $this->app->singleton('command.addition', function ($app) {
            return new AdditionCommand($app->make(AdditionService::class));
        });

        $this->app->singleton('command.subtraction', function ($app) {
            return new SubtractionCommand($app->make(SubtractionService::class));
        });

        $this->app->singleton('command.multiplication', function ($app) {
            return new MultiplicationCommand($app->make(MultiplicationService::class));
        });

        $this->app->singleton('command.division', function ($app) {
            return new DivisionCommand($app->make(DivisionService::class));
        });

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->commands([
            'command.addition',
            'command.subtraction',
            'command.multiplication',
            'command.division',
        ]);
    }
}
