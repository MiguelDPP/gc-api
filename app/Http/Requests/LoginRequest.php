<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Factory as ValidationFactory;

class LoginRequest extends FormRequest
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
            'email' => 'required|string',
            'password' => 'required|string',
            'role' => 'required|exists:roles,id',
        ];
    }
    public function getCredential()
    {
        $username = $this->get('email');
        if($this->isEmail($username)) {
            return false;
        }
        return true;
    }

    public function isEmail($value) {
        $factory = $this->container->make(ValidationFactory::class);

        return $factory->make(['username'=>$value], ['username'=>'email'])->fails();
    }
}
