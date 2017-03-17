<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Input;

use Illuminate\Http\Request;
use App\Http\Requests\messageconnexion;
use App\Http\Requests;
use App\Membre;
use App\Morceaux;
use App\Aimer;



class connexion extends Controller
{
  public function getinfos(messageconnexion $request)
   {
       
 $pseudo= $request->input('pseudo');//le truc posté  
        $mdp=$request->input('mdp');
          

        $membres =new Membre;
            $existe = $membres::select('*')
            ->where('name', '=', $pseudo)
            ->get();
       
//       echo "<pre>";print_r($existe);
       
//       echo  $existe[0]->nom;
     
       
//       if($existe->rowCount() > 0)
//       {
//        if( $existe[0]->mdp == $mdp)
//        {
//            
//        return redirect()->route('accueil');
//            
//        }  
//           
//       }
////       

//      
       
       
   }
}
