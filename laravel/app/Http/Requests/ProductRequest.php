<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'zaico_number' =>  ['required', 'string', 'regex:/^[a-zA-Z0-9]+$/', 'max:255'],
            'zaico_name' => ['required', 'string',  'max:255'],
            'zaico_count' => ['required', 'integer'],
            'content' => ['nullable'],
            'category' => ['nullable'],
            'zaico_storage' => ['nullable'],
            'zaico_image' => ['file','mimes:jpeg,png,jpg,bmb','max:2048', 'nullable'],
        ];
    }

    public function attributes()
    {
        return [
            'zaico_number' => '型番',
            'zaico_name' => '商品名',
            'zaico_image' => '画像',
            'zaico_count' => '在庫数',
            'content' => '本文',
            'category' => 'カテゴリ',
            'zaico_storage' => '保管場所',
        ];
    }
}
