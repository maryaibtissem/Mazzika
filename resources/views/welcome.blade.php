 @section('title') Mazzika @endsection @section('content')

<div class="container k">
    <div class="row">  

<form class="col-lg-6" method="post" action="traitement">

    <label>Top 50 des morceaux par pays :</label>
    <br/>
    <select name="pays">

        @foreach ($Pays as $pays)
        <option value="{{$pays->nom}}">{{$pays->nom}}</option>
        @endforeach

    </select>
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <label>&nbsp; </label>
    <button id="deconnexion1" name="envoyer">ok</button>

</form>


<form method="post" action="traitementtrack" class="col-lg-6">

    <label for="genre">Les meilleurs morceaux par genre :</label>
    <br />

    <select name="genre" id="genre">

        @foreach ($Genre as $genre)
        <option value="{{$genre->value}}">{{$genre->nom}}</option>
        @endforeach

    </select>

    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <label>&nbsp; </label>
    <button id="deconnexion1" name="envoyer">ok</button>

</form>

<h1>Top 12 de la semaine en France :</h1> 
@foreach ($top10->tracks->track as $key => $m)

<div class=" centrer col-lg-4 col-md-6 col-sm-12">
    <div class="boite">
        <a href="{{$m->url}}">
         Titre : {{$m->name}}</a>
        <br> Artiste : {{$m->artist->name}}
        <br> Nombre d'écoutes : {{$m->listeners}}
        <br>
        <br>

        <img src='{{$m->image[2]->{"#text"} }}'>
        <br>
        <br>
        <a href="#"><i class="fa fa-thumbs-up" id="pouce" aria-hidden="true"></i></a>
    </div>
    <br>

</div>
  
@endforeach @endsection
  </div>
</div>




 @extends('layouts.app')