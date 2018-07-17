@extends('layouts.master')

@section('title', 'Commerce Website')

@section('content')
<div class="container">
  <h1 class=" mt-5 border-bottom mb-4 center">Product Overview</h1>
  <div class="row">
    <div class="col-sm-8">
      <div id="demo" class="carousel slide mb-4" data-ride="carousel">
        <ul class="carousel-indicators">
          <li data-target="#demo" data-slide-to="0" class="active"></li>
          <li data-target="#demo" data-slide-to="1"></li>
          <li data-target="#demo" data-slide-to="2"></li>
        </ul>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="rounded center-cropped" src="{{asset('storage/product/' . $product->product_image)}}" alt="Los Angeles" width="1100" height="500">
            <div class="carousel-caption">
              <h3>Los Angeles</h3>
              <p>We had such a great time in LA!</p>
            </div>
          </div>
          <div class="carousel-item">
            <img class="rounded center-cropped" src="{{URL::asset('/images/b.jpg')}}" alt="Chicago" width="1100" height="500">
            <div class="carousel-caption">
              <h3>Chicago</h3>
              <p>Thank you, Chicago!</p>
            </div>
          </div>
          <div class="carousel-item">
            <img class="rounded center-cropped" src="{{URL::asset('/images/c.jpg')}}" alt="New York" width="1100" height="500">
            <div class="carousel-caption">
              <h3>New York</h3>
              <p>We love the Big Apple!</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
          <span class="carousel-control-next-icon"></span>
        </a>
      </div>

      <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
          <a class="nav-item nav-link active" id="nav-description-tab" data-toggle="tab" href="#nav-description" role="tab" aria-controls="nav-home" aria-selected="true">Description</a>
          <a class="nav-item nav-link" id="nav-reviews-tab" data-toggle="tab" href="#nav-reviews" role="tab" aria-controls="nav-profile" aria-selected="false">Reviews</a>
          <a class="nav-item nav-link" id="nav-addiitional-tab" data-toggle="tab" href="#nav-additional" role="tab" aria-controls="nav-contact" aria-selected="false">Additional Information</a>
        </div>
      </nav>
      <div class="tab-content mt-3" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-description" role="tabpanel" aria-labelledby="nav-description-tab">
          Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit dolor anim. Velit non irure adipisicing aliqua ullamco irure incididunt irure non esse consectetur nostrud minim non minim occaecat. Amet duis do nisi duis veniam non est eiusmod tempor incididunt tempor dolor ipsum in qui sit. Exercitation mollit sit culpa nisi culpa non adipisicing reprehenderit do dolore. Duis reprehenderit occaecat anim ullamco ad duis occaecat ex.
        </div>
        <div class="tab-pane fade" id="nav-reviews" role="tabpanel" aria-labelledby="nav-reviews-tab">
          Nulla est ullamco ut irure incididunt nulla Lorem Lorem minim irure officia enim reprehenderit. Magna duis labore cillum sint adipisicing exercitation ipsum. Nostrud ut anim non exercitation velit laboris fugiat cupidatat. Commodo esse dolore fugiat sint velit ullamco magna consequat voluptate minim amet aliquip ipsum aute laboris nisi. Labore labore veniam irure irure ipsum pariatur mollit magna in cupidatat dolore magna irure esse tempor ad mollit. Dolore commodo nulla minim amet ipsum officia consectetur amet ullamco voluptate nisi commodo ea sit eu.
        </div>
        <div class="tab-pane fade" id="nav-additional" role="tabpanel" aria-labelledby="nav-additional-tab">
          Sint sit mollit irure quis est nostrud cillum consequat Lorem esse do quis dolor esse fugiat sunt do. Eu ex commodo veniam Lorem aliquip laborum occaecat qui Lorem esse mollit dolore anim cupidatat. Deserunt officia id Lorem nostrud aute id commodo elit eiusmod enim irure amet eiusmod qui reprehenderit nostrud tempor. Fugiat ipsum excepteur in aliqua non et quis aliquip ad irure in labore cillum elit enim. Consequat aliquip incididunt ipsum et minim laborum laborum laborum et cillum labore. Deserunt adipisicing cillum id nulla minim nostrud labore eiusmod et amet. Laboris consequat consequat commodo non ut non aliquip reprehenderit nulla anim occaecat. Sunt sit ullamco reprehenderit irure ea ullamco Lorem aute nostrud magna.
        </div>
      </div>
    </div>
    <div class="col-sm-4  ">
      <h2 class="ml-0">{{$product->name}}</h2>
      <h1 class="small mb-4">IDR {{number_format($product->price)}}</h1>
      <div class="row ml-1 mr-1">
        <div class="col-sm-6 border border-left-0 border-right-0 center small">
          <div class="mb-4 mt-4">
            <span class="" data-feather="star"></span>
            <p>(0 reviews)</p>
          </div>
        </div>
        <div class="col-sm-6 border border-right-0 center small">
          <div class="mb-4 mt-4">
            <span class="" data-feather="shopping-cart"></span>
            <p class="align-self-center">9 Purchases</p>
          </div>
        </div>
      </div>
      <h4>Size <small>(Required)</small></h4>
      <div class="btn-group btn-group-toggle mb-4" data-toggle="buttons">
        <label class="btn btn-secondary btn-sm">
          <input type="radio" name="options" id="option1" autocomplete="off" checked> M
        </label>
        <label class="btn btn-secondary btn-sm">
          <input type="radio" name="options" id="option2" autocomplete="off"> L
        </label>
        <label class="btn btn-secondary btn-sm">
          <input type="radio" name="options" id="option3" autocomplete="off"> XL
        </label>
      </div>
      <h4>Items <small>(Required)</small></h4>
      <input class="mb-4" type="number" id="items" name="" value="" style="width: 50px;">

      <button type="button" class="btn btn-primary btn-lg btn-block mb-4">Add to chart</button>


  </div>
</div>

@endsection
