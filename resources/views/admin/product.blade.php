@extends('layouts.adminmaster')

@section('title', 'Halaman Admin')

@section('content')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Input Product</h1>
  </div>
  <div class="card hoverable">
    <div class="card-body">
      <form>
        <div class="form-group">
          <label for="nama">Name</label>
          <input type="text" class="form-control" id="nama" placeholder="Name">
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Email address</label>
          <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" class="form-control" id="password" placeholder="Password">
        </div>
        <button type="submit hoverable" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>

</main>
