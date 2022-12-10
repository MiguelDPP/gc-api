<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'question',
        'created_by_id',
        'type_question_id',
        'time',
        'is_validated',
        'municipality_id',
        'points',
    ];

    public function answers()
    {
        return $this->hasMany(Answer::class, 'question_id', 'id');
    }

    public function funFacts()
    {
        return $this->hasMany(FunFact::class, 'question_id', 'id');
    }

    public function labels()
    {
        return $this->belongsToMany(Label::class, 'labels_questions_relationship', 'question_id', 'label_id');
    }

    public function municipality()
    {
        return $this->hasOne(Municipality::class, 'id', 'municipality_id');
    }

    public function typeQuestion()
    {
        return $this->hasOne(TypeQuestion::class, 'id', 'type_question_id');
    }

    public function createdBy()
    {
        return $this->hasOne(User::class, 'id', 'created_by_id');
    }

    public function scoreQuestions()
    {
        return $this->hasMany(ScoreQuestion::class, 'question_id', 'id');
    }
}
