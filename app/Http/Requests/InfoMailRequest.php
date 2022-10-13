<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InfoMailRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'name' => ['required'],
            'email' => ['required'],
            'phone' => ['required'],
            'message' => ['required']
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'Napíšte svoje meno.',
            'phone.required' => 'Napíšte svoje telefónne číslo.',
            'message.required' => 'Napíšte text správy.',
            'email.email' => 'Email nemá podobu emailu',
        ];
    }
}
