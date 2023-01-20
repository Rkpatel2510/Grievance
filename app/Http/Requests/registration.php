<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class registration extends FormRequest
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
            'name' => 'required',
            'email' => 'bail|required|Email',
            'contact' => 'bail|required|numeric',
            'enrollment' => 'bail|required',
            'vertical' => 'bail|required',
            'semester' => 'bail|required',
            'year' => 'bail|required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => "Please enter name",
            'email.email' => "email is incorrect",
            'contact.numeric' => "number is complsary",
            'enrollment.required' => "Please enter enrollment",
            // 'vertical.required' => "Please select vertical",
            // 'semester.required' => "Please select semester",
            // 'year.required' => "Please select year"

        ];
    }
}