<?php

namespace App\Http\Controllers;

use App\Models\Label;
use Illuminate\Http\Request;

class LabelController extends Controller
{
    public function index()
    {
        $labels = Label::all();

        return response()->json($labels, 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:labels',
            // 'description' => 'required',
            'color' => 'string',
        ]);

        $label = Label::create(
            [
                'name' => $request->name,
                'description' => "a description",
            ]
        );

        return response()->json($label, 201);
    }

    public function show($id)
    {
        if (!is_numeric($id)) {
            return response()->json([
                'message' => 'Invalid id'
            ], 400);
        }

        $label = Label::find($id);

        if ($label) {
            return response()->json([
                'message' => 'Label found',
                'label' => $label,
                'questions' => $label->questions()->get()
            ], 200);
        } else {
            return response()->json([
                'message' => 'Label not found'
            ], 404);
        }
    }

    public function update(Request $request, $id)
    {
        if (!is_numeric($id)) {
            return response()->json([
                'message' => 'Invalid id'
            ], 400);
        }

        $label = Label::find($id);

        if ($label) {
            $request->validate([
                'name' => 'required|unique:labels,name,' . $id,
                'description' => 'required',
                'color' => 'required',
            ]);

            $label->update($request->all());

            return response()->json([
                'message' => 'Label updated successfully',
                'label' => $label
            ], 200);
        } else {
            return response()->json([
                'message' => 'Label not found'
            ], 404);
        }
    }

    public function destroy($id)
    {
        if (!is_numeric($id)) {
            return response()->json([
                'message' => 'Invalid id'
            ], 400);
        }

        $label = Label::find($id);

        if ($label) {
            $label->delete();

            return response()->json([
                'message' => 'Label deleted successfully'
            ], 200);
        } else {
            return response()->json([
                'message' => 'Label not found'
            ], 404);
        }
    }

    public function search (Request $request) {
        $request->validate([
            'name' => 'required'
        ]);

        $labels = Label::where('name', 'like', '%' . $request->name . '%')->get();

        return response()->json([
            'message' => 'Labels found',
            'labels' => $labels
        ], 200);
    }
}
