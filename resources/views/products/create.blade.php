@extends('layouts.master')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<h5>Create Products</h5>

    <form action="/products" method='POST'>
      @include('layouts.errors')
      @csrf
      <div class="row">
        <div class="input-field col s6">
          <input placeholder="Title" id="title" type="text" name="title">
          <label for="title">Title</label>
        </div>
    </div>

      <div class="row">
        <div class="input-field col s12">
          <input placeholder="Description" id="description" type="text" name="description">
          <label for="description">Description</label>
        </div>
      </div>


      <div class="row">
        <div class="col s12">
         <button class="btn waves-effect waves-light" type="submit" name="action">Submit
         	<i class="material-icons right">send</i>
         </button>
        </div>	
		</div>
	</form>
</div>
</div>
</div>

@endsection