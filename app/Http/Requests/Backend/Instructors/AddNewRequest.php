<?php

namespace App\Http\Requests\Backend\Instructors;

use Illuminate\Foundation\Http\FormRequest;

class AddNewRequest extends FormRequest
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
            'fullName' => 'required|max:255',
            'emailAddress' => 'required|unique:instructors,email',
            'contactNumber' => 'required|unique:instructors,phone',
            'roleId' => 'required|max:3',
            'password' => 'required',

        ];
    }
}
