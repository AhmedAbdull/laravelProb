@extends('mainShop.index')
<script src="js/gmaps.js" type="text/javascript"></script>
    <script src="https://maps.googleapis.com/maps/api/js" type="text/javascript"></script>

<style>
 #map {
  width: 400px;
  height: 500px;
    }
    .modal-content {
    margin: auto;
    display: block;
    width: 100%;
    max-width: 750px;
       
       
}
#hreff {
	width:100%; 
	background-color: #b3b300!important;
}
/* Caption of Modal Image */
#caption {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
    text-align: center;
    color: #ccc;
    padding: 10px 0;
    height: 150px;
}
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}
/* Add Animation */
.modal-content, #caption {    
    -webkit-animation-name: zoom;
    -webkit-animation-duration: 0.6s;
    animation-name: zoom;
    animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
    from {-webkit-transform:scale(0)} 
    to {-webkit-transform:scale(1)}
}

@keyframes zoom {
    from {transform:scale(0)} 
    to {transform:scale(1)}
}

/* The Close Button */
.close {
    position: absolute;
    top: 15px;
    right: 35px;
    color: #f1f1f1;
    font-size: 100;
    font-weight: bold;
    transition: 0.3s;
}

.close:hover,
.close:focus {
    color: #bbb;
    text-decoration: none;
    cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
    .modal-content {
        width: 100%;
    }
}
</style>
  <script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.12';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
  
   
    <script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.12';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
@section('row')
@endsection
@section('shopname')
@endsection

@section('category')


@section('content')

  

<?php
          /*  $ln=$_GET['ln']; His code #1
           $imageSelect=mysqli_query($link,"SELECT MIN(id),code,medium FROM vn_productimages WHERE code='$prod'");
            $fetchSelectPhoto=mysqli_fetch_assoc($imageSelect);
            $image=$fetchSelectPhoto['medium'];
           print_r($image);*/
           $image = $image->medium; //His code #1
           ?>
<div class="col-md-9">
	<div class="row">
  <div class="col-xl-6" style="background:white; margin-top: 30px; margin-bottom: 30px; padding-left: 50px; padding-right: 50px; padding-top: 20px;">
    <img onclick=" reply_click(this.id); ahm();"  src="<?php echo asset("img/medium/$image"); ?>" id="hreff" type="button" style="" class="btn btn-info btn-lg" >
    <div class="row">
     <?php
    /*$selectSmall=mysqli_query($link,"SELECT small FROM vn_productimages WHERE code='$prod'");*/
          $id=0;
         foreach ($getPictures as $key => $value) {         
             $id=$id+1;
           $urlSmallPick = asset("img/small/$value->small");
    echo '<div class="col-4" >
     <img src="'.$urlSmallPick.'" onclick="reply_click(this.id);ahm();changeImage();" id="small'.$id.'" class="img-fluid img-thumbnail" alt="Rucksack">
     </div> ';
         }

    ?>
</div>
</div>
<div class="col-xl-6">
	<h1>{{$product->name}}</h1>
	<p style="font-size: 30px;">{{$product->description}}</p>
	<table >
		<tr> 
			<td> <p style="font-size: 30px;">Price:</p> </td>
			<td> <p style="font-size: 30px;">{{$product->price}} </p> </td>
		</tr>	
	</table>
	</div>			
	</div>
	<div class="row">
		<div class="col-xl-12">
			HELLO
		</div>
	</div>
</div>
 </div>

	
	
	
<span class="closes">
 <div id="myModal" class="modal" style="" >
  <span class="close" style="color:red; font-size: 50px;">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>
</span>
<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('hreff');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
    
    ///
   // return confirm(bigName);
    //

img.onclick = function(){
    var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('hreff').src;
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
    
    
    var newName= img.slice(img.lastIndexOf("/"));
        var newName2= newName.substring(0,newName.indexOf("_"));
      var newName3= newName.substring(0,newName.indexOf("."));
       
         var newType= newName.slice(newName.indexOf("."));
  //  var mainName=newName2+""+newType;//
       var bigName=newName2+'_1920x1080'+newType;
              //return confirm(newName2+'_1920x1080'+newType);
       // document.getElementById("hreff2").src="img/big"+bigName;
    
   modal.style.display = "block";
   // modalImg.src = "img/big"+bigName;
   modalImg.src = "<?php echo asset('img/big') ?>"+bigName;
    captionText.innerHTML = this.alt;
}
var MyApp = {};
    function reply_click(clicked_id)
{
    MyApp.asd=clicked_id;
    
}
    function ahm(){
   MyApp.asd;
}
    function changeImage() {
       // alert('dsad');

       
            var name=document.getElementById(MyApp.asd).src;
      var newName= name.slice(name.lastIndexOf("/"));
        var newName2= newName.substring(0,newName.indexOf("_"));
      var newName3= newName.substring(0,newName.indexOf("."));
       
         var newType= newName.slice(newName.indexOf("."));
  //  var mainName=newName2+""+newType;//
       var mediumName=newName2+'_640x480'+newType;
         //alert (document.getElementById("hreff").src);
        // alert ("http://localhost/000/img/medium"+mediumName);
              //return confirm(bigName);
      //  document.getElementById("hreff2").src="img/big"+bigName;
          document.getElementById("hreff").src = "<?php echo asset('img/medium') ?>"+mediumName;
        
      // asset("img/small/$value->small");
      // 
    }
// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];
var spans = document.getElementsByClassName("closes")[0];
// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
    modal.style.display = "none";
}
spans.onclick = function() { 
    modal.style.display = "none";
}
</script>


@endsection
@section('carousel')
@endsection
@section('product')
@endsection














