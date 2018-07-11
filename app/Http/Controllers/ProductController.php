<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Requests;
use App\Product;
use App\Jobs\ProductUpdate;
use App\Jobs\ProductCreate;

class ProductController extends Controller
{

    public function index()
    {
      $product_shirt = Product::where('category','Shirt')->get();
      $product_t = Product::where('category','T-Shirt')->get();

      return view('admin/product', compact('product_shirt', 'product_t'));
    }

    public function create()
    {
      return view('admin/createProduct');
    }

    public function store(Request $request)
    {
      //validasi
      $this->validate($request, [
      'name'          => 'required',
      'category'      => 'required',
      'price'         => 'required',
      'stock'         => 'required',
      'product_image' => 'required|mimes:jpeg,jpg|max:10000'
      ]);

      //nyimpen gambar di storage
      $fileName = $request->name . '.jpg';
      $request->file('product_image')->storeAs('public/product', $fileName);

      //nyimpen data di database
      $product = new Product;
      $product->name          = $request->name;
      $product->category      = $request->category;
      $product->price         = $request->price;
      $product->product_image = $fileName;
      $product->stock         = $request->stock;
      $product->save();

      return redirect('admin/product');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $product = Product::find($id);

      if (!$product)
      {
        abort(404);
      }

      return view('admin/product/single', ['product' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $product = Product::find($id);

      if (!$product)
      {
        abort(404);
      }

      return view('admin/product/edit', ['product' => $product]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $product                = Product::find($id);
      $product->name          = $request->name;
      $product->category      = $request->category;
      $product->price         = $request->price;
      $product->product_image = $fileName;
      $product->save();

      return redirect('admin/product' . $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $product = Product::find($id);
      $product->delete();

      return redirect('admin/product');
    }

    public function findAction(Request $request)
    {
      if ($request->has('create')) {
        // (FUNCTION CREATE)
        //validasi
        $this->validate($request, [
        'name'          => 'required',
        'category'      => 'required',
        'price'         => 'required',
        'stock'         => 'required',
        'product_image' => 'required|mimes:jpeg,jpg|max:10000'
        ]);

        //nyimpen gambar di storage
        $fileName = $request->name . '.jpg';
        $request->file('product_image')->storeAs('public/product', $fileName);

        //nyimpen data di database
        $product = new Product;
        $product->name          = $request->name;
        $product->category      = $request->category;
        $product->price         = $request->price;
        $product->product_image = $fileName;
        $product->stock         = $request->stock;
        $product->save();

        return redirect('admin/product');
        // return $this->dispatch(new ProductCreate($request));  (PAKE JOB)
        // ProductCreate::dispatch($request->all());             (PAKE JOB)
      }
      else if ($request->has('update')) {
        return ProductUpdate::dispatch($request);
      }
      return ('no action found');
    }
}
