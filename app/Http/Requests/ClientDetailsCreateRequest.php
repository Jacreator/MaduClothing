<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientDetailsCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'phone_number' => 'required|numeric',
            'email' => 'required|email|unique:client_details,email',
            'image' => 'required_if:imageChecker,==,1|image|mimes:jpg,png,jpeg,gif,svg|max:10042',
            'gender' => 'required'
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'first_name.required' => 'Please Enter the first name field',
            'last_name.required' => 'Please Enter the last name field',
            'email.unique' => 'this email is already taken',
            'email.email' => 'incorrect email address',
            'email.required' => 'Please Enter a valid email address',
            'phone_number.required' => 'Please the phone number is need',
            'gender.required' => 'Please choose your preferred Gender',
            'image.mimes' => 'invalid image format',
            'image.max' => 'image too large... Suggest you make a screenshot and upload that screenshot',
        ];
    }
}
