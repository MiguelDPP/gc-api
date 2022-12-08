<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municipality extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'department_id',
    ];

    public function department () {
        // Relación de uno a muchos
        return $this->hasOne(Department::class, 'id', 'department_id');
    }

    public function users () {
        return $this->hasMany(User::class);
    }
}
