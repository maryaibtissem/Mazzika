@extends('default')

@section('title')
  Accueil
@endsection

@section('content')   
 
          <a href="{{asset('index.php')}}">Retour</a>

          
           @foreach ($top10->tracks->track as $key => $m)    
            <div class=" centrer col-lg-4 col-md-6 col-sm-12">
                <p>
                <a href="{{$m->url}}">
                Titre : {{$m->name}}</a> <br>
                Artiste : {{$m->artist->name}} <br>
                Nombre d'écoutes : {{$m->listeners}}</p>

                <img src='{{$m->image[2]->{"#text"} }}'>
                <br>
            </div>
        
    @endforeach
        </div>
    </div> 
  
@endsection