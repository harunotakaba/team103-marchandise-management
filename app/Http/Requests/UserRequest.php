<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
       // dd($this->all());
        return [
            // ユーザー名
            'user_name' => 'required', // 必須
            // メールアドレス
            'email'     => 'required', // 必須
            // パスワード
            'password'  => [
                'required', // 必須
                'min:8', // 最低8文字以上
                'max:16', // 最高16文字まで
                'regex:/^(?=.*?[a-zA-Z])(?=.*?\d)[a-zA-Z\d]/' // 正規表現を使って、半角英数字混在
            ],
            // パスワード確認用
            'confirm_password' => [
                'required', // 必須
               'same:password', // passwordと値が同じか
            ],
        ];
    }

    public function messages()
    {
        return [
          'name.required' => 'ユーザー名は必須です。',
          'email.required'     => 'メールアドレスは必須です。',
          'password.required'    => 'パスワードは必須です。',
          'password.min'         => 'パスワードは :min桁以上で入力してください。',
          'password.max'         => 'パスワードは :max桁以下で入力してください。',
          'password.regex'       => 'パスワードは半角英数字混在で入力してください。',
          'confirm_password.required' => 'パスワード確認用は必須です。',
          'confirm_password.same'     => 'パスワードとパスワード確認用が一致しません。',
        ];
    }
}