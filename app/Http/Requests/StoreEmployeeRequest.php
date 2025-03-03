<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEmployeeREquest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name'=>'required',
                'email'=>'required | email',
                'phone'=>'required |numeric |digits:10',
                'city'=>'required',
                'skills'=>'required | nullable |array',
                'gender'=>'required | in:male,female,others',
                'photo'=>'required |file|mimes:jpg,png,pdf|max:2048'
        ];
    }
}
