<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => 'required|string|max:100',
            'email' => 'required|email|max:100',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:1000',
        ];
    }
}
