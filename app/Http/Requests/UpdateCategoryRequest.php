<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class UpdateCategoryRequest extends FormRequest
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
            'Project_Title' => ['required','string','max:255'],
            'slug' => ['required','string','max:255'],
            'Description' => ['nullable','string','max:255'],
            'Project_Address' => ['nullable','string','max:255'],
            'Client_Name' => ['nullable','string','max:255'],
            'Client_Number' => ['nullable','string','max:255'],
            'status' => ['required','string','in:completed,In progress,pending'],


        ];
    }
}
