<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel Quickstart - Basic</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

  <!-- Fonts -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

  <!-- Styles -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
  {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

  <style>
    @import url(https://fonts.googleapis.com/css?family=Raleway:300,400,600);

    body {
      margin: 0;
      font-weight: 400;
      line-height: 1.6;
      color: #212529;
      text-align: left;
      background-color: #f6f8ff;
    }

    .fa-btn {
      margin-right: 6px;
    }

    .navbar-laravel {
      box-shadow: 0 5px 8px rgba(0, 0, 0, .08);
    }

    .nav-item {
      padding-left: 40px;
    }

    .navbar-brand,
    .nav-link,
    .my-form,
    .login-form {
      font-family: Raleway, sans-serif;
    }

    .my-form {
      padding-top: 1.5rem;
      padding-bottom: 1.5rem;
    }

    .my-form .row {
      margin-left: 0;
      margin-right: 0;
    }

    .login-form {
      padding-top: 1.5rem;
      padding-bottom: 1.5rem;
    }

    .login-form .row {
      margin-left: 0;
      margin-right: 0;
    }
  </style>

</head>

<body id="app-layout">
  <nav class="navbar navbar-expand-lg navbar-light navbar-laravel">
    <div class="container">
      <a class="navbar-brand" href="{{ url('/') }}">
        Task List
      </a>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          @guest
          <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">Register</a>
          </li>
          @else
          <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}">Logout</a>
          </li>
          @endguest
        </ul>

      </div>
    </div>
  </nav>

  @yield('content')

  <!-- JavaScripts -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>

</html>