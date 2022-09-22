<?php

namespace App\Http\Requests;

use App\Http\Requests\Interfaces\RequestInterface;

class UserRequest extends GenericRequest implements RequestInterface
{
    public function validateStore()
    {
        return [
            // 'title' => 'required|max:100'
        ];
    }

    public function validateUpdate()
    {
        return [
            // 'title' => 'required|max:100'
        ];
    }

    public function validateLogin()
    {
        return [
            'email' => 'required|email',
            'password' => 'required'
        ];
    }

    public function validateRegister()
    {
        return [
            'name' => 'required|max:50',
            'email' => 'required|email|max:50',
            'password' => 'required',
            'phone' => 'required|max:15'
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'O email é obrigatorio.',
            'password.required' => 'A senha é obrigatoria.'
        ];
    }
}
