<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'username' => 'required|max:30',
            'email' => 'required|email',
            'password' => 'required|min:6',
            'cfpassword' => 'same:password'
        ];
    }


    public function messages(){
        return [
            'username.required' => 'Vui lòng điền tài khoản',
            'username.max' => 'Tài khoản không vượt quá 30 ký tự'
        ];
    }
}
