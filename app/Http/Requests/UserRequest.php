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

    public function messages()
    {
        return [
            // 'title.required' => 'The title is required'
        ];
    }
}
