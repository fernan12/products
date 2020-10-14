<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    
    public function index()
    {

    	$products=Product::all();
    	return view('products.index',compact('products'));
    }


    public function show(Product $product)
    {
    	return view('products.show',compact('product'));
    }

    public function create()

   {
       return view('products.create');
   }

   public function store()

   {
    $validated_fields = request()->validate([
      'title' => 'required|unique:products',
      'description'=>'required|unique:products'

    ]);



    $product = new Product;
    $product->title = request()->title;
    $product->description = request()->description;
    $product->save();

    return redirect('/');
   }

   public function edit( Product $product)
   {
    return view('products.edit',compact('product'));

   }

    public function update( Product $product)
    {
      $validated_fields = request()->validate([
      'title' => 'required|unique:products',
      'description'=>'required|unique:products'

    ]);



      $product->title = request()->title;
      $product->description = request()->description;
      $product->save();
      return redirect('/products/'.$product->id);
    }

    public function destroy( Product $product)
    {
      
      $product->delete();
      return redirect('/');
    }
}
