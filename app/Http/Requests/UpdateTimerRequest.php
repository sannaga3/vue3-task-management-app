<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTimerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "start_time" => ['required', 'date'],
            "end_time" => ["nullable", 'date', 'after:begin'],
            "per_page" => ["nullable", 'integer', "min:1"],
            "page" => ["nullable", 'integer', "min:1"]
        ];
    }
}