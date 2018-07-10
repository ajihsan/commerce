<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Requests;
use App\User;

class UserController extends Controller
{

  public function index()
  {
    $user = User::all();

    return view('/admin/user', ['user' => $user]);
  }

}
