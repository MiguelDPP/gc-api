<?php

namespace App\Http\Controllers;

use App\Models\Error;
use Illuminate\Http\Request;

class ErrorController extends Controller
{
    public function store (Request $request) {
        $rules = [
            'title' => 'required|string',
            'description' => 'required|string',
            'url' => 'string'
        ];

        $request->validate($rules);

        $relation = auth()->user();

        $error = Error::create([
            'title' => $request->title,
            'description' => $request->description,
            'url' => ($request->url)?$request->url:null,
            'user_id' => $relation->user_id,
        ]);

        return response()->json([
            'message' => 'Error regitered',
            'error' => $error
        ], 201);
    }

    public function indexUser () {
        $relation = auth()->user();

        $errors = $relation->user()->first()->errors()->get();

        return response()->json([
            'message' => 'Errors list',
            'errors' => $errors
        ], 200);
    }

    public function index () {
        $errors = Error::all();

        return response()->json([
            'message' => 'Errors list',
            'errors' => $errors
        ], 200);
    }

    public function show ($id) {
        if (!is_numeric($id)) {
            return response()->json([
                'message' => 'Invalid error id'
            ], 400);
        }
        $error = Error::find($id);
        if ($error->user_id != auth()->user()->user_id && auth()->user()->role_id != 1) {
            return response()->json([
                'message' => 'You are not authorized to see this error'
            ], 401);
        }

        return response()->json([
            'message' => 'Error information',
            'error' => $error,
            'comments' => $error->comments()->get()
        ], 200);
    }

    public function update (Request $request, $id) {

        if (!is_numeric($id)) {
            return response()->json([
                'message' => 'Invalid error id'
            ], 400);
        }

        $rules = [
            'title' => 'string',
            'description' => 'string',
            'url' => 'string',
            'is_solved' => 'boolean'
        ];

        $request->validate($rules);

        $error = Error::find($id);
        if (is_null($error) || $error->user_id != auth()->user()->user_id) {
            return response()->json([
                'message' => 'Error not found'
            ], 404);
        }

        $error->update($request->except('id'));

        return response()->json([
            'message' => 'Error updated',
            'error' => $error
        ], 200);
    }

    public function storeComment (Request $request) {
        $rules = [
            'error_id' => 'required|integer',
            'message' => 'required|string'
        ];

        $request->validate($rules);

        $error = Error::find($request->error_id);

        if (is_null($error)) {
            return response()->json([
                'message' => 'Error not found'
            ], 404);
        }elseif ($error->user_id != auth()->user()->user_id && auth()->user()->role_id != 1) {
            return response()->json([
                'message' => 'You can not comment this error'
            ], 403);
        }

        $comment = $error->comments()->create([
            'message' => $request->message,
            'error_id' => $request->error_id,
            'user_id' => auth()->user()->user_id
        ]);

        return response()->json([
            'message' => 'Comment created',
            'comment' => $comment
        ], 201);
    }

    public function indexComments ($error_id) {
        // validamos que sea un numero
        if (!is_numeric($error_id)) {
            return response()->json([
                'message' => 'Error id must be a number'
            ], 400);
        }

        $error = Error::find($error_id);
        if ($error->user_id != auth()->user()->user_id && auth()->user()->role_id != 1) {
            return response()->json([
                'message' => 'You can not comment this error'
            ], 403);
        }

        $comment = $error->comments()->get();

        return response()->json([
            'message' => 'Comments list',
            'comments' => $comment
        ], 200);
    }
}
