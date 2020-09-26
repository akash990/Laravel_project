<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class T_SalaryRequests extends FormRequest
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
            'username'  => 'required|min:3',
            'password'      => 'required',
			'email'      => 'required',
			'gender'      => 'required',
			'education'      => 'required',
			'picture' => 'required'
			
        
        ];
    }

    public function messages(){

        return [
            'username.required'  => "Name can't be empty",
            'password.min'  => "Name can't be less than three characters",
			'email.required'  => "Salary can't be empty",
			'picture.required'  => "picture can't be empty",
			'gender.required'  => "gender can't be empty",
			'education.required'  => "education can't be empty"
			
        ];
    }
}
