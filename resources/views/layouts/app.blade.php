<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Mazzika</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous"> {{--
    <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}




    <!-- Custom CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"> @yield('custom_css')
    <link href="https://fonts.googleapis.com/css?family=Diplomata+SC" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu+Condensed" rel="stylesheet">

    <link href="{{asset('style.css')}}" type="text/css" rel="stylesheet" media="screen,projection" />
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

    <style>
        body {
            font-family: 'Lato';
        }
        
        .fa-btn {
            margin-right: 6px;
        }
        
        #bloc {
            position: relative;
            top: 16px;
            left: 16px;
        }
        
        #pochette {
            position: absolute;
            width: 150px;
            height: 150px;
            /* background-image:url(../../public/img/logopart1.png);*/
            z-index: 6;
            top: 0px;
        }
        
        #disque {
            position: absolute;
            width: 148px;
            height: 148px;
            /* background-image:url(../../public/img/logopart2.png);*/
            background-repeat: no-repeat;
            left: 0px;
            z-index: 5;
            top: 0px;
            border-radius: 50%;
        }
        
        #disque:hover {
            transform: rotate(7200deg);
            transition-duration: 20s;
        }
        
        #texte {
            position: absolute;
            width: 150px;
            text-align: center;
            color: white;
            text-shadow: 2px 2px 2px black;
            font-size: 15px;
        }
    </style>
</head>

<body id="app-layout">

    <!--<div id="entete"><p class="droite"><a href="register">Inscription</a> | <a href="login">Connexion</a></p></div>-->

    <div class="entete">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container-fluid">
                <div class=row>
                    <div class="navbar-header">

                        <!-- Collapsed Hamburger -->
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                            <span class="sr-only">Toggle Navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <!-- Branding Image -->
                        <!--
                <a class="navbar-brand" href="{{ url('/') }}">
                    Laravel
                </a>
-->
                    </div>

                    <div class="collapse navbar-collapse" id="app-navbar-collapse">
                        <!-- Left Side Of Navbar -->
                        <ul class="nav navbar-nav col-lg-4">
                            <li><a href="{{ url('/') }}"><i class="fa fa-home" aria-hidden="true"></i> Accueil</a></li>
                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="nav navbar-nav navbar-right">
                            <!-- Authentication Links -->
                            @if (Auth::guest())
                            <li class="col-lg-5"><a href="{{ url('/login') }}">Connexion</a></li>
                            <li class="col-lg-3"><a href="{{ url('/register') }}">Inscription</a></li>
                            @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="../compte"><i class="fa fa-user-circle">&nbsp;</i>Mon compte</a></li>
                                    <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Déconnexion</a></li>


                                </ul>
                            </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </div>


        @yield('content')
        <footer>
            Mazzika | Tous droits réservés.
        </footer>


        <!-- JavaScripts -->
        
        {{--
        <script src="{{ elixir('js/app.js') }}"></script> --}}

        <script type="text/javascript">
            var disque = document.getElementById("disque");
            var pochette = document.getElementById("pochette");
            var positionGauche = disque.offsetLeft;
            var bool = true;
            var antibug = true;

            pochette.onmouseover = function () {
                if (bool === true && antibug === true) {
                    var move = setInterval(sortiedisque, 50);
                    antibug = false;

                    function sortiedisque() {
                        positionGauche += 5;
                        disque.style.left = positionGauche + 'px';
                        bool = false;

                        if (positionGauche === 110) {
                            clearInterval(move);
                            antibug = true;
                        }
                    }
                }
            }

            pochette.onmouseout = function () {
                if (bool === false && antibug === true) {
                    var move2 = setInterval(rentrerdisque, 50);
                    antibug = false;

                    function rentrerdisque() {
                        positionGauche -= 5;
                        disque.style.left = positionGauche + 'px';
                        bool = true;

                        if (positionGauche === 0) {
                            clearInterval(move2);
                            antibug = true;
                        }
                    }
                }
            }
        </script>

</body>

</html>