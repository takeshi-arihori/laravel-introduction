<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\Myrule;

class HelloRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        if ($this->path() == 'hello') {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        // return [
        //     'name' => 'required',
        //     'mail' => 'email',
        //     'age' => 'numeric|hello', // HelloValidator.phpのvalidateHelloメソッドを呼び出す
        // ];

        return [
            'name' => 'required',
            'mail' => 'email',
            'age' => [
                'numeric',
                new Myrule(3), // Myrule.phpのvalidateメソッドを呼び出す(5の倍数のみ受け付ける)
            ],
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages()
    {
        return [
            'name.required' => '名前は必ず入力してください。',
            'mail.email' => 'メールアドレスが必要です。',
            'age.numeric' => '年齢を整数で記入ください。',
            'age.hello' => 'Hello! 入力は偶数のみ受け付けます。', // HelloValidator.phpのvalidateHelloメソッドを呼び出す
        ];
    }
}
