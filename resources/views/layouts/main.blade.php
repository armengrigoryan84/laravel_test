<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    <div class='container'>
        <nav class="navbar navbar-default">
          <div class="container-fluid">
            <ul class="nav navbar-nav">
              @if(auth()->check())
              <li class="active"><a class="navbar-brand" href="{{url('auth/logout')}}">Logout</a></li>
              @else
              <li class="active"><a class="navbar-brand" href="{{url('auth/login')}}">Login</a></li>
              <li class="active"><a class="navbar-brand" href="{{url('auth/registration')}}">Signup</a></li>
              @endif
              <li class="active"><a class="navbar-brand" href="{{url('account')}}">Account</a></li>
            </ul>
          </div>
        </nav>
        
        @yield('content')
    </div>    


</body>
</html>