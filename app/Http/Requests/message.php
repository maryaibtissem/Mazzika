<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;


class message extends Request
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
            'pseudo'=>'required',
            'mdp'=> 'required',
            'email'=>'required|unique:membres'
        ];
    }
    public function messages()
    {
        return [
        'email.required' => 'We need to know your e-mail address!',
         'email.unique:membres'  => 'unique',  
            'pseudo'=>'required',
            'mdp'=> 'required'
        
        ];
    }
    
    
    
 
}
