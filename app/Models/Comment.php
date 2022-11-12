<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'error_id',
        'user_id',
        'message',
    ];

    public function error () {
        return $this->hasOne(Error::class, 'id', 'error_id');
    }

    public function user () {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
