<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class top10 extends Controller
{
    public $key='fb1b5dd30404adf5fbfdc110d7e0391a';
    public $pays = 'algeria';
    
    public function get()
    {
        
        $curl = curl_init
        ('http://ws.audioscrobbler.com/2.0/?method=geo.gettoptracks&country='.$this->pays.'&api_key='.$this->key.'&format=json');
//      $curl = curl_init("http://ws.audioscrobbler.com/2.0/?limit=26&method=user.getrecenttracks&user=$user&api_key=".$this->key);
        
        curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
        curl_setopt($curl,CURLOPT_HEADER,0);
        curl_setopt($curl,CURLOPT_TIMEOUT,3);
        $data = curl_exec($curl); 
        curl_close($curl);
        
//       $data = str_replace("#text", "text",$data);
        
        $data= json_decode($data);
   	 
//    dd($data);
//   echo "<pre>";print_r($data);
    return view ('welcome',array('top10'=> $data));
 
    
    }
    
}

