<?php

namespace App\Providers;

use App\App\CodigoPostal\CodigoPostalRepositoryInterface;
use App\App\CodigoPostal\CodigoPostalValidator;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(CodigoPostalRepositoryInterface::class, CodigoPostalValidator::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
    }
}
