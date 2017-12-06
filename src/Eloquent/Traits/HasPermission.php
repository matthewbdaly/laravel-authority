<?php

namespace Matthewbdaly\LaravelAuthority\Eloquent\Traits;

trait HasPermission
{
    public function permissions()
    {
        return $this->hasMany('Matthewbdaly\LaravelAuthority\Eloquent\Models\Permission');
    }
}
