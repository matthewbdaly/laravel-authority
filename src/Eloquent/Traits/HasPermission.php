<?php

namespace Matthewbdaly\LaravelAuthority\Eloquent\Traits;

trait HasPermission
{
    public function permissions()
    {
        return $this->belongsToMany('Matthewbdaly\LaravelAuthority\Eloquent\Models\Permission', 'user_permissions');
    }
}
