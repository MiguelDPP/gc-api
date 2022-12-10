<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index()
    {
        if (auth()->user()->role_id == 1) {
            $questions = Question::all();
        } else {
            $questions = Question::where('is_validated', true)->get();
        }

        $questions->load('answers', 'labels', 'createdBy');

        return response()->json([
            'message' => 'Questions information',
            'questions' => $questions,
        ], 200);
    }

    public function store(Request $request)
    {
        $user = auth()->user();
        $request->validate([
            'title' => 'nullable|string',
            'funFact_title' => 'nullable|string',
            'question' => 'required|string',
            'type_question_id' => 'required|exists:type_questions,id',
            'time' => 'integer',
            'municipality_id' => 'exists:municipalities,id',
            'points' => 'required|integer',
            'answers' => 'array',
            'funFact' => 'nullable|string',
            'labels' => 'array',
        ]);

        if (auth()->user()->role_id === 1) {
            $request->is_validated = true;
        }else {
            $request->is_validated = false;
        }

        $answers = $this->filterInsertAnswers($request);



        $question = Question::create([
            'title' => $request->title,
            'question' => $request->question,
            'created_by_id' => auth()->user()->user_id,
            'type_question_id' => $request->type_question_id,
            'time' => ($request->time)? $request->time : 30,
            'is_validated' => ($user->role_id == 1 ? true : false),
            'municipality_id' => $request->municipality_id,
            'points' => $request->points,
        ]);

        if ($request->has('funFact')) {
            $question->funFacts()->create([
                'title' => $request->funFact_title,
                'content' => $request->funFact,
            ]);
        }

        if ($request->has('labels')) {
            $request->validate([
                'labels.*.id' => 'required|exists:labels,id',
            ]);
            foreach ($request->labels as $label) {
                $question->labels()->attach($label['id']);
            }
        }

        if ($request->type_question_id != 4) {
            foreach ($answers as $answer) {
                $question->answers()->create([
                    'question_id' => $question->id,
                    'response' => $answer['response'],
                    'is_correct' => $answer['is_correct'],
                ]);
            }
        }

        $question->load('answers', 'labels');

        return response()->json([
            'message' => 'Pregunta creada correctamente',
            'question' => $question,
            // 'funFact' => $question->funFacts()->get(),
            // 'labels' => $question->labels()->get(),
        ], 201);
    }

    private function filterInsertAnswers($request)
    {
        switch ($request->type_question_id) {
            case 1:
                $request->validate([
                    'answers.*.response' => 'required|string',
                    'answers.*.is_correct' => 'required|boolean',
                ]);
                $answers = $request->answers;
                if (count($answers) < 2) {
                    return response()->json([
                        'message' => 'Debe ingresar al menos dos respuestas',
                    ], 400);
                }elseif (count($answers) > 4) {
                    return response()->json([
                        'message' => 'Debe ingresar máximo cuatro respuestas',
                    ], 400);
                }else {
                    $correct = $this->countCorrectAnswers($answers);
                    if ($correct == 0) {
                        return response()->json([
                            'message' => 'Debe ingresar al menos una respuesta correcta',
                        ], 400);
                    }
                }
                break;
            case 2:
                $request->validate([
                    'answers.*.response' => 'required|string',
                    'answers.*.is_correct' => 'required|boolean',
                ]);
                $answers = $request->answers;
                if (count($answers) < 2) {
                    return response()->json([
                        'message' => 'Debe ingresar al menos dos respuestas',
                    ], 400);
                }elseif (count($answers) > 4) {
                    return response()->json([
                        'message' => 'Debe ingresar máximo cuatro respuestas',
                    ], 400);
                }else {
                    $correct = $this->countCorrectAnswers($answers);
                    if ($correct == 0) {
                        return response()->json([
                            'message' => 'Debe ingresar al menos una respuesta correcta',
                        ], 400);
                    }elseif ($correct > 1) {
                        return response()->json([
                            'message' => 'Debe ingresar máximo una respuesta correcta',
                        ], 400);
                    }
                }
                break;
            case 3:
                $request->validate([
                    'answers.*.response' => 'required|string',
                    'answers.*.is_correct' => 'required|boolean',
                ]);
                $answers = $request->answers;
                if (count($answers) != 2) {
                    return response()->json([
                        'message' => 'Solo se permiten 2 respuestas',
                    ], 400);
                }else {
                    $correct = $this->countCorrectAnswers($answers);
                    if ($correct == 0) {
                        return response()->json([
                            'message' => 'Debe ingresar al menos una respuesta correcta',
                        ], 400);
                    }elseif ($correct > 1) {
                        return response()->json([
                            'message' => 'Debe ingresar máximo una respuesta correcta',
                        ], 400);
                    }
                }
                break;
        }

        return $request->answers;
    }

    private function countCorrectAnswers($answers)
    {
        $correct = 0;
        foreach ($answers as $answer) {
            if ($answer['is_correct']) {
                $correct++;
            }
        }
        return $correct;
    }

    public function show($id)
    {
        if (!is_numeric($id)) {
            return response()->json([
                'message' => 'El id debe ser un número',
            ], 400);
        }

        $question = Question::find($id);

        $user = auth()->user();

        if (!$question) {
            return response()->json([
                'message' => 'No se encontró la pregunta',
            ], 404);
        }elseif (auth()->user()->role_id !== 1 && $question->create_by_id !== $user->user_id) {
            return response()->json([
                'message' => 'No se encontró la pregunta',
            ], 404);
        }

        $question->load('answers', 'funFacts', 'labels', 'municipality', 'typeQuestion');

        return response()->json([
            'question' => $question
        ], 200);
    }

    public function edit($id)
    {

    }

    public function showQuestionWithOptions (Request $request) {
        $request->validate([
            'municipality_id' => 'exists:municipalities,id',
            'type_question_id' => 'exists:type_questions,id',
            'labels' => 'array',
            'create_by_id' => 'exists:users,user_id',
        ]);

        if (count($request->all()) == 0) {
            return response()->json([
                'message' => 'Debe ingresar al menos un parámetro',
            ], 400);
        }

        $questions = Question::where($request->except('labels'))->get();

        if ($request->has('labels')) {
            $request->validate([
                'labels.*.id' => 'required|exists:labels,id',
            ]);

            foreach ($questions as $question) {
                foreach ($request->labels as $label) {
                    if (!$question->labels()->where('label_id', $label['id'])->exists()) {
                        $questions = $questions->except($question->id);
                    }
                }
            }
        }

        if (count($questions) == 0) {
            return response()->json([
                'message' => 'No se encontraron preguntas',
            ], 404);
        }

        $questions->load('answers', 'funFacts', 'labels');

        return response()->json([
            'questions' => $questions,
        ], 200);
    }

    public function myQuestions () {
        $questions = Question::where('created_by_id', auth()->user()->user_id)->get();

        if (count($questions) == 0) {
            return response()->json([
                'message' => 'No se encontraron preguntas',
            ], 404);
        }

        $questions->load('answers', 'funFacts', 'labels', 'municipality', 'typeQuestion');

        return response()->json([
            'questions' => $questions,
        ], 200);
    }

    public function update(Request $request, $id)
    {
        if (!is_numeric($id)) {
            return response()->json([
                'message' => 'El id debe ser un número',
            ], 400);
        }

        $request->validate([
            'title' => 'nullable|string',
            'funFact_title' => 'nullable|string',
            'question' => 'string',
            'type_question_id' => 'exists:type_questions,id',
            'time' => 'integer',
            'is_validated' => 'boolean',
            'municipality_id' => 'exists:municipalities,id',
            'points' => 'integer',
            'funFact' => 'string',
            'labels' => 'array',
            'answers' => 'array',
        ]);

        // 'title' => 'nullable|string',
        //     'funFact_title' => 'nullable|string',
        //     'question' => 'required|string',
        //     'type_question_id' => 'required|exists:type_questions,id',
        //     'time' => 'integer',
        //     'municipality_id' => 'exists:municipalities,id',
        //     'points' => 'required|integer',
        //     'answers' => 'array',
        //     'funFact' => 'nullable|string',
        //     'labels' => 'array',

        $question = Question::find($id);

        $typeQuestion = $question->type_question_id;

        if (!$question) {
            return response()->json([
                'message' => 'No se encontró la pregunta',
            ], 404);
            // $question->is_validated == true ||
        }elseif (auth()->user()->role_id !== 1 && ($question->created_by_id !== auth()->user()->user_id)) {
            return response()->json([
                'message' => 'No se encontró la pregunta',
            ], 404);
        }elseif (auth()->user()->role_id === 1) {
            $question->update($request->except('answers', 'funFact', 'labels', 'type_question_id'));
        }else {
            $question->update($request->except('answers', 'funFact', 'labels', 'type_question_id', 'is_validated'));
        }
        // && $request->type_question_id != $question->type_question_id
        if ($request->has('type_question_id')) {
            if ($request->has('answers')) {
                $request->validate([
                    'answers.*.response' => 'required|string',
                    'answers.*.is_correct' => 'required|boolean',
                ]);
            }

            $question->answers()->delete();

            $question->update([
                'type_question_id' => $request->type_question_id,
            ]);

            if ($request->type_question_id != 4) {
                $answers = $this->filterInsertAnswers($request);

                foreach ($answers as $answer) {
                    $question->answers()->create($answer);
                }
                // if ($request->has('answers')) {
                //     $request->validate([
                //         'id' => 'exists:answers,id',
                //         'answers.*.response' => 'required|string',
                //         'answers.*.is_correct' => 'required|boolean',
                //     ]);
                // }
            }
        }
        // elseif ($request->has('answers') && (!$request->has('type_question_id') || $request->type_question_id == $question->type_question_id)) {
        //     $request->validate([
        //         'answers.*.id' => 'exists:answers,id',
        //         'answers.*.response' => 'required|string',
        //         'answers.*.is_correct' => 'required|boolean',
        //     ]);

        //     foreach ($request->answers as $answer) {
        //         $data = $question->answers()->find($answer['id']);
        //         if ($data) {
        //             $data->update($answer);
        //         }
        //     }
        // }

        if ($request->has('funFact')) {
            // $question->funFacts()->first()->update([
            //     'title' => $request->funFact_title,
            //     'content' => $request->funFact,
            // ]);
            // Puede que no haya añadido un funFact
            $question->funFacts()->delete();
            $question->funFacts()->create([
                'title' => $request->funFact_title,
                'content' => $request->funFact,
            ]);
        }

        if ($request->has('labels')) {
            $request->validate([
                'labels.*.id' => 'exists:labels,id',
            ]);

            $question->labels()->detach();

            foreach ($request->labels as $label) {
                $question->labels()->attach($label['id']);
            }
        }

        $question->load('answers', 'funFacts', 'labels');

        return response()->json([
            'question' => $question,
        ], 200);
    }

    public function destroy($id)
    {
        if (!is_numeric($id)) {
            return response()->json([
                'message' => 'El id debe ser un número',
            ], 400);
        }

        $question = Question::find($id);

        if (!$question) {
            return response()->json([
                'message' => 'No se encontró la pregunta',
            ], 404);
        }elseif (auth()->user()->role_id !== 1 && ($question->created_by_id !== auth()->user()->user_id)) {
            return response()->json([
                'message' => 'No se encontró la pregunta',
            ], 404);
        }

        $question->scoreQuestions()->delete();
        $question->answers()->delete();
        $question->funFacts()->delete();
        $question->labels()->detach();

        $question->delete();

        return response()->json([
            'message' => 'Pregunta eliminada',
        ], 200);
    }

    public function validateQuestion ($id) {
        if (!is_numeric($id)) {
            return response()->json([
                'message' => 'El id debe ser un número',
            ], 400);
        }

        $question = Question::find($id);

        if (!$question) {
            return response()->json([
                'message' => 'No se encontró la pregunta',
            ], 404);
        }elseif (auth()->user()->role_id !== 1) {
            return response()->json([
                'message' => 'No se encontró la pregunta',
            ], 404);
        }

        $question->update([
            'is_validated' => true,
        ]);

        return response()->json([
            'message' => 'Pregunta validada',
        ], 200);
    }
}
