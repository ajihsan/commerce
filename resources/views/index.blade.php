<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!-- <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link type="text/css" rel="stylesheet" href="/css/custom.css"  media="screen,projection"/>

    <title>Hello, world!</title>

  </head>
  <body>
    <div class="jumbotron jumbotron-fluid text-center bg-dark" style="margin-bottom:0">
      <div class="container">
        <div class="d-flex flex-row-reverse">

          <form class="form-inline" action="/action_page.php">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" style="border-radius: 5rem;">
            <!-- <button class="btn btn-success" type="submit">Search</button> -->
          </form>

        </div>

        <img class="img-fluid"src="{{URL::asset('/images/logo2.png')}}" class="mx-auto d-block">
        <h1 class="text-white">My First Bootstrap 4 Page</h1>
        <!-- <p class="text-white">Resize this responsive page to see the effect!</p> -->
      </div>

    </div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top shadow-lg p-4 ">
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
              <a class="dropdown-item" href="#">Action</a>
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
          <li class="nav-item">
            <a class="nav-link" href="#">Blog</a>
          </li>

        </ul>
      </div>







      <!-- <form class="form-inline">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form> -->
    </nav>


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

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script type="text/javascript" src="js/custom.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

  </body>
</html>
