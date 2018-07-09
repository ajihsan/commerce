@extends('layouts.adminmaster')

@section('title', 'Halaman Admin')

@section('content')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Input Product</h1>
  </div>
  <div class="card hoverable mb-5">
    <div class="card-body">
      <form>
        <div class="form-group">
          <label for="file">Upload Photo</label>
          <div class="input-group mb-1">
            <div class="custom-file">
              <input type="file" class="custom-file-input" id="inputGroupFile01">
              <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
            </div>
          </div>
        </div>
        <div class="form-group">
          <label for="nama">Name</label>
          <input type="text" class="form-control" id="nama" placeholder="Name">
        </div>
        <div class="form-group">
          <label for="category">Category:</label>
          <select class="form-control" id="category">
            <option>Shirt</option>
            <option>T-Shrit</option>
            <option>Panties</option>
            <option>Lingerie</option>
          </select>
        </div>
        <div class="form-group">
          <label for="price">Price</label>
          <div class="input-group mb-1">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">IDR</span>
            </div>
            <input type="number" class="form-control" placeholder="" aria-label="number" aria-describedby="basic-addon1">
          </div>
        </div>
        <button type="submit hoverable" class="btn btn-primary btn-lg btn-block">Submit</button>
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
      <div class="card-body">
        <div class="row">
          <div class="col-sm-3">
            <div class="card">
              <img class="card-img-top" src="{{URL::asset('/images/a.jpg')}}" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Resolve New Year Edition</h5>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">Price: 125.000</li>
                <li class="list-group-item">Stock: 5</li>
              </ul>
              <div class="card-body">
                <a href="#" class="btn btn-primary btn-block" data-toggle="modal" data-target="#edit">Edit</a>
              </div>
            </div>
          </div>

        </div>

        <!-- <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a> -->
      </div>
      <div class="card-footer text-muted">
        Last updated: 2 days ago
      </div>
    </div>


    <div class="card text-center mb-4">
      <div class="card-header">
        T-Shirt
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-sm-3">
            <div class="card hoverable">
              <img class="card-img-top" src="{{URL::asset('/images/b.jpg')}}" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Resolve Christmast Edition</h5>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">Price: 125.000</li>
                <li class="list-group-item">Stock: 5</li>/
              </ul>
              <div class="card-body">
                <a href="#" class="btn btn-primary btn-block" data-toggle="modal" data-target="#edit">Edit</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="card-footer text-muted">
        Last updated: 2 days ago
      </div>
    </div>

    <!-- modal content -->
    <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header bg-light">
            <h5 class="modal-title" id="edit">Edit Product</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="card hoverable">
              <div class="card-body">
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="name">Product Name</span>
                    </div>
                    <input type="text" class="form-control" placeholder="Name" aria-label="Name" aria-describedby="name">
                  </div>
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="price">IDR</span>
                    </div>
                    <input type="number" class="form-control" placeholder="" aria-label="price" aria-describedby="price">
                  </div>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="stock">Stock</span>
                      </div>
                      <input type="text" class="form-control" placeholder="" aria-label="stock" aria-describedby="stock">
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
