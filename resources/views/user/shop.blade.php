@extends('layouts.master')

@section('title', 'Commerce Catalog')

@section('content')
<!-- NEWS --><br><br>
<div class="container">
    <div class="row">
        <!-- Sidebar -->
        <div class="col-sm-3">
            <h3>All</h3><br>
            <form class="form-inline" action="/action_page.php">
                <input class="form-control mr-sm-2" type="text" placeholder="Search">
            </form>
            <!-- Category -->
            <br><h3>Category</h3>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Jacket</label>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Shirt</label>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">T-Shirt</label>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Pants</label>
            </div>
            <!-- Color -->
            <br><h3>Color</h3>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Red</label>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Blue</label>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Yellow</label>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Green</label>
            </div><br>
            <!-- Range -->
            <form>
                <div class="form-group">
                    <label for="formControlRange"><h3>Price Range</h3></label>
                    <input type="range" class="form-control-range" id="formControlRange">
                </div>
            </form>
            <!-- Submit -->
            <input class="btn btn-outline-secondary btn-lg" type="submit" value="Submit">
        </div>

        <!-- Content -->
        <div class="col-sm-9">
            <div class="row">
              <!-- Isi Content -->
              @foreach ($product as $products)
                <div class="col-sm-3">
                    <!-- <div class="card" style="width:100%"> -->
                        <img class="card-img-top" src="{{asset('storage/product/' . $products->product_image)}}" alt="Card image">
                        <p>{{$products->name}}</p>
                        <p>{{$products->price}}</p>
                    <!-- </div> -->
                </div>
              @endforeach

            </div>
        </div>
    </div>
</div>
@endsection