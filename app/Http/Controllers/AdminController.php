<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function users (Request $request) {
        $users = User::all();

        return response()->json([
            'message' => 'Users information',
            'users' => $users
        ], 200);
    }
}
