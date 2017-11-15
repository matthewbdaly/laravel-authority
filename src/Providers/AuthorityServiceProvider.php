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
        $this->app->singleton('Matthewbdaly\LaravelAuthority\Contracts\Repositories\Permission', function () {
            $baseRepo = new \Matthewbdaly\LaravelAuthority\Eloquent\Repositories\Permission(new \Matthewbdaly\LaravelAuthority\Eloquent\Models\Permission);
            $cachingRepo = new \Matthewbdaly\LaravelAuthority\Eloquent\Repositories\Decorators\Permission($baseRepo, $this->app['cache.store']);
            return $cachingRepo;
        });
        $this->app->singleton('Matthewbdaly\LaravelAuthority\Contracts\Repositories\Role', function () {
            $baseRepo = new \Matthewbdaly\LaravelAuthority\Eloquent\Repositories\Role(new \Matthewbdaly\LaravelAuthority\Eloquent\Models\Role);
            $cachingRepo = new \Matthewbdaly\LaravelAuthority\Eloquent\Repositories\Decorators\Role($baseRepo, $this->app['cache.store']);
            return $cachingRepo;
        });
    }
}
