<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class faculty extends FormRequest
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
            'subject' => 'bail|required',
            'grievance' => 'bail|required',
            // 'name' => 'required',
            // 'vertical' => 'bail|required',
            // 'semester' => 'bail|required',
        ];
    }

    public function messages()
    {
        return [
            //    'name.required' => 'Please enter name',
            //    'vertical.required' => 'Please enter vertical',
            //    'semester.required' => 'Please enter semester',
            'subject.required' => 'Please enter subject',
            'grievance.required' => 'Please enter grievance'
        ];
    }
}
