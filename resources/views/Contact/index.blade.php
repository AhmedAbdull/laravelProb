<h2>C</h2>

<form action="/contact" method="POST">
	@csrf
	<table>

	<tr>
	<td><label>Your name</label></td>
	<td><input type="text" name="client_name"></td>
	</tr>

	<tr>
	<td><label>Your email</label></td>
	<td><input type="text" name="client_email"></td>
	</tr>

	<tr>
	<td><label>Your subject</label></td>
	<td><input type="text" name="client_subject"></td>
	</tr>

	<tr>
	<td><label>Your subject</label></td>
	<td><textarea name="client_comment" rows="6" cols="30"> </textarea></td>
	</tr>

	<tr>
	<td><button>Submit</button></td>
	</tr>

</table>
</form>

@if($errors->any())
<h4>{{$errors->first()}}</h4>
@endif

@foreach($contacts as $key=>$contact)
	<p>{{ $contact->client_name }}</p> <br>
@endforeach

@foreach($shops as $key=>$shop)
	<p>{{ $shop->product_name }}</p> <br>
@endforeach


	@foreach($words as $key=>$word)
{{ $word->product_name }}
@endforeach

