 @section('title') Mazzika @endsection @section('content')
 <!--  <div class="container-fluid ibtissem k">
    <div class="row">
-->
      
        <div class="container-fluid k">
            <div class="row">

                <section class="presentation">
                    <img id="fond" src="{{asset('img/audience-1846652_1920.jpg')}}">

                    <div id="partie1">

                        <section class="col-lg-3 col-lg-offset-2 col-md-6 col-sm-12" id="bloc">

                            <div id="pochette" style="left:0;">
                                <img src="{{asset('img/logopart1.png')}}" alt="">
                            </div>

                            <div id="disque" style="left:0px;">
                                <img src="{{asset('img/logopart2.png')}}" alt="">
                            </div>
                        </section>

                        <section class="col-lg-6 col-lg-offset-1 col-md-6 hidden-sm hidden-xs" id="boiteSlogan">
                            <p id="slogan"> « Everything we do is music. »</p>
                            <p id="john">John Cage</p>
                        </section>
                            </div>
                    <section id="description">
                       <h1>Mazzika vous souhaite la bienvenue !</h1>
                        <p class="description">
                            Mazzika utilise les bases de données de Last.fm pour vous informer des tendances musicales de la semaine passée dans chaque pays du monde. Vous pouvez aussi découvrir les morceaux les plus appréciés de tous les temps par genre musical.  
                            <br><br><span class="noteMusique"><i class="fa fa-music" aria-hidden="true"></i></span><br><br>
                            Inscrivez-vous pour pouvoir enregistrer sur votre compte vos morceaux préférés !
                            

                        </p>
                    </section>



                </section>
            </div>
        </div>
       
       <section class="alexandre">
        <div class="container">
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
                    <button  name="envoyer">ok</button>
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
                    <button name="envoyer">ok</button>

                </form>





                <h1>Top 12 de la semaine en France :</h1> 
                
                <form method="" action="">
                @foreach ($top10->tracks->track as $key => $m)

                <div class=" centrer col-lg-4 col-md-6 col-sm-12">
                    <div class="boite">
                       
                        <a href="{{$m->url}}">
                             {{$m->{"@attr"}->rank + 1}}<br>
                             Titre : {{$m->name}}
                        <br> Artiste : {{$m->artist->name}}
                        <br> Nombre d'écoutes depuis la sortie: {{$m->listeners}}
                        <br>
                        <br>

                        <img src='{{$m->image[2]->{"#text"} }}'></a>
                        <br>
                        <br>
                       
                    </div>
                    
                    @if (!Auth::guest())
                    <div class="pouce">
                    
                    <input class="champCache" type="hidden" name="id" value= "{{$m->name}}"> 
                    <input class="url" type="hidden" name="id" value= "{{$m->url}}"> 
                    <input class="artist" type="hidden" name="id" value= "{{$m->artist->name}}"> 
                    <input class="user" type="hidden" name="id" value= "{{Auth::user()->name }}"> 
                    <input class="image" type="hidden" name="image" value= "{{$m->image[2]->{'#text'} }}"> 
                   
                    
                    <i class="fa fa-thumbs-up aimer" id="pouce" aria-hidden="true"></i>
                    </div>
                   @endif

                    <br>
                <hr>
                </div>

                @endforeach
                <input type="hidden" id="token" name="_token" value="{{ csrf_token() }}">
                </form>
            
               
            </div>
        </div>
        </section>
    <!--</div>
</div>-->

<script src="{{asset('js/script.js')}}">

</script>


@endsection @extends('layouts.app')