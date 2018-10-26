
<!doctype html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Carousel Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.1/examples/carousel/carousel.css" rel="stylesheet">
  </head>
  <body>

    <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="/news">Carousel</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="/login">Login <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/register">Register</a>
            </li>
            
          </ul>
          <form class="form-inline mt-2 mt-md-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>
    </header>

    <main role="main">
      @section('carousel')
      <div id="myCarousel" class="carousel slide" data-ride="carousel">

          
            {{$i=0}}
         
       
        
        <ol class="carousel-indicators">
           @foreach($hotnews as $key=>$hot)
          @if($i==0)
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          @elseif($i>0)
          <li data-target="#myCarousel" data-slide-to="{{$i}}"></li>
          @endif
            {{$i++}}
          @endforeach
        </ol>
        <div class="carousel-inner">
          {{$j=0}}
          @foreach($hotnews as $key=>$hot)
          @if($j==0)
          <div class="carousel-item active">
           
            <div  class="container">
              <div class="carousel-caption text-left">
                <h1>{{$hot->header}}</h1>
                <p>{{$hot->text}}</p>
                <p><a class="btn btn-lg btn-primary" href="/news/{{$hot->id}}" role="button">Learn more</a></p>
              </div>
            </div>
          </div>
          @elseif($j>0)
<div class="carousel-item ">
           
            <div  class="container">
              <div class="carousel-caption text-left">
                <h1>{{$hot->header}}</h1>
                <p>{!!$hot->text!!}</p>
               <p><a class="btn btn-lg btn-primary" href="/news/{{$hot->id}}" role="button">Learn more</a></p>
              </div>
            </div>
          </div>
          @endif
          {{$j++}}
          @endforeach
        
        </div>

        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      @show

      <!-- Marketing messaging and featurettes
      ================================================== -->
      <!-- Wrap the rest of the page in another container to center all the content. -->

      <div class="container marketing">

        <!-- Three columns of text below the carousel -->
        @section('categories')
        <div class="row">
          @foreach($articles as $key=>$article)
          <div class="col-lg-4">
            <img class="rounded-circle" src="{{$article->img}}" alt="Generic placeholder image" width="140" height="140">
            <h2>{{$article->header}}</h2>

            <p>{!!$article->text!!} <br> <a " href="/news/{{$article->category}}" >#{{$article->category}}</a></p>
           
            <p><a class="btn btn-secondary" href="/news/{{$article->id}}" role="button">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          @endforeach
        </div><!-- /.row -->
        @show

        <!-- START THE FEATURETTES -->

     
    </main>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../../assets/js/vendor/holder.min.js"></script>
  </body>
</html>
