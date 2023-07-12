<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'image' => 'required | max:255',
            'name' => 'required | max:255',
            'price' => 'required | integer',
            'stock' => 'required | integer',
            'company' => 'required | max:255',
            'comment' => 'required | max:255'
        ];
    }
    /**
     * 項目名
     *
     * @return array
     */
    public function attributes()
    {
        return [
            'image' => '商品画面',
            'name' => '商品名',
            'price' => '価格',
            'stock' => '在庫数',
            'company' => 'メーカー名',
            'comment' => 'コメント',

        ];
    }

    /**
     * エラーメッセージ
     *
     * @return array
     */
    public function messages() {
        return [
            'image.required' => ':attributeは必須項目です。',
            'name.required' => ':attributeは必須項目です。',
            'price.required' => ':attributeは必須項目です。',
            'stock.required' => ':attributeは必須項目です。',
            'company.required' => ':attributeは必須項目です。',
            'comment.required' => ':attributeは必須項目です。',
        ];
    }
}
