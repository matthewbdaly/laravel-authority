<?php

namespace Tests\Unit\Eloquent\Models;

use Tests\TestCase;
use Matthewbdaly\LaravelAuthority\Eloquent\Models\Role;

class RoleTest extends TestCase
{
    public function testCreateRole()
    {
        factory(Role::class)->create([
            'name' => 'admin',
            'label' => 'Admin'
        ]);
        $saved = Role::first();
        $this->assertEquals('admin', $saved->name);
        $this->assertEquals('Admin', $saved->label);
    }
}
