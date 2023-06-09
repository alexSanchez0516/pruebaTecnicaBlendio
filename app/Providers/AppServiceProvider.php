<?php

namespace App\Providers;


use Illuminate\Support\ServiceProvider;
use App\Services\AdditionService;
use App\Interfaces\AdditionServiceInterface;
use App\Services\SubtractionService;
use App\Interfaces\SubtractionServiceInterface;
use App\Services\MultiplicationService;
use App\Interfaces\MultiplicationServiceInterface;
use App\Services\DivisionService;
use App\Interfaces\DivisionServiceInterface;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(AdditionServiceInterface::class, AdditionService::class);
        $this->app->bind(SubtractionServiceInterface::class, SubtractionService::class);
        $this->app->bind(MultiplicationServiceInterface::class, MultiplicationService::class);
        $this->app->bind(DivisionServiceInterface::class, DivisionService::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
