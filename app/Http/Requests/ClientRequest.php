<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
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
            'name' => 'required|string|max:255|min:3',
            'email' => 'required|email|max:255|min:3',
            'phone' => 'required|string|max:20|min:6',
            'visit_date' => 'required|date',
            'rating' => 'required|integer|min:1|max:5',
            'comments' => 'required|string|max:1000|min:10'
        ];
    }
}
