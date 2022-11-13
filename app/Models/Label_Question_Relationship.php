<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Label_Question_Relationship extends Model
{
    use HasFactory;

    protected $table = 'labels_questions_relationship';

    protected $fillable = [
        'label_id',
        'question_id',
    ];

    public function label()
    {
        return $this->belongsTo(Label::class, 'label_id', 'id');
    }

    public function question()
    {
        return $this->belongsTo(Question::class, 'question_id', 'id');
    }
}
