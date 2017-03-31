@extends('layouts.app')



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
            <section id="description1">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="panel panel-default">
                                <div class="panel-heading"><i class="fa fa-plus-square" aria-hidden="true"></i> Inscription</div>
                                <div class="panel-body">
                                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                                        {{ csrf_field() }}

                                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                            <label for="name" class="col-md-4 control-label">Nom</label>

                                            <div class="col-md-6">
                                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}"> @if ($errors->has('name'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span> @endif
                                            </div>
                                        </div>

                                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                            <label for="email" class="col-md-4 control-label">Adresse e-mail</label>

                                            <div class="col-md-6">
                                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}"> @if ($errors->has('email'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span> @endif
                                            </div>
                                        </div>

                                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                            <label for="password" class="col-md-4 control-label">Mot de passe</label>

                                            <div class="col-md-6">
                                                <input id="password" type="password" class="form-control" name="password"> @if ($errors->has('password'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span> @endif
                                            </div>
                                        </div>

                                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                            <label for="password-confirm" class="col-md-4 control-label">Confirmation du mot de passe </label>

                                            <div class="col-md-6">
                                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation"> @if ($errors->has('password_confirmation'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span> @endif
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-md-6 col-md-offset-4">
                                                <button type="submit" class="btn color-btn">
                                                    <i class="fa fa-btn fa-user"></i> S'inscrire
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>



        </section>
    </div>
</div>



@endsection