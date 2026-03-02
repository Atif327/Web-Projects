<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactMessageRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => ['required', 'string', 'max:120'],
            'email' => ['required', 'email', 'max:160'],
            'subject' => ['nullable', 'string', 'max:160'],
            'message' => ['required', 'string', 'max:4000'],
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Please enter your name.',
            'email.required' => 'Please enter a valid email address.',
            'message.required' => 'Please enter a message.',
        ];
    }
}
