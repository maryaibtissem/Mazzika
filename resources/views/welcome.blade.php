@extends('default')

@section('title')
  Accueil
@endsection

@section('content')   
 
    
    <div class="container">
        <div class="row">  
           @foreach ($top10->tracks->track as $key => $m)    
            <div class="col-lg-4 col-md-6 col-sm-12">
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