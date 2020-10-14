@extends('layouts.master')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <h5>Welcome {{ auth()->user()->name}}</h5>
      <a href="/products/create">Create Product</a>
      <ol>
        @foreach($products as $product)
        <li>
          <a href="/products/{{ $product->id }}">{{$product->title}}</a>

          </li>
        @endforeach
      </ol>
    </div>

  </div>

</div>

@endsection
