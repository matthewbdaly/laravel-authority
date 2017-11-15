<?php

namespace Matthewbdaly\LaravelAuthority\Providers;

use Illuminate\Support\ServiceProvider;

/**
 * Service provider for authority
 */
class AuthorityServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
