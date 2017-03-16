@extends('default') @section('title') Mazzika @endsection @section('content')


<form method="post" action="traitementinfos" id="inscription">
    <h1>Inscrivez vous par ici </h1>

    <label>Pseudo</label>
    <input type="text" name="pseudo">
    <br>
    <br> {!! $errors->first('pseudo', '<small class="help-block erreur">:message</small>') !!}
    <label>Mot de passe </label>
    <input type="password" name="mdp">
    <br>
    <br> {!! $errors->first('mdp', '<small class="help-block erreur">:message</small>') !!}

    <label>Email </label>
    <input type="text" name="email">
    <br>
    <br> {!! $errors->first('email', '<small class="help-block erreur">:message</small>') !!}
    <label>&nbsp; </label>
    <button id="boutton" name="envoyer">Envoyer</button>
    <br>
    <br>
    <br>
    <label>&nbsp;</label><a href="{{asset('index.php')}}">Retour a la page d'accueil</a>
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

</form>





@endsection