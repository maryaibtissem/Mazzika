<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Support\Facades\Input;
use App\Genre;

class topTrack extends Controller
{
    
    public $key='fb1b5dd30404adf5fbfdc110d7e0391a';

    public function truck(Request $request) {
        
         /* Article c'est le modele*/
        $style = $request->input('genre');//le truc posté  
      
     
        return redirect()->route('top10genre', ['style' =>  $style]);
    }
    
    public function get ($style)
    {
        
//        echo $style;
        
        $curl = curl_init('http://ws.audioscrobbler.com/2.0/?limit=48&method=tag.gettoptracks&tag='.$style.'&api_key='.$this->key.'&format=json');
        
        curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
        curl_setopt($curl,CURLOPT_HEADER,0);
        curl_setopt($curl,CURLOPT_TIMEOUT,8);
        $data = curl_exec($curl); 
        curl_close($curl);
        
        
        $data= json_decode($data);
        // echo "<pre>";print_r($data);
//        $style = str_replace("+", " ",$style);
        
            $genres = new Genre;
            $genre = $genres::select('nom')
            ->where('value', '=', $style)
            ->get();
        
            $nom = $genre[0]->nom;
//             echo "<pre>";print_r($genre);   

        return view ('top10genre',array('top10'=> $data,'style'=>$genre));			
    }
    
    
    
   
}
