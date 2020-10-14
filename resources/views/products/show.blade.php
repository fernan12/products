@extends('layouts.master')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<h5>{{ $product->title }}</h5>
			<a href="/products/{{ $product->id}}/edit">Edit</a>
			<form action="/products/{{$product->id}}" method='POST'>
				@csrf
				@method('DELETE')
				<button class="btn" type='submit'>Delete</button>


			</form>

			<p>{{ $product->description }}</p>
			
		</div>

	</div>

</div>

@endsection