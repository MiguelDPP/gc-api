<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;

class User_Role_Relationship extends Authenticatable
{
    use HasFactory, HasApiTokens;

    protected $table = 'users_roles_relationship';

    protected $fillable = [
        'user_id',
        'role_id',
        'password',
        'remember_token',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function user () {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function role () {
        return $this->hasOne(Role::class, 'id', 'role_id');
    }
}
