<?php

namespace App\Jobs;

use App\Product;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class ProductCreate implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $data;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($data)
    {
         $this->data = $data;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle($data)
    {
        //akses datanya
        $data = $this->data;
        //validasi
        $this->validate($data, [
        'name'          => 'required',
        'category'      => 'required',
        'price'         => 'required',
        'product_image' => 'required|mimes:jpeg,jpg|max:10000'
        ]);
        //nyimpen gambar di storage
        $fileName = $data->name . '.jpg';
        $data->file('product_image')->storeAs('public/product', $fileName);

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
}
