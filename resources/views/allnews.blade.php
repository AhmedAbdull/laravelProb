@extends('news')
@section('carousel')
@endsection
@section('categories')
@endsection
<br><br>
@foreach($allnews as $key=>$word)
@endforeach
<h1 style="text-align: center;">#{{$word->category}}</h1>
@foreach($allnews as $key=>$word)
	
<div class="card">
  <h5 class="card-header">{{ $word->code }}</h5>
  <div class="card-body">
    <h5 class="card-title">{{ $word->header }}</h5>
    <p class="card-text">{!! $word->text !!}</p>
     <p class="card-text">Reading times: {!! $word->counter !!}</p>
  </div>
</div>
</div>

@endforeach
