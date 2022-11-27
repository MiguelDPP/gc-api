<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class OtherController extends Controller
{
    public function getDepartments () {
        $departments = Department::all();
        return response()->json([
            'message' => 'list of departments',
            'department' => $departments
        ], 200);
    }
    public function getMunicipalities ($id) {
        if (!is_numeric($id)) {
            return response()->json([
                'message' => 'Invalid department id'
            ], 400);
        }
        $municipalities = Department::find($id)->municipalities;
        return response()->json([
            'message' => 'list of municipalities',
            'municipality' => $municipalities
        ], 200);
    }
}
