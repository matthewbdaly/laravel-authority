<?php

namespace Matthewbdaly\LaravelAuthority\Eloquent\Repositories;

use Matthewbdaly\LaravelRepositories\Repositories\Base;
use Matthewbdaly\LaravelAuthority\Contracts\Repositories\Permission as PermissionContract;
use Matthewbdaly\LaravelAuthority\Eloquent\Models\Permission as Model;

class Permission extends Base implements PermissionContract
{
    public function __construct(Model $model)
    {
        $this->model = $model;
    }
}
