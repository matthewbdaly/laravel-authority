<?php

namespace Matthewbdaly\LaravelAuthority\Eloquent\Repositories;

use Matthewbdaly\LaravelRepositories\Repositories\Base;
use Matthewbdaly\LaravelAuthority\Contracts\Repositories\Role as RoleContract;
use Matthewbdaly\LaravelAuthority\Eloquent\Models\Role as Model;

class Role extends Base implements RoleContract
{
    public function __construct(Model $model)
    {
        $this->model = $model;
    }
}
