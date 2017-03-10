<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset=UTF-8>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <title> @yield('title')</title>
   
    <!-- CSS + Font -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link href="{{asset('style.css')}}" type="text/css" rel="stylesheet" media="screen,projection"/>
  
    <!-- Custom CSS -->
    @yield('custom_css')    
</head>

<body>
   @yield('content')

  <footer>
   ...
  </footer>

  <!--  Scripts-->
  <script src="{{asset('js/jquery.js')}}"></script>
  ...

  @yield('scripts')   
</body>
</html>