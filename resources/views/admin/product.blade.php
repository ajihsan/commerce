  {{$nav_product = 'active'}}

@extends('layouts.adminmaster')

@section('title', 'Halaman Admin')

@section('content')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Input Product</h1>
  </div>
  <div class="card hoverable mb-5">
    <div class="card-body">
      <form action="/admin/product" method="post" enctype="multipart/form-data">
        <div class="form-group">
          <label for="file">Upload Photo</label>
          @if ($errors->has('product_image'))
          <div class="alert alert-warning">
              {{$errors->first('product_image')}}
          </div>
          @endif
          <div class="input-group mb-1">
            <div class="custom-file">
              <input type="file" class="custom-file-input" name="product_image" id="inputGroupFile01">
              <label class="custom-file-label" for="inputGroupFile01"></label>
            </div>
          </div>
        </div>

        <div class="form-group">
          <label for="nama">Name</label>
          @if ($errors->has('name'))
          <div class="alert alert-warning">
            {{$errors->first('name')}}
          </div>
          @endif
          <input type="text" class="form-control" name="name" id="nama" placeholder="Name">
        </div>

        <div class="form-group">
          <label for="category">Category:</label>
          @if ($errors->has('category'))
          <div class="alert alert-warning">
            {{$errors->first('category')}}
          </div>
          @endif
          <select class="form-control" name="category" id="category">
            <option>Shirt</option>
            <option>T-Shirt</option>
            <option>Panties</option>
            <option>Lingerie</option>
          </select>
        </div>

        <div class="form-group">
          <label for="price">Price</label>
          @if ($errors->has('price'))
          <div class="alert alert-warning">
            {{$errors->first('price')}}
          </div>
          @endif
          <div class="input-group mb-1">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">IDR</span>
            </div>
            <input type="number" class="form-control" placeholder="" name="price" aria-label="number" aria-describedby="basic-addon1">
          </div>
        </div>

        <div class="form-group">
          <label for="stock">Stock</label>
          @if ($errors->has('stock'))
          <div class="alert alert-warning">
            {{$errors->first('stock')}}
          </div>
          @endif
          <input type="number" class="form-control" name="stock" id="stock" placeholder="">
        </div>

        <input type="submit" name="create" class="btn btn-primary btn-lg btn-block" placeholder="Submit">
        {{ csrf_field() }}
      </form>
    </div>
  </div>

  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Data Product</h1>
  </div>



    <div class="card text-center mb-4">
      <div class="card-header">
        Shirt
      </div>
      @foreach ($product_shirt as $product)
      <div class="card-body">
        <div class="row">
          <div class="col-sm-3">
            <div class="card">
              <img class="card-img-top" src="{{URL::asset('storage/product/'.$product->product_image)}}" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">{{$product->name}}</h5>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">Price: {{$product->price}}</li>
                <li class="list-group-item">Stock: {{$product->stock}}</li>
              </ul>
              <div class="card-body">
                <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#edit" data-name="{{$product->name}}" data-price="{{$product->price}}" data-stock="{{$product->stock}}">Edit</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach
      <div class="card-footer text-muted">
        Last updated: 2 days ago
      </div>
    </div>


    <div class="card text-center mb-4">
      <div class="card-header">
        T-Shirt
      </div>
      @foreach ($product_t as $product)
      <div class="card-body">
        <div class="row">
          <div class="col-sm-3">
            <div class="card hoverable">
              <img class="card-img-top" src="{{URL::asset('storage/product/'.$product->product_image)}}" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">{{$product->name}}</h5>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">Price: {{$product->price}}</li>
                <li class="list-group-item">Stock: {{$product->stock}}</li>
              </ul>
              <div class="card-body">
                <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#edit" data-name="{{$product->name}}" data-price="{{$product->price}}" data-stock="{{$product->stock}}">Edit</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach
      <div class="card-footer text-muted">
        Last updated: 2 days ago
      </div>
    </div>

    <!-- modal content -->
    <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header bg-light">
            <h5 class="modal-title" id="editLabel">Edit Product</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="card hoverable">
              <div class="card-body">
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" for="edit-name">Product Name</span>
                    </div>
                    <input type="text" class="form-control" placeholder="" aria-label="Name" aria-describedby="name" id="edit-name">
                  </div>
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" for="edit-price">IDR</span>
                    </div>
                    <input type="number" class="form-control" placeholder="" aria-label="price" aria-describedby="price" id="edit-price">
                  </div>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text" for="edit-stock">Stock</span>
                      </div>
                      <input type="text" class="form-control" placeholder="" aria-label="stock" aria-describedby="stock" id="edit-stock">
                    </div>
              </div>
            </div>
          </div>
          <div class="modal-footer bg-light">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>
</main>

{{-- <script type="text/javascript" src="js/app.js"></script>
<script type="text/javascript">
      $('#edit').on('click','show.bs.modal', function (event) {
      var button = $(event.relatedTarget); // Button that triggered the modal
      var name = button.data('name'); // Extract info from data-* attributes
      var price = button.data('price');
      var stock = button.data('stock');

      var modal = $(this);
      modal.find('.modal-title').text('Product ' + name);
      $("#edit #edit-name").val(name);
      });
</script> --}}
