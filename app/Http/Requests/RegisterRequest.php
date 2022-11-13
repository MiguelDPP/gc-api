<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            // 'id'=> 'required|uuid',
            'firstName' => 'required|string',
            'secondName' => 'nullable|string',
            'surname' => 'required|string',
            'secondSurname' => 'nullable|string',
            'username' => 'required|string|unique:users,username',
            'email' => 'required|string|email|unique:users',
            'municipality_id' => 'required|exists:municipalities,id',
            'photo' => 'nullable|string',
            'password' => 'required|string|confirmed',
            'role' => 'required|in:2',
        ];
    }
}
