<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FunFact extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'title',
        'question_id',
        'content',
    ];

    public function question () {
        return $this->hasOne(Question::class, 'id', 'question_id');
    }
}
