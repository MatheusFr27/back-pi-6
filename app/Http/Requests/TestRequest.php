<?php

namespace App\Http\Requests;

use App\Http\Requests\Interfaces\RequestInterface;

class TestRequest extends CustomRequest implements RequestInterface
{
    public function validateStore()
    {
        return [
            //
        ];
    }

    public function validateUpdate()
    {
        return [
            //
        ];
    }

    public function messages()
    {
        return [
            //
        ];
    }
}
