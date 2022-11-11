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

    public function update (Request $request) {
        $rules = [
            'id'=> 'required|uuid',
            'firstName' => 'string',
            'secondName' => 'string',
            'surname' => 'string',
            'secondSurname' => 'string',
            'email' => 'email',
            'municipality_id' => 'integer',
            'photo' => 'image',
            'isActive' => 'boolean',
            'password' => 'string',
            'role' => 'integer|in:1,2'
        ];

        $request->validate($rules);

        $user = User::find($request->id);

        $email = User::where('email', $request->email)->where('id', '!=', $user->id)->first();

        if($request->has('email') && is_null($email)) {
            $user->update($request->except('id', 'username', 'code_verification', 'email_verified_at', 'role'));
        }else {
            return response()->json([
                'message' => 'Email already exists'
            ], 400);
            // $user->update($request->except('id', 'username', 'email', 'code_verification', 'email_verified_at', 'role'));
        }

        $password = '';
        if ($request->has('password')) {
            $password = bcrypt($request->password);
        }else {
            $password = $user->roles()->first()->pivot->password;
        }

        if ($request->has('role')) {
            $user->roles()->sync([$request->role => ['password' => $password]]);
        }

        return response()->json([
            'message' => 'User information updated',
            'user' => $user
        ], 200);
    }
}
