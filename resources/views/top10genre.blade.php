@extends('default')

@section('title')
Mazzika

@endsection

@section('content')   
 
          <a href="{{asset('index.php')}}" class="bouton">Retour</a>
            <h1>Top 12 de la semaine en {{$style}} :</h1>
          
           @foreach ($top10->tracks->track as $key => $m)    
            <div class=" centrer col-lg-4 col-md-6 col-sm-12">
               <div  class="boite">
                <a href="{{$m->url}}">
                Titre : {{$m->name}}</a> <br>
                Artiste : {{$m->artist->name}} <br><br>
                

                <img src='{{$m->image[2]->{"#text"} }}'>
                <br>
            </div></div>
        
    @endforeach

  
@endsection