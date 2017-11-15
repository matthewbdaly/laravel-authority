<?php

namespace Tests\Unit\Providers;

use Mockery as m;
use Tests\TestCase;

class ServiceProviderTest extends TestCase
{
    /** @test */
    public function it_sets_up_the_permissions_repository()
    {
        $repo = $this->app->make('Matthewbdaly\LaravelAuthority\Contracts\Repositories\Permission');
        $this->assertInstanceOf(\Matthewbdaly\LaravelAuthority\Eloquent\Repositories\Decorators\Permission::class, $repo);
    }

    /** @test */
    public function it_sets_up_the_roles_repository()
    {
        $repo = $this->app->make('Matthewbdaly\LaravelAuthority\Contracts\Repositories\Role');
        $this->assertInstanceOf(\Matthewbdaly\LaravelAuthority\Eloquent\Repositories\Decorators\Role::class, $repo);
    }
}
