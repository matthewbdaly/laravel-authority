<?php

namespace Tests\Unit\Eloquent\Traits;

use Tests\TestCase;
use Tests\Fixtures\User;
use Matthewbdaly\LaravelAuthority\Eloquent\Models\Permission;
use Mockery as m;

class HasPermissionTest extends TestCase
{
    public function testHasPermission()
    {
        $user = factory(User::class)->create();
        $permission = factory(Permission::class)->create();
        $user->permissions->add($permission);
        $this->assertEquals($user->permissions->first()->name, $permission->name);
    }

    public function testDoesNotHavePermission()
    {
        $user = factory(User::class)->create();
        $permission = factory(Permission::class)->create();
        $this->assertCount(0, $user->permissions);
    }
} 
