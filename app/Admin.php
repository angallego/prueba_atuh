<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    protected $table = 'admins';

    protected $fillable = [
        'first_name', 'last_name', 'email', 'username', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function authenticated()
    {
        return redirect('admins/area');
    }

    public function secret()
    {
        return 'Hola ' . auth('admins')->user()->first_name;
    }

}
