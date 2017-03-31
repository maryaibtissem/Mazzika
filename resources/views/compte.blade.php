@extends('layouts.app')

@section('content') 

   
    <section class="alexandre">

    <div class="container">

        <div class="row">
           
            <h1> <i class="fa fa-music" aria-hidden="true"></i> Les morceaux que vous avez aimé</h1>
            @foreach ($morceaux as $key => $m)
            <div class="centrer col-lg-3 col-md-6 col-sm-12">

                <div class="boiteCompte">


                <a href="{{$m->url}}">
                    Titre : {{$m->nom}}

                    <br> Artiste : {{$m->artiste}}
                    <br>
                    <br>
                    <br>
                    <img src='{{$m->image }}'>

                    <hr>
                    
                </a>
                </div>
            </div>
            @endforeach


        </div>
    </div>

</section>




@endsection