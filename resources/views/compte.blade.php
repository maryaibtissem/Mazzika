 @extends('layouts.app')

@section('title')
Mazzika

@endsection

@section('content')   
<div class="container k">
        <div class="row">  
 
         @foreach($style as $s)
          
            <h1>{{$s->nom}} - Les meilleurs morceaux :</h1>
        @endforeach   
          
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
    </div>
</div>
  
@endsection