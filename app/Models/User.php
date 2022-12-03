<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

// use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Traits\Uuids;

class User extends Model
{
    use HasFactory, Notifiable, Uuids;
    // Aañadimos el trait HasUuids

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'name',
        'firstName',
        'secondName',
        'surname',
        'secondSurname',
        'username',
        'email',
        'municipality_id',
        'isActive',
        'photo',
    ];

    public function municipality () {
        return $this->hasOne(Municipality::class, 'id', 'municipality_id');
    }

    public function roles () {
        return $this->belongsToMany(Role::class, 'users_roles_relationship', 'user_id', 'role_id')->withPivot('password', 'remember_token');
    }

    public function errors () {
        return $this->hasMany(Error::class, 'user_id', 'id');
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    // protected $hidden = [
    //     'password',
    //     'remember_token',
    // ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
