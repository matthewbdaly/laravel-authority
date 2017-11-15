<?php

namespace Matthewbdaly\LaravelAuthority\Eloquent\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function permissions()
    {
        return $this->belongsToMany('Matthewbdaly\LaravelAuthority\Eloquent\Models\Permission');
    }
}
