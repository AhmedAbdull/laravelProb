<h2>Page</h2>

<form action="/pageMe" method="POST">
	@csrf
	<label>Product name</label>
	<input type="text" name="ahmed">
	<button>Submit</button>
</form>

@if($errors->any())
<h4>{{$errors->first()}}</h4>
@endif