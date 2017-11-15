<?php

namespace Tests\Unit\Eloquent\Models;

use Tests\TestCase;
use Matthewbdaly\LaravelAuthority\Eloquent\Models\Permission;

class PermissionTest extends TestCase
{
    public function testCreatePermission()
    {
        $permission = factory(Permission::class)->create([
            'name' => 'admin',
            'label' => 'Admin'
        ]);
        $saved = Permission::first();
        $this->assertEquals('admin', $saved->name);
        $this->assertEquals('Admin', $saved->label);
    }
}
