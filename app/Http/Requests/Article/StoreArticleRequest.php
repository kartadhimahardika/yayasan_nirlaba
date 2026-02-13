<?php

namespace App\Http\Requests\Article;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StoreArticleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|unique:articles|min:4|max:255',
            'description' => 'required|min:20',
            'photo' => 'nullable|string',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'title.required' => 'Bidang :attribute harus diisi',
            'title.min' => ':attribute minimal harus terdiri dari :min karakter',
            'title.max' => ':attribute tidak boleh lebih dari :max karakter',
            'description.required' => 'Bidang :attribute harus diisi',
            'description.min' => ':attribute minimal harus terdiri dari :min karakter',
        ];
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array<string, string>
     */
    public function attributes(): array
    {
        return [
            'title' => 'Judul',
            'description' => 'Deskripsi',
        ];
    }
}
