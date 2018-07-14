<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap CSS -->
    <!-- <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/> -->
    <link rel="icon" href="../../../../favicon.ico">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link type="text/css" rel="stylesheet" href="/css/custom.css"  media="screen,projection"/>

    <title>@yield('title')</title>

  </head>
  <body>

    @yield('jumbotron')

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top shadow  ">
      <a class="navbar-brand"href="/"><img class=""src="{{URL::asset('/images/logo_erigo.png')}}" class="" style=" height:30px;"></a>
      <!-- <a class="navbar-brand" href="#">Navbar</a> -->
      <!-- <a class="navbar-brand" href="#">
        <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        Commerce
      </a> -->
      <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Product
            </a>
            <div class="dropdown-content bg-dark" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="/shop">Shop</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>

              <!-- <button class="dropdown-item dropbtn">Dropdown
                <i class="fa fa-caret-down"></i>
              </button> -->
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Solutions
            </a>
            <div class="dropdown-content bg-dark" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Partners
            </a>
            <div class="dropdown-content bg-dark" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Comunity
            </a>
            <div class="dropdown-content bg-dark" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>
          {{-- <li class="nav-item">
            <a class="nav-link align-middle btn-primary text-white mr-2" style="border-radius: 0.5rem;" href="{{ route('login') }}">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link align-middle btn-primary text-white" style="border-radius: 0.5rem;" href="{{ route('register') }}">Register</a>
          </li> --}}





        </ul>

      </div>
      <div class="btn-group dropleft">
        @guest
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link align-middle btn-primary text-white mr-2" style="border-radius: 0.5rem;" href="{{ route('login') }}">{{ __('Login') }}</a>
          </li>
          <li class="nav-item">
            <a class="nav-link align-middle btn-primary text-white" style="border-radius: 0.5rem;" href="{{ route('register') }}">{{ __('Register') }}</a>
          </li>
        <!-- <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropleft
        </button> -->
        @else
        <button class="nav-link btn btn-link" type="button" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <img src="{{URL::asset('/images/a.jpg')}}" class="rounded-circle hoverable" style="height: 30px; width:30px;">
        </button>
        <div class="dropdown-menu">
          <h1 class="dropdown-header mb-0 pb-0">{{ Auth::user()->name }}</h1>
          <p class="dropdown-header mt-0 pt-0">
            {{ Auth::user()->email }}
          </p>
          <a class="dropdown-item text-dark" href="#">Profile</a>
          <a class="dropdown-item text-dark" href="#">Cart</a>
          <div class="dropdown-divider"></div>
          <div class="center">
            <button type="submit" class="btn btn-primary btn-sm " href="{{ route('logout') }}" onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();" placeholder="Logout" style="width: 80%;">{{ __('Logout') }}
            </button>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
          </div>
        </div>
        @endguest
      </div>


    </nav>


    @yield('content')


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="login" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header bg-light">
            <h5 class="modal-title text-center" id="login">Login User</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="card hoverable">
              <div class="card-body">
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="name">Name</span>
                    </div>
                    <input type="text" class="form-control" placeholder="Name" aria-label="Name" aria-describedby="name">
                  </div>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="password">Password</span>
                      </div>
                      <input type="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="password">
                    </div>
              </div>
            </div>
          </div>
          <div class="modal-footer bg-light">
            <button type="button" class="btn btn-primary">Login</button>
          </div>
        </div>
      </div>
    </div>
    <footer class="footer">
      <div class="text-center">
        <span class="text-muted">Content Footer.</span>
      </div>
    </footer>

    <script type="text/javascript" src="js/custom.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>
    <script>
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
    });
    </script>
  </body>
</html>
