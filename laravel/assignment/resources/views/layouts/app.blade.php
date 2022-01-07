<!DOCTYPE html>
<html lang="en">

<head>
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>Assignment 1</title>

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('css/layout.css') }}" rel="stylesheet">
  <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">

</head>

<body>
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">Student List</a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link {{ request()->routeIs('students.create') ? 'd-lg-none' : 'active' }}" href="{{ route('students.create') }}">
                Create Student
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>

  @yield('content')
</body>

</html>