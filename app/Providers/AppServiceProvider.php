<?php

namespace App\Providers;

use App\Interfaces\CustomerRepositoryInterface;
use App\Interfaces\PagesRepositoryInterface;
use App\Repositories\CustomerRepository;
use App\Repositories\PageRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
        $this->app->bind(CustomerRepositoryInterface::class , CustomerRepository::class);
        $this->app->bind(PagesRepositoryInterface::class , PageRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
