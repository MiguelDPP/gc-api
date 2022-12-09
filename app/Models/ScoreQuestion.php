<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScoreQuestion extends Model
{
    use HasFactory;

    protected $fillable = [
        'score_id',
        'question_id',
        'answer',
    ];

    public function score()
    {
        return $this->hasOne(Score::class, 'id', 'score_id');
    }

    public function question()
    {
        return $this->hasOne(Question::class, 'id', 'question_id');
    }

    // public function answer()
    // {
    //     return $this->hasOne(Answer::class, 'id', 'answer_id');
    // }
}
