<div class="col-lg-3" >
         
          <div class="list-group">
            @foreach($categories as $key => $category)
            <a href="{{ asset('shop/category/'.$category->code) }}" class="list-group-item">{{$category->code}}</a>
            @endforeach
        
          </div>

        </div>