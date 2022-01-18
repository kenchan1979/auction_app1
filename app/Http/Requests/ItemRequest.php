<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ItemRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // 認証関連の判定がない場合はtrueにしておきます
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
            'name' => 'required|string|max:50',
            'description' => 'required|string|max:2000',
            'price' => 'required|integer|min:1',
            'seller' => 'required|string|max:50',
            'email' => 'required|email:rfc,dns',
            'image_url' => 'required|active_url',
        ];
    }
}
