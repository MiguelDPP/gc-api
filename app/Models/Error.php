<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Error extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'url',
        'user_id',
        'is_solved'
    ];

    public function user () {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function comments () {
        return $this->hasMany(Comment::class, 'error_id', 'id');
    }
}
