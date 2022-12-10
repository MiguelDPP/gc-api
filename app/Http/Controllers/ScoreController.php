<?php

namespace App\Http\Controllers;

use App\Models\FunFact;
use App\Models\Question;
use App\Models\Score;
use App\Models\User;
use App\Models\ScoreQuestion;
use App\Models\User_Role_Relationship;
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
                // $pointsT = $question->question->points;
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

    public function getPlayUser($id){
        $plays = Score::where('user_id',$id)->orderBy('created_at','desc')->get();
        $responseJson = [];

        foreach ($plays as $play) {

            $questions = ScoreQuestion::where('score_id', $play->id)->get();
            $points = 0;

            foreach ($questions as $question) {
                $question_answer = Question::where('id', $question->question_id)->first();
                if($question->answer == 1){
                    $points += $question_answer->points;
                }
            }
            $response = [
                'id' => $play->id,
                'fecha'=> $play->created_at,
                'points' => $points
            ];
            array_push($responseJson, $response);
        }

        return response()->json([
            'status' => 200,
            'plays' => $responseJson,
        ]);
    }

    public function getPlayUserPersonality($id){
        $plays = Score::where('user_id',$id)->orderBy('created_at','desc')->get();
        $responseJson = [];

        foreach ($plays as $play) {

            $questions = ScoreQuestion::where('score_id', $play->id)->get();
            $points = 0;

            foreach ($questions as $question) {
                $question_answer = Question::where('id', $question->question_id)->first();
                if($question->answer == 1){
                    $points += $question_answer->points;
                }
            }
            $response = [
                'id' => $play->id,
                'fecha'=> $play->created_at,
                'points' => $points
            ];
            array_push($responseJson, $response);
        }

        return $responseJson;
    }

    public function getScoreGlobal($id){
        $listUserStudent = User_Role_Relationship::all();
        $listJson = [];
        foreach ($listUserStudent as $item) {
            $itemUser = User::where('id', $item->user_id)->first();
            $pointUser = $this->getPlayUserPersonality($item->user_id);
            $point = 0;
            foreach ($pointUser as $puser) {
                $point += $puser['points'];
            }
            $array = [
                'id' => $itemUser->id,
                'username' => $itemUser->username,
                'points' => $point
            ];
            array_push($listJson, $array);
        }
        $listJson = $this->burbuja($listJson);
        return response()->json([
            'status' => 200,
            'score' => $listJson,
        ]); 
        
    }

    function burbuja($arreglo)
    {
        $longitud = count($arreglo);
        for ($i = 0; $i < $longitud; $i++) {
            for ($j = 0; $j < $longitud - 1; $j++) {
                if ($arreglo[$j]['points'] < $arreglo[$j + 1]['points']) {
                    $temporal = $arreglo[$j];
                    $arreglo[$j] = $arreglo[$j + 1];
                    $arreglo[$j + 1] = $temporal;
                }
            }
        }
        return $arreglo;
    }

    public function getFunFacts () {
        $funfacts = FunFact::all();

        return response()->json([
            'status' => 200,
            'funfacts' => $funfacts,
        ]);
    }

    public function getDemoQuestion () {
        $questions = Question::inRandomOrder()->where('is_validated', true)->get();

        foreach ($questions as $q) {
            if ($q->funFacts->count() > 0 && $q->type_question_id != 4) {
                return response()->json([
                    'status' => 200,
                    'question' => $q->load('answers', 'municipality', 'funFacts'),
                ]);
            }
        }

        return response()->json([
            'status' => 404,
            'message' => 'No more questions',
        ]);
    }

    public function getPoints () {
        $user = auth()->user();
        $scores = Score::where('user_id', $user->user_id)->get();

        $points = 0;

        foreach ($scores as $score) {
            $questions = $score->questions;

            foreach ($questions as $question) {
                $answer = $question->answer;
                if ($answer != null && $answer == 1) {
                    $points += $question->question->points;
                }
            }
        }

        return response()->json([
            'status' => 200,
            'points' => $points,
        ]);
    }

}
