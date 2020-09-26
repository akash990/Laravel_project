<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class A_TpcomplainRequests extends FormRequest
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
            
            'reply'      => 'required'
        
        ];
    }

    public function messages(){

        return [
           
			'reply.required'  => "Reply can't be empty"
			
        ];
    }
}
