<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class placement extends FormRequest
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
            'gender' => 'bail|required',
            'grievance' => 'bail|required'
        ];
    }

    public function messages()
    {
        return [
            'gender.required' => 'Please select any one',
            'grievance.required' => 'Please enter grievance'
        ];
    }
}
