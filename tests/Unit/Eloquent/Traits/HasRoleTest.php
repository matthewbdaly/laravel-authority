<?php

namespace Tests\Unit\Eloquent\Traits;

use Tests\TestCase;
use Tests\Fixtures\User;
use Matthewbdaly\LaravelAuthority\Eloquent\Models\Role;
use Mockery as m;

class HasRoleTest extends TestCase
{
    public function testHasRole()
    {
        $user = factory(User::class)->create();
        $role = factory(Role::class)->create();
        $user->roles->add($role);
        $this->assertEquals($user->roles->first()->name, $role->name);
    }

    public function testDoesNotHaveRole()
    {
        $user = factory(User::class)->create();
        $role = factory(Role::class)->create();
        $this->assertCount(0, $user->roles);
    }
} 
