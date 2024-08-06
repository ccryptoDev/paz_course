<?php

namespace App\Http\Requests\Backend\User;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class UpdateRequest extends FormRequest
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
    public function rules(Request $r): array
    {
        $id = encryptor('decrypt', $r->uptoken);
        return [ 
            'userName' => 'required',
            'contactNumber' => 'required|unique:users,phone,' . $id,
            'emailAddress' => 'required|unique:users,email,' . $id,
        ];
    }
}
