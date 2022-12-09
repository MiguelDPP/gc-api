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
            if ($answer == null || !$answer) {
                return response()->json([
                    'status' => 405,
                    'message' => 'Ya tienes una respuesta incorrecta',
                ]);
            }
        }

        if ($questions->count() > 0) {
            $question = Question::inRandomOrder()->where('is_validated', true)->whereNotIn('id', $questions->pluck('question_id'))->first();
        }else {
            $question = Question::inRandomOrder()->where('is_validated', true)->first();
        }

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
            'question' => $question->load('answers', 'municipality'),
        ]);
    }

    public function storeQuestion (Request $request, $id) {
        $rules = [
            'answer' => 'required|boolean',
        ];

        $request->validate($rules);

        $scoreQuestion = ScoreQuestion::where('id', $id)->first();

        $scoreQuestion->answer = $request->answer;
        $scoreQuestion->save();

        return response()->json([
            'status' => 200,
            'message' => 'Answer stored',
            'scoreQuestion' => $scoreQuestion
        ]);
    }

    public function getScore ($id) {
        $score = Score::find($id);

        $questions = $score->questions;

        $points = 0;

        foreach ($questions as $question) {
            $answer = $question->answer;
            if ($answer != null && $answer) {
                // $pointsT =
                $points += $question->question->points;
            }
        }

        return response()->json([
            'status' => 200,
            'date' => $score->created_at,
            'points' => $points,
        ]);
    }

    public function getScores () {
        $scores = Score::all();

        foreach ($scores as $score) {
            $questions = $score->questions;

            $points = 0;

            foreach ($questions as $question) {
                $answer = $question->answer;
                if ($answer != null && $answer) {
                    $points += $question->points;
                }
            }

            $score->points = $points;
        }

        return response()->json([
            'status' => 200,
            'scores' => $scores,
        ]);
    }

}
