<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;

use App\Membre;
use App\Morceauxes;
use App\Aimers;
use App\User;
use Auth;



class connexion extends Controller
{
  public function like (Request $request)
   {
        if($request->ajax()){
            
       $titre = $request->input('titre');
       $artist = $request->input('artist');
       $user = $request->input('user');
       $image = $request->input('image');
       $url = $request->input('url');
            
        echo $url;
            
        $morceaux =new Morceauxes;
        $users = new User;
        $Aimer =new Aimers;
            
            
        $iduser = $users::select('id')
            ->where('name', '=', $user)
            ->first();
         
            $idMorceau = $morceaux::select('id')
            ->where('nom', '=', $titre)
            ->first(); 
            
            
           
            
        if(isset($idMorceau->id)){
           
        $idMorceauAimer = $Aimer::select('id')
            ->where('id_morceau', '=', $idMorceau->id)
            ->where ('id_membre', '=', $iduser->id )
            ->first(); 
            
        if(!isset($idMorceauAimer)){
            
            
        $insertionAimer =  $Aimer ::insert(
                ['id_morceau' => $idMorceau->id,'id_membre' =>$iduser->id]
            );     
            
        }
            
            
            
        }else{
            
            
             
        $insertionM =  $morceaux::insertGetId(
                ['nom' => $titre,'artiste' => $artist, 'image' => $image, 'url' =>$url]
            ); 
            
         
            $insertionAimer =  $Aimer ::insert(
                ['id_morceau' => $insertionM,'id_membre' =>$iduser->id]
            ); 
            
            
            
        }
        
  
        }

   }
    
    function affichage (Request $request){
        
    $morceaux =array();   
    $user = Auth::user()->name;
    $Aimer =new Aimers; 
    $morceau =new Morceauxes;
    $users = new User;
        
    $iduser = $users::select('id')
            ->where('name', '=', $user)
            ->first();
        
//    print_r($iduser);
        
    $idM = $Aimer::select('id_morceau')
            ->where('id_membre', '=', $iduser->id)
            ->get();
        
        
    $morceaux = $morceau::join("aimers","morceauxes.id","=","aimers.id_morceau")
        ->select("*")
        ->where('aimers.id_membre',$iduser->id)->get();
        
        
        
      
   return view ('compte',array('morceaux'=>$morceaux)); 
    

//     echo "<pre>";print_r($morceaux);
        
 
    
    }    
  
}

