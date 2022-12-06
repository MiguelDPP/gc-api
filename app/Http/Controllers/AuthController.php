<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Mail\PasswordReset;
use App\Models\User;
use App\Models\User_Role_Relationship;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function register (RegisterRequest $request) {
        $request->id = Str::uuid();
        $user = User::create($request->validated());

        $user->roles()->attach($request->role, ['password'=> bcrypt($request->password)]);

        return response()->json([
            'message' => 'User created successfully',
            'user' => $user
        ], 201);
    }

    public function login (LoginRequest $request) {
        $credentials = $request->getCredential();
        $user = User::where(($credentials)?'email':'username', $request->email)->first();
        if (!$user) {
            return response()->json([
                'message' => 'User not found'
            ], 404);
        }elseif ($user->isActive == 0) {
            return response()->json([
                'message' => 'User disabled'
            ], 401);
        }

        $relation = User_Role_Relationship::where('user_id', $user->id)->where('role_id', $request->role)->first();

        if (!$relation || !Hash::check($request->password, $relation->password)) {
            return response()->json([
                'message' => 'Incorrect password'
            ], 401);
        }

        // if ($relation->tokens()->count() > 0) {
        //     $relation->tokens()->delete();
        // }

        $token = $relation->createToken('auth_token')->plainTextToken;

        return response()->json([
            'message' => 'User logged in successfully',
            'access_token' => $token,
            'token_type' => 'Bearer',
        ], 200);
    }
    public function logout (Request $request) {
        $request->user()->currentAccessToken()->delete();

        return response()->json([
            'message' => 'User logged out successfully'
        ], 200);
    }
    public function sendEmailRecoveryPassword (Request $request) {
        $rules = [
            'email'=> 'required|email',
            'role' => 'required|integer'
        ];

        $request->validate($rules);

        $user = User::where('email', $request->email)->first();
        if (!$user) {
            return response()->json([
                'message' => 'User not found'
            ], 404);
        }

        $relation = User_Role_Relationship::where('user_id', $user->id)->where('role_id', $request->role)->first();

        if (!$relation) {
            return response()->json([
                'message' => 'User not found'
            ], 404);
        }

        $token = Str::random(4);
        // Token numerico
        // $token = rand(1000, 9999);

        // $relation->password = bcrypt($token);
        // $relation->save();

        // $data = [
        //     'name' => $user->name,
        //     'password' => $token
        // ];

        // $token = $relation->createToken('recovery_token')->plainTextToken;

        $user->roles()->updateExistingPivot($request->role, ['remember_token'=> $token, 'valid_until'=> now()->addMinutes(30)]);

        $info = [
            'name' => $user->firstName,
            'email' => $user->email,
            'token' => $token
        ];

        Mail::to($request->email)->send(new PasswordReset($info));
        // Mail::to($request->email)->queue(new PasswordReset($info));

        return response()->json([
            'message' => 'Email sent successfully'
        ], 200);
    }

    public function validateRecoveryToken (Request $request) {
        $rules = [
            'email' => 'required|email',
            'role' => 'required|integer',
            'token' => 'required|string'
        ];

        $request->validate($rules);

        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return response()->json([
                'message' => 'User not found'
            ], 404);
        }

        $relation = User_Role_Relationship::where('user_id', $user->id)->where('role_id', $request->role)->where('remember_token', $request->token)->first();

        if (!$relation) {
            return response()->json([
                'message' => 'User not found'
            ], 404);
        }elseif ($relation->valid_until < now()) {
            return response()->json([
                'message' => 'Token expired'
            ], 401);
        }

        return response()->json([
            'message' => 'token valid'
        ], 200);
    }

    public function recoveryPassword(Request $request) {
        $rules = [
            'email' => 'required|email',
            'role' => 'required|integer',
            'token' => 'required|string',
            'password' => 'required|string|min:8|confirmed'
        ];

        $request->validate($rules);

        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return response()->json([
                'message' => 'User not found'
            ], 404);
        }

        $relation = User_Role_Relationship::where('user_id', $user->id)->where('role_id', $request->role)->where('remember_token', $request->token)->first();

        if (!$relation) {
            return response()->json([
                'message' => 'User not found'
            ], 404);
        }elseif ($relation->valid_until < now()) {
            return response()->json([
                'message' => 'Token expired'
            ], 401);
        }

        $relation->password = bcrypt($request->password);
        $relation->remember_token = null;
        $relation->valid_until = null;
        $relation->save();

        return response()->json([
            'message' => 'Password changed successfully'
        ], 200);
    }
}
