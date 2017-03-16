<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use App\Membre;
use App\Http\Requests\message;



class inscription extends Controller
{
  public function getinfos(message $request)
  {
      
       
        $pseudo= $request->input('pseudo');//le truc posté  
        $mdp=$request->input('mdp');
        $email= $request->input('email');
      
        $membre = new Membre;

            $insertion =  $membre::insert(
                ['nom' =>  $pseudo,'mdp' => $mdp, 'email'=>$email]
            ); 
              
            return redirect()->route('accueil');
            }
  }