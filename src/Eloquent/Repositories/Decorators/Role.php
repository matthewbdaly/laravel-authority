<?php

namespace Matthewbdaly\LaravelAuthority\Eloquent\Repositories\Decorators;

use Matthewbdaly\LaravelRepositories\Repositories\Decorators\BaseDecorator;
use Matthewbdaly\LaravelAuthority\Contracts\Repositories\Role as RoleContract;
use Illuminate\Contracts\Cache\Repository as Cache;

class Role extends BaseDecorator implements RoleContract
{
    public function __construct(RoleContract $repository, Cache $cache)
    {
        $this->repository = $repository;
        $this->cache = $cache;
    }
}
