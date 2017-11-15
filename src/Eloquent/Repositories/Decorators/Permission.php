<?php

namespace Matthewbdaly\LaravelAuthority\Eloquent\Repositories\Decorators;

use Matthewbdaly\LaravelRepositories\Repositories\Decorators\BaseDecorator;
use Matthewbdaly\LaravelAuthority\Contracts\Repositories\Permission as PermissionContract;
use Illuminate\Contracts\Cache\Repository as Cache;

class Permission extends BaseDecorator implements PermissionContract
{
    public function __construct(PermissionContract $repository, Cache $cache)
    {
        $this->repository = $repository;
        $this->cache = $cache;
    }
}
