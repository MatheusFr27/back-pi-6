<?php

namespace App\Http\Requests\Interfaces;

interface RequestInterface
{
    public function validateStore();
    public function validateUpdate();
    public function messages();
}
