<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TweetRequest extends FormRequest
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
            
        ];
    }

    public function attributes()
    {
        return [
            'zaico_number' => '型番',
            'zaico_name' => '本文',
            'zaico_image' => '本文',
            'zaico_count' => '本文',
            'content' => '本文',
            'category' => '本文',
            'zaico_storage' => '本文',
        ];
    }
}
