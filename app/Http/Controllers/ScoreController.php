<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Score;
use App\Models\ScoreQuestion;
use Illuminate\Http\Request;

class ScoreController extends Controller
{
    public function storeScore () {
        $user = auth()->user();
        $score = Score::create([
            'user_id' => $user->user_id,
        ]);

        return response()->json([
            'score' => $score,
        ]);
    }

    public function getQuestionScore ($id) {
        $questions = Score::find($id)->questions;

        foreach ($questions as $question) {
            $answer = $question->answer;
            if ($answer == null || !$answer->is_correct) {
                return response()->json([
                    'status' => 405,
                    'message' => 'Ya tienes una respuesta incorrecta',
                ]);
            }
        }

        $question = Question::inRandomOrder()->where('is_validated', true)->where('id', '!=', $questions->pluck('id'))->first();

        if (!$question) {
            return response()->json([
                'status' => 404,
                'message' => 'No more questions',
            ]);
        }

        $scoreQuestion = ScoreQuestion::create([
            'score_id' => $id,
            'question_id' => $question->id,
        ]);

        return response()->json([
            'status' => 200,
            'scoreQuestion_id' => $scoreQuestion->id,
            'question' => $question,
        ]);
    }

    public function storeQuestion ($id) {
        $rules = [
            'answer_id' => 'required|integer|exists:answers,id',
        ];

        $request = request()->validate($rules);

        $scoreQuestion = ScoreQuestion::find($id);

        $scoreQuestion->answer_id = $request['answer_id'];
        $scoreQuestion->save();

        return response()->json([
            'status' => 200,
            'message' => 'Answer stored',
        ]);
    }

}
