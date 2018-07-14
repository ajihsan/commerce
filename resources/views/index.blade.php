@extends('layouts.master')

@section('title', 'Commerce Website')


@section('jumbotron')
<div class="jumbotron jumbotron-fluid text-center bg-dark" style="margin-bottom:0">
  <div class="container">
    <div class="d-flex flex-row-reverse">

      {{-- tempat buat login --}}
      <!-- Right Side Of Navbar -->
      {{-- <ul class="navbar-nav ml-auto">
          <!-- Authentication Links -->
          @guest

              <li class="nav-item">
                  <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
              </li>
          @else
              <li class="nav-item dropdown">
                  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                      {{ Auth::user()->name }} <span class="caret"></span>
                  </a>

                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="{{ route('logout') }}"
                         onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                          {{ __('Logout') }}
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                      </form>
                  </div>
              </li>
          @endguest

      </ul> --}}




    </div>

    <a href="/"><img class="img-fluid"src="{{URL::asset('/images/logo_erigo.png')}}" class="mx-auto d-block"></a>

    <!-- <h1 class="text-white">My First Bootstrap 4 Page</h1> -->
    <!-- <p class="text-white">Resize this responsive page to see the effect!</p> -->
  </div>

</div>
@section('content')
<!-- CARAOUSEL -->
    <div id="demo" class="carousel slide" data-ride="carousel">

      <!-- Indicators -->
      <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
        <li data-target="#demo" data-slide-to="2"></li>
      </ul>

      <!-- The slideshow -->
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="center-cropped" src="{{URL::asset('/images/a.jpg')}}" alt="Los Angeles">
        </div>
        <div class="carousel-item">
          <img class="center-cropped" src="{{URL::asset('/images/b.jpg')}}" alt="Chicago">
        </div>
        <div class="carousel-item">
          <img class="center-cropped" src="{{URL::asset('/images/c.jpg')}}" alt="New York">
        </div>
      </div>

      <!-- Left and right controls -->
      <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </a>
      <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
      </a>

    </div>




<!-- NEWS --><br><br>
    <div class="container">
      <h1 class="display-4 text-center border-bottom">News</h1>
      <div class="row">
        <div class="col-sm-4">
          <div class="card" style="width:100%">
            <img class="card-img-top" src="{{URL::asset('/images/a.jpg')}}" alt="Card image">
            <div class="card-img-overlay row align-items-center">
              <a href="#" class="col-sm-6 offset-sm-3 shadow btn btn-primary">New Arrivals</a>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card" style="width:100%">
            <img class="card-img-top" src="{{URL::asset('/images/b.jpg')}}" alt="Card image">
            <div class="card-img-overlay row align-items-center">
              <a href="#" class="col-sm-6 offset-sm-3 shadow btn btn-primary">How To Order</a>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card" style="width:100%">
            <img class="card-img-top" src="{{URL::asset('/images/c.jpg')}}" alt="Card image">
            <div class="card-img-overlay row align-items-center">
              <a href="#" class="col-sm-6 offset-sm-3 btn btn-primary">New Arrivals</a>
            </div>
          </div>
        </div>
      </div>
    </div>


<!-- VIDEO --><br><br>
    <div class="container">
      <h1 class="display-4 text-center border-bottom col-sm-6 offset-sm-3">Our Video</h1>
      <div class="row">
        <div class="text-right col-sm-5 border-right">
          <iframe width="100%" height="480" src="https://www.youtube.com/embed/oC-GflRB0y4?list=RDQMMlX2kN-hZWc" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>
        <div class="col-sm-6">
          <h2 class="border-bottom">David Guetta</h2>
          <p class="lead">Kumahasia anjir aing teh naon teunananaon an but u cant afuck with me as fuck ass kind tumblr laptop calendar water </p>
        </div>
      </div>
    </div>


<!-- STAFF PICK --><br><br>

    <div class="container">
      <h1 class="display-4 text-center border-bottom col-sm-6 offset-sm-3">Staff Picks</h1>
      <div class="card-columns">
        <div class="card">
          <img class="card-img-top waves-effect waves-light" src="{{URL::asset('/images/a.jpg')}}" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Card title that wraps to a new line</h5>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          </div>
        </div>
        <div class="card p-3">
          <blockquote class="blockquote mb-0 card-body">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
            <footer class="blockquote-footer">
              <small class="text-muted">
                Someone famous in <cite title="Source Title">Source Title</cite>
              </small>
            </footer>
          </blockquote>
        </div>
        <div class="card">
          <img class="card-img-top waves-effect waves-block waves-light" src="{{URL::asset('/images/b.jpg')}}" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="{{URL::asset('/images/a.jpg')}}" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
        <div class="card bg-primary text-white text-center p-3">
          <blockquote class="blockquote mb-0">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat.</p>
            <footer class="blockquote-footer">
              <small>
                Someone famous in <cite title="Source Title">Source Title</cite>
              </small>
            </footer>
          </blockquote>
        </div>
        <div class="card text-center">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
        <div class="card">
          <img class="card-img" src="{{URL::asset('/images/c.jpg')}}" alt="Card image">
        </div>
        <div class="card p-3 text-right">
          <blockquote class="blockquote mb-0">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
            <footer class="blockquote-footer">
              <small class="text-muted">
                Someone famous in <cite title="Source Title">Source Title</cite>
              </small>
            </footer>
          </blockquote>
        </div>
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
      </div>
    </div>
    @endsection
