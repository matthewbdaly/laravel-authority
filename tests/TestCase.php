<?php

namespace Tests;

use Orchestra\Testbench\TestCase as BaseTestCase;

class TestCase extends BaseTestCase
{
	protected function getPackageProviders($app)
	{
		return ['Matthewbdaly\LaravelAuthority\Providers\AuthorityServiceProvider'];
    }

    public function setUp()
    {
        parent::setUp();
        $this->app['config']->set('authority.user_model', 'Tests\Fixtures\User');
        $this->artisan('migrate', ['--database' => 'sqlite']);
        $this->loadLaravelMigrations(['--database' => 'sqlite']);
        $this->withFactories(__DIR__.'/factories');
    }
}
