<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistrationRequest extends FormRequest
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
            //
            'username' => 'required|string|alpha_dash|max:60',
            'email' => 'required|email|string|max:60',
            'password' => 'required|string|alpha_dash|min:6|max:100|confirmed',
            'password_confirmation' => 'required|string|alpha_dash|min:6|max:100',
        ];
    }
}
