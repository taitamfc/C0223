<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

class StoreUserRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'username' => 'required|max:255',
            'password' => 'required',
            'email' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'email.required' => 'Vui long nhap email',
            'password.required' => 'Vui long nhap password',
            'username.required' => 'Vui long nhap username',
            'username.unique' => 'Ten dang nhap da ton tai',
            'username.max' => 'Ky tu ko qua 255',
        ];
    }

    // Xu ly voi api
    public function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
            'success'   => false,
            'message'   => 'Validation errors',
            'data'      => $validator->errors()
        ]));
    }
}
