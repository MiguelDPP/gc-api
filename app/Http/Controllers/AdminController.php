<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\User_Role_Relationship;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminController extends Controller
{
    public function users (Request $request) {
        $users = User::all();

        //Agregar roles a cada usuario
        foreach ($users as $user) {
            $user->roles = $user->roles()->get();
        }

        return response()->json([
            'message' => 'Users information',
            'users' => $users,
        ], 200);
    }

    public function showUser ($id) {
        if (!Str::isUuid($id)) {
            return response()->json([
                'message' => 'Invalid user id'
            ], 400);
        }

        $user = User::find($id);

        if (!$user) {
            return response()->json([
                'message' => 'User not found'
            ], 404);
        }

        return response()->json([
            'message' => 'User information',
            'user' => $user,
            'roles' => $user->roles()->get()
        ], 200);
    }

    public function update (Request $request, $id) {

        if (!Str::isUuid($id)) {
            return response()->json([
                'message' => 'Invalid user id'
            ], 400);
        }

        $rules = [
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

        $user = User::find($id);

        $email = User::where('email', $request->email)->where('id', '!=', $user->id)->first();

        if($request->has('email') && is_null($email)) {
            $user->update($request->except('id', 'username', 'code_verification', 'email_verified_at', 'role'));
        }else {
            return response()->json([
                'message' => 'Email already exists'
            ], 400);
            // $user->update($request->except('id', 'username', 'email', 'code_verification', 'email_verified_at', 'role'));
        }

        if ($request->has('isActive')) {
            if ($request->isActive == 0) {
                $relation = User_Role_Relationship::where('user_id', $user->id)->first();
                $relation->tokens()->delete();
            }
            $user->isActive = $request->isActive;

            // foreach ($relations as $relation) {
            //     $relation->tokens()->delete();
            // }
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
