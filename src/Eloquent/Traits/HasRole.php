<?php

namespace Matthewbdaly\LaravelAuthority\Eloquent\Traits;

trait HasRole
{
    public function roles()
    {
        return $this->belongsToMany('Matthewbdaly\LaravelAuthority\Eloquent\Models\Role', 'user_roles');
    }
}
