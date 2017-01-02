<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ elixir('css/app.css')}}">

  </head>
  <body>
<!-- Added the Login reg links -->


<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @if (Auth::check())
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ url('/login') }}">Login</a>
                <a href="{{ url('/register') }}">Register</a>
            @endif
        </div>
    @endif


    </div>


<!-- Login reg links end -->
  <div class="container">
        @yield('content')
  </div>

  </body>
</html>
