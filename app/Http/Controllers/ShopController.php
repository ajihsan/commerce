<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Requests;
use App\Product;
use App\Shop;

class ShopController extends Controller
{

  public function index()
  {
    $product = Product::all();

    return view('user/shop', ['product' => $product]);
  }

  public function overview($id)
  {
    $product = Product::find($id);

    if (!$product)
    {
      abort(404);
    }
    return view('/user/overviewProduct', ['product' => $product]);
  }

}
