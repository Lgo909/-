<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommentForm extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        //return false; // Зачем запретил? // а тут запрет вообще для всех


        return auth("web")->check(); // скорее всего было так: тут проверка авторизации
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "text" => ["required", "string", "min:5"],
            "user_id" => ["required", "exists:users,id"],
        ];
    }

    protected function prepareForValidation(): void
    {
        $this->merge([
            "user_id"=>auth("web")->id()
        ]);
    }
}
