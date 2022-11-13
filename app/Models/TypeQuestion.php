<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeQuestion extends Model
{
    use HasFactory;

    protected $table = 'type_questions';

    protected $fillable = [
        'name',
    ];

    public function questions()
    {
        return $this->hasMany(Question::class, 'type_question_id', 'id');
    }
}
