{{$nav_user = 'active'}}

@extends('layouts.adminmaster')

@section('title', 'Halaman Admin')

@section('content')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Input User</h1>
  </div>

  <div class="card hoverable mb-5">
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


  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">User Data</h1>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-primary my-2 my-sm-0" type="submit">
      <span data-feather="search"></span></button>
    </form>
  </div>
  <div class="card hoverable">
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-hover table-sm">
          <thead class="thead-dark">
            <tr>
              <th>ID</th>
              <th>Nama</th>
              <th>Email</th>
              <th>Password</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
            @foreach ($user as $users)
              @continue ($users->role == 2)

              <td>{{$users->id}}</td>
              <td>{{$users->name}}</td>
              <td>{{$users->email}}</td>
              <td>{{$users->password}}</td>
              <td class="bg-light border-left">
                <button type="button" class="btn btn-primary btn-sm bg-dark" data-toggle="modal" data-target="#edit">
                  <span data-feather="edit"></span>
                </button>
                <button type="button" class="btn btn-primary btn-sm bg-danger">
                  <span data-feather="trash"></span>
                </button>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <!-- modal content -->
  <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header bg-light">
          <h5 class="modal-title" id="edit">Edit User</h5>
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
                    <span class="input-group-text" id="email">Email</span>
                  </div>
                  <input type="email" class="form-control" placeholder="email@example.com" aria-label="email" aria-describedby="email">
                </div>
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="password">Password</span>
                    </div>
                    <input type="text" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="password">
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





@endsection
