<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;
use Lcobucci\JWT\Parser;

class RegisterRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'phone' => [
                'required',
                'max:15',
                'phone',
            ],
            'password' => 'required|min:6|confirmed',
            '*_name' => 'required|string',
        ];
    }
}
