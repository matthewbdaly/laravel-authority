<?php

namespace Matthewbdaly\LaravelAuthority\Eloquent\Models;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    public function users()
    {
        return $this->belongsToMany('Tests\Fixtures\User');
    }
}
