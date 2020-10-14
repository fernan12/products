<html>
<form action="/login"method="POST">
	@include('layouts.errors')

	@csrf
	<input type="email" name="email" required placeholder ="Email Address">
	<input type="password" name="password" required placeholder ="Password">
	<button type="submit">Submit</button>
	
</form>
</html>