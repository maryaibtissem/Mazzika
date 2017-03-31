 @extends('layouts.app')

@section('title')
Mazzika

@endsection



@section('content') 
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
                       <h1>{{$pays}} : vous vous demandez ce qu'on y écoute ?</h1>
                    </section>



                </section>
            </div>
        </div>
   
  <section class="alexandre">
<div class="container k">
        <div class="row">  
 
            
            <h1> {{$pays}} - Top 50 de la semaine :</h1>
          
           @foreach ($top10->tracks->track as $key => $m)    
            <div class=" centrer col-lg-4 col-md-6 col-sm-12">
               <div  class="boite">

                <a href="{{$m->url}}">
                                {{$m->{"@attr"}->rank + 1}}<br>
                Titre : {{$m->name}} <br>
                Artiste : {{$m->artist->name}} <br>
                Nombre d'écoutes : {{$m->listeners}}<br><br>

                <img src='{{$m->image[2]->{"#text"} }}'>
                
                <br>
                </a>
                </div>
                <hr>
            </div>
        
    @endforeach
        </div>
    </div> 
</section>
  
@endsection