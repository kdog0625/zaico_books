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
        return [
            'name' => ['required', 'string', 'min:1', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'own_id' => ['required', 'string', 'min:1', 'max:16', 'unique:users','regex:/^@[a-zA-Z0-9]+$/'],
            'prof_image' => ['nullable'],
            'prof_content' => ['nullable'],
            'sex' => ['nullable'],
            'birthday' => ['nullable'],
        ];
    }
    public function attributes()
    {
        return [
            'name' => '名前',
            'email' => 'メールアドレス',
            'password' => 'パスワード',
            'own_id' => 'ユーザID',
            'prof_image' => 'プロフィール画像',
            'prof_content' => 'プロフィール紹介',
            'sex' => '性別',
            'birthday' => '誕生日',
        ];
    }
}
