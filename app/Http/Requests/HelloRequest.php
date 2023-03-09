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
        if ($this ->path() == 'hello') {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required',
            'mail' => 'email',
            'age' => ['numeric', new Myrule(5)],
        ];
    }

    // メッセージを日本語に変更
    public function messages(): array
    {
        return [
            'name.required' => '必ず入力してください。',
            'mail.email' => 'メールアドレス必要です',
            'age.numeric' => '年齢を整数で入力してください',
            'age.hello' => '偶数しか受け付けねんだわ'
        ];
    }
}
