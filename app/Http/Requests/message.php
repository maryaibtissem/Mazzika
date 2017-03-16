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
            'email'=>'required|unique:membres',
            'email'=>'required|email'
        ];
    }
    public function messages()
    {
        return [
        'email.required' => 'Oops il manque l\'email...',
        'email.unique:membres'  => 'Cet e-mail existe déjà.',  
        'pseudo.required'=>'Oops il manque le pseudo.',
        'mdp.required'=> 'Oops il manque le mot de passe..'
        
        ];
    }
    
    
    
 
}
