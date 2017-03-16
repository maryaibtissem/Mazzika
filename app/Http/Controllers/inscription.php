<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use App\Membre;
use App\Http\Requests\message;
use App\Http\Controllers\Emailvalidator;


class inscription extends Controller
{
  public function getinfos(message $request)
  {
      
        $validator = new Emailvalidator;
        $pseudo= $request->input('pseudo');//le truc posté  
        $mdp=$request->input('mdp');
        $email= $request->input('email');
      
        $membre = new Membre;
      
        if (!empty ($pseudo) && !empty  ($mdp) && !empty  ($email))
        {
        if ($validator->check_email_address($email) )
          {

            $insertion =  $membre::insert(
                ['nom' =>  $pseudo,'mdp' => $mdp, 'email'=>$email]
            ); 
              
            return view ('inscription');
            }
//            else{ 
//                return view ('inscription');
//                }
           
    
        }
    
      
      
      
      
       
    
     
  }
}
