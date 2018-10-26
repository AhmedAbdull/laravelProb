
<br><br>



@foreach($allnews as $key=>$word)

<h1></h1>	
<div class="card">
  <h5 class="card-header">{{ $word->code }}</h5>
  <div class="card-body">
    <h5 class="card-title">{{ $word->header }}</h5>
    <p class="card-text">{!! $word->text !!}</p>
  </div>
</div>

@endforeach
