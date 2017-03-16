<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset=UTF-8>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <title> @yield('title')</title>
   
    <!-- CSS + Font -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  
    <!-- Custom CSS -->
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    @yield('custom_css')  
    <link href="https://fonts.googleapis.com/css?family=Diplomata+SC" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu+Condensed" rel="stylesheet">
    
      <link href="{{asset('style.css')}}" type="text/css" rel="stylesheet" media="screen,projection"/>
  
    
     <style type="text/css">

        #bloc{
          position: relative;
          top:16px;
          left:16px;
        }

        #pochette{
          position:absolute;
          width:150px;
          height: 150px;
/* background-image:url(../../public/img/logopart1.png);*/
          z-index:6;
          top:0px;
        }

        #disque{
          position: absolute;
          width:148px;
          height: 148px;
/* background-image:url(../../public/img/logopart2.png);*/
          background-repeat: no-repeat;
          left:0px;
          z-index: 5;
          top:0px;
          border-radius: 50%;
        }

        #disque:hover{
          transform: rotate(7200deg);
          transition-duration: 20s;
        }

        #texte{
          position:absolute;
          width: 150px;
          text-align: center;
          color:white;
          text-shadow: 2px 2px 2px black;
          font-size: 15px;
        }

      </style>
  
</head>

<body>
  <div id="entete"><p class="droite"><a href="inscription">Inscription</a> | <a href="#">Connexion</a></p></div>
    <header class="container">
        <div class="row">
           
            <section class="col-lg-3 col-md-6 col-sm-12" id="bloc">
               
                <div id="pochette" style="left:0;">
                    <img src="{{asset('img/logopart1.png')}}" alt="">
                </div>
                
                <div id="disque" style="left:0px;">
                    <img src="{{asset('img/logopart2.png')}}" alt="">
                </div>
            </section>
            
            <section class="col-lg-9 col-md-6 hidden-sm hidden-xs" id="boiteSlogan">
                <p id="slogan"> « Everything we do is music.  »</p>
                <p id="john">John Cage</p>
            </section>
    </div> 

    <script type="text/javascript">

        var disque = document.getElementById("disque");
        var pochette = document.getElementById("pochette");
        var positionGauche = disque.offsetLeft;
        var bool = true;
        var antibug = true;

        pochette.onmouseover=function()
        {
            if(bool===true && antibug === true)
            {
                var move = setInterval(sortiedisque,50);
                antibug = false;
                
                function sortiedisque()
                {
                    positionGauche += 5;
                    disque.style.left =  positionGauche +'px';
                    bool=false;

                    if(positionGauche===110)
                    {
                        clearInterval(move);
                        antibug = true;
                    }
                }
            }
        }
            
        pochette.onmouseout=function()
        {
            if(bool===false && antibug === true)
                {
                    var move2 = setInterval(rentrerdisque,50);
                    antibug = false;
                    
                    function rentrerdisque()
                    {
                        positionGauche -= 5;
                        disque.style.left =  positionGauche +'px';
                        bool=true;

                        if(positionGauche===0)
                            {
                                clearInterval(move2);
                                antibug = true;
                            }
                    }
                    }
        }
    </script>

    </header>


    <div class="container k">
        <div class="row">  
           @yield('content')
        </div>
    </div> 
    
    <footer>
Mazzika | Tous droits réservés. 
    </footer>

  <!--  Scripts-->
  <script src="{{asset('js/jquery.js')}}"></script>
  ...

  @yield('scripts')   
</body>
</html>