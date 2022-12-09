<?php

namespace App\Http\Controllers;

use App\Mail\UserDisabled;
use App\Models\User;
use App\Models\Municipality;
use App\Models\User_Role_Relationship;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function list(){
        $listUserStudent = User_Role_Relationship::where('role_id', 2)->get();
        $listUsers = [];
        foreach($listUserStudent as $item){
            $itemUser = User::where('id',$item->user_id)->first();
            array_push($listUsers,$itemUser);
        }
        return response()->json([
            'message' => 'List Users',
            'listUser' => $listUsers
        ], 200);
    }

    public function find ($id) {
        $user = User::where('id',$id)->first();
        //$municipality = Municipality::where('id',$user->municipality_id)->first();
        /** HOLAAAAA */
        return response()->json([
            'message' => 'User information',
            'user' => $user->load('municipality', 'roles'),
            'roles' => $user->roles()->first(),
        ], 200);
    }

    public function user (Request $request) {
        $user_role = auth()->user();

        $user = $user_role->user()->first();

        return response()->json([
            'message' => 'User information',
            'user' => $user->load('municipality', 'roles'),
            'role' => $user_role->role()->first()
        ], 200);
    }

    public function update (Request $request) {

        $rules = [
            'firstName' => 'string',
            'secondName' => 'string',
            'surname' => 'string',
            'secondSurname' => 'string',
            'email' => 'email',
            'municipality_id' => 'integer',
            'password' => 'string',
            'photo' => 'image',
        ];

        $request->validate($rules);

        if($request->has('id')){
            $user =User::where('id', $request->id)->first();
        }else{
            $user = auth()->user()->user()->first();
        }


        $email = User::where('email', $request->email)->where('id', '!=', $user->id)->first();

        if($request->has('email') && is_null($email)) {
            if($request->has('isActive')){
                $user->update($request->except('id', 'username', 'role', 'code_verification', 'email_verified_at'));
            }else{
                $user->update($request->except('id', 'username', 'role', 'code_verification', 'isActive', 'email_verified_at'));
            }
        }else {
            return response()->json([
                'message' => 'El email que deseas agregar ya se encuentra registrado!'
            ], 400);
            // $user->update($request->except('id', 'username', 'role', 'email', 'code_verification', 'isActive', 'email_verified_at'));
        }
        if ($request->has('password')) {
            $relation = User_Role_Relationship::where('user_id', $user->id)->first();
            $relation->password = bcrypt($request->password);
            $relation->save();
        }

        return response()->json([
            'message' => 'User information updated',
            'user' => $user
        ], 200);
    }

    public function disableUser () {
        $user = auth()->user()->user()->first();

        $user->isActive = 0;
        $user->save();

        Mail::to($user->email)->queue(new UserDisabled($user, false));

        auth()->user()->tokens()->delete();

        return response()->json([
            'message' => 'User disabled'
        ], 200);
    }

    public function SendCodeEnableUser (Request $request) {
        $rules = [
            'email'=> 'required|email',
        ];

        $request->validate($rules);

        $user = User::where('email', $request->email)->first();

        if ($user->isActive == 1) {
            return response()->json([
                'message' => 'User already enabled'
            ], 400);
        }

        $user->code_verification = Str::random(8);

        $user->save();

        $data = [
            'code' => $user->code_verification,
            'user' => $user,
        ];

        Mail::to($user->email)->queue(new UserDisabled($data, true));

        return response()->json([
            'message' => 'Email sent'
        ], 200);
    }

    public function enableUser (Request $request) {
        $rules = [
            'email'=> 'required|email',
            'token' => 'required|string',
        ];

        $request->validate($rules);

        $user = User::where('email', $request->email)->first();

        if ($user->code_verification != $request->token) {
            return response()->json([
                'message' => 'Incorrect code'
            ], 400);
        }

        $user->isActive = 1;
        $user->code_verification = null;
        $user->save();

        return response()->json([
            'message' => 'User enabled'
        ], 200);
    }
}
