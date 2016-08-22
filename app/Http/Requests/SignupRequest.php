<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class SignupRequest extends Request
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
            'displayname' => 'required|min:3|max:255',
            'email' => 'required|email',
            'password' => 'required|min:6|max:16|confirmed',
            'password_confirmation' => 'required',
        ];
    }

    public function messages()
    {
        return [];
    }
}
