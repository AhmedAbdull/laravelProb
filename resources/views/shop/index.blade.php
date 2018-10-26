<h2>Shop</h2>

<form action="/shop" method="POST">
	@csrf
	<label>Product name</label>
	<input type="text" name="product_name">
	<button>Submit</button>
</form>

@if($errors->any())
<h4>{{$errors->first()}}</h4>
@endif