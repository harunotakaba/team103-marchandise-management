<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class loginRequest extends FormRequest
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
            // メールアドレス
            'email'     => 'required', // 必須
            // パスワード
            'password'  => 'required', // 必須
    
            
        ];
    }

    public function messages()
    {
        return [
          'email.required'     => 'メールアドレスは必須です。',
          'password.required'    => 'パスワードは必須です。',
        ];
    }
}