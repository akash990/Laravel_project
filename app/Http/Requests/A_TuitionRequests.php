<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class A_TuitionRequests extends FormRequest
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
            'name'      => 'required',
			'class'      => 'required',
			'subject'      => 'required',
			'salary'      => 'required',
			'contact'      => 'required',
            'tname'      => 'required'
        
        ];
    }

    public function messages(){

        return [
           
			'class.required'  => "Class can't be empty",
			'name.required'  => "Name can't be empty",
			'subject.required'  => "Subject can't be empty",
			'salary.required'  => "Salary can't be empty",
			'contact.required'  => "Contact can't be empty",
			'tname.required'  => "You must give a teacher name before submit",
			
        ];
    }
}
