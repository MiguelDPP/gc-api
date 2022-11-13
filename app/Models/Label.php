<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Label extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'color',
    ];

    public function questions()
    {
        return $this->belongsToMany(Question::class, 'labels_questions_relationship', 'label_id', 'question_id');
    }
}
