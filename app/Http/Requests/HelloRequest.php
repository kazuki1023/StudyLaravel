<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

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
            'age' => 'numeric|between:0,150',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => '必ず入力してください。',
            'mail.email' => 'メールアドレス必要です',
            'age.numeric' => '年齢を整数で入力してください',
            'age.between' => '年齢は0-150の間で入力してください'
        ];
    }
}
