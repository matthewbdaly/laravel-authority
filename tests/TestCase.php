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
        $this->artisan('migrate', ['--database' => 'sqlite']);
        $this->loadLaravelMigrations(['--database' => 'sqlite']);
    }
}