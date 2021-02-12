@extends('layouts.app')

@section('style')
<style>
html, body {
  height: 340vh;
}

.carousel-inner{
  height: 360px;

}
.carousel-item .img-fluid {
  width:100%;
  height: 100%;
  height:360px;
}

.search{

  top: 150px;

}


.carousel-inner{
  height: 360px;
}
.carousel-item .img-fluid {
  width:100%;
  height: 100%;
  height:360px;
}

.search{

  top: 150px;

}

.create{
  height: 100%;
  width: 100%;
  padding: 25px;
  padding-left:50px;
  position: absolute;
  left:-50px;
  border:1px;
  border-top:0;

}
#create2 .btn-primary{
  background: rgb(0,0,0);
background: radial-gradient(circle, rgba(0,0,0,1) 0%, rgba(38,38,38,1) 100%);
font-size:12px;
}

#create .col-md-12{
  padding:10px;

}
#create2{
  height: 80%;
  width: 430px;
  padding: 25px;
  left:-25px;
  top:-47px;
  position: relative;
  font-size:11px;
  border-top:0;
  box-shadow:none;
}
#create2 label{
  color:#000;
}
#create{
  height: 80%;
  width: 430px;
  padding: 25px;
  left:-205px;
  top:127px;
  position: relative;
  font-size:11px;
  border-top:0;
  box-shadow:none;
}

#sort{
  height: 50px;
  width: 430px;
  padding: 25px;
  left:-10px;
  top:-100px;
  position: relative;
  font-size:11px;
}
#create2 .form-control{
  width:150px;
  
}
#create2 {
  -webkit-box-shadow: none;
-moz-box-shadow:none ;
box-shadow:none ;
}

div.col-md-6{
  height: 50px;
  width: 430px;
  padding: 25px;
  left:30px;
  top:-470px;
  position: relative;
  font-size:11px;
}

.brand-head{
  position:relative;
  top:100px;
  left:-200px;
  margin-left:auto;
  margin-right:auto;
text-align:center;
}

#create2 .card-header{
  height:40px;
  text-align:center;
  font-size:14px;
  color: #000;
    background-color: #fff;
    border-color: #fff;
    opacity:1;
    text-align:left;
    font-weight:bold;
}

#create2 .btn-default{
  background: rgb(0,0,0);
background: white;
font-size:12px;
}
div.card #card-sh{
  box-shadow:none;
  border:0;
}
#items{
  background-color:white;
}
#create2 .panel-primary{
  background: rgb(0,0,0);
background: radial-gradient(circle, rgba(0,0,0,1) 0%, rgba(38,38,38,1) 100%);
font-size:12px;
}
#sidebar{
  background:none;
  border:0;
}
.btn-product{
  text-decoration:none;
  text-align:center;
}
.btn-product:hover{
  text-decoration:none;
  opacity:0.8;
}
div.carousel-inner {
  background-color:none !important;
}
#carousel-brand div.carousel-item {
  background-color:none !important;
}

.carousel-item:before {
    -webkit-box-shadow:none;
    box-shadow: none;
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    content: "";
}
#main{
  height:400px;
  top:215px;
  width: 100%;
  margin-left:0;
  margin-right:0;
  left:220px;
  visibility:visible;
  background: #f2f2f2c4 !important;
}




#main2{
  height:200px;
  width: 90%;
  top:750px;
  left:100px;
  background-color:none;
  visibility:visible;
}

.notify-badge{
    position: relative;
    background: rgba(35, 144, 35,0.8);
    height:2rem;
    z-index:5;
    top:0px;
    left:40px;
    width:4rem;
    text-align: center;
    line-height: 2rem;;
    font-size: 1rem;
    border-radius: 5%;
    color:white;
    border:1px solid #239023;
}

.notify-badge:hover{

}
#filter{
  width:300px;
}

.panel-primary{
  background-color:white;
  width:350px;
  border:0;

}

.panel-heading{
  background-color: none;
}
.pull-right {
  position:relative;
  bottom:15px;
}

.pull2 {
  position:relative;
  bottom:-5px;
  font-size:14px;
}
.badge{
  position:relative;
  bottom:0px;
  left:200px;
}

li {
    display: list-item;
    text-align: -webkit-match-parent;
}


.h-product{
  font-family: "Times New Roman", Times, serif;
font-size: 20px;
letter-spacing: 1px;
word-spacing: 1px;
color: #000000;
font-weight: 400;
text-decoration: none;
font-style: normal;
font-variant: small-caps;
text-transform: none;
}

.h-review{
  font-family: "Times New Roman", Times, serif;
font-size: 20px;
letter-spacing: 1px;
word-spacing: 1px;
color: #000000;
font-weight: 400;
text-decoration: none;
font-style: normal;
font-variant: small-caps;
text-transform: none;
}
#card-product{
  width:150px;
transition: border-color 0.6s;
}

#card-product:hover{
  border-color:green;
opacity:0.9;

}

#brand{
  position:relative;
  top:-400px;
left:40px;
}



#create{
    width:90%;
    max-height:900px;
}
.d-flex{
  background:white;
}

#create .card-header{
  height:40px;
  text-align:left;
  font-size:14px;
  color: #000;
 background:#fff;
 font-weight:bold;
  opacity:1;
}

#create .btn-primary{
  background: rgb(0,0,0);
background: white;
font-size:12px;
}

#delete .btn-warning{
  background: rgb(0,0,0);
background: white;
font-size:12px;
}

#delete button{
  position:relative;
  left:0px;
  top:0px;
  border:0;
  color:black;
}

#create .col-md-4{
  font-size:13px;
}

#create .form-check{
  position:relative;
  left:0px;
}

#edit{
  position:relative;
  left:-15px;
  top:0px;
}


#delete button{
  position:relative;
  left:15px;
  top:-33px;
  border:0;
  color:#262626;
}


#view{
  position:relative;
  left:24px;
  top:-2px;
}

.table{
  font-size:11.5px;
}

th{
  text-align:center;
  vertical-align:middle;
}
 td{
  text-align:center;
  font-size:11px;
  vertical-align:middle;
}
#prev-cont{
  position:relative;
  left:1000px;
}
.show{
  width:75px;
}
.container-brand{
  width:85%;
  left:100px;
  height:350px;
 
}
#sort .dropdown-menu a {
  color: black;
  padding: 5px;
  text-decoration: none;
  display: block;
  font-size:10px;
}

.dropdown-item{
  width:35px;
}

.form-check-label{
  padding-left:20px;
}

#genre{
  position:relative;
  left:-150px;
}
  </style>
 
  @endsection

@section('header')
  <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
 
  <div style="position:relative;top:50px;left:500px">
  <div class="search">
      <form class="form-inline" action="/search" method="POST" role="search">
                                    {{ csrf_field() }}

                  <input class="form-control mr-sm-2" id="serach" type="search" placeholder="Въведи продукт" aria-label="Search" name="search">
                 <button class="btn2 btn-success " type="submit" >Намери</button>
                       </form>
</div>
</div>
  <!--Slides-->
  <div class="carousel-inner"  role="listbox">
    <div class="carousel-item active">
      <div class="view">
        <img class="d-block w-100" src="{{url('..\public\logo\slider\main.jpg')}}"
          alt="First slide">
        <div class="mask rgba-black-light"></div>
      </div>
     
    </div>
    
    
  </div>

</div>
<!--/.Carousel end-->
  @endsection

  @section('content2')
<?php
       
        $brands=DB::table('brands')->get();
        $br=DB::table('brands')->count();
        $product=DB::table('products')->get();
        $p=DB::table('products')->count();
                  ?>

<div class="container-brand" >
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>      
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<div id="demo" class="carousel slide" data-ride="carousel" style="background-color:white">
  
<h5 class="h-brand"> Продукти</h5>
<hr>
<div class="controls-top">
  <a class="carousel-control-prev" href="#demo" data-slide="prev" id="prev-cont" >
    <span class="carousel-control-prev-icon" id="prev"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next" id="next-cont">
    <span class="carousel-control-next-icon" id="next"></span>
  </a>
</div>

  <ul class="carousel-indicators" id="brands-indicatorors">
  @foreach($product->chunk(4) as $pro)	
  @if($loop->first)
  <li data-target="#demo" data-slide-to="{{$loop->index}}" class="active"></li>
   @else
   <li data-target="#demo" data-slide-to="{{$loop->index}}"></li>
  @endif
    @endforeach
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner no-padding" id="carousel-brand">
    
  @foreach($product->chunk(4) as $pro)	

@if($loop->first)
  <div class="carousel-item active">
@else
  <div class="carousel-item ">
@endif

@foreach($pro as $pr)
<div class="row">

<?php 
$images=DB::table('product_images')->where('product_id',$pr->id)->first();
?>
      @if($p>0)
      <a href="{{route('product.show',$pr->id)}}" class="btn-product " style="margin-right:65px">
      <div class="col-sm-6" >
                    <div class="notify-badge">{{$pr->product_price}}лв.</div>
                    <div class="card shadow-sm " id="card-product" >
                        <img src="{{URL::to($images->name)}}" alt="" width="100px" height="70px">  
                        <div class="card-body" id="body-product">
    <h5 class="card-title" style=" text-decoration:none;">{{$pr->product_name}}</h5>
    <?php
    $total=0;
    $avg=0;
    $rating_show=DB::table('ratings')->where([
      'product_id' => $pr->id
  ])->get();
  $count=DB::table('ratings')->where('product_id',$pr->id)->get()->count();
  if($count>0){
      foreach($rating_show as $rat){
  $total+=$rat->star;
  $avg=$total/$count;
      }
  }else{
      $avg=0;
  }
    ?>
    <input id="input-2" name="input-1" class="rating " data-min="0" data-max="5" data-step="0.1" value="{{ $avg }}" data-size="xxs" disabled="" data-show-clear="false" data-show-caption="false">
    <p class="card-text" id="card-price" style=" text-decoration:none;color:black"> {{str_limit($pr->details,$limit=50)}}</p>


</div>
</div>
</div>
</a>

  @endif
      @endforeach
</div>
@endforeach
  
  <!-- Left and right controls -->


</div>
@endsection

@section('content')



<div class="brand-head">
<div class="align-self-center">
@if($brand->logo)
<img src="{{URL::to($brand->logo)}}" alt="" height="100px" width="170px" >
@else
<img src="{{URL::to($file)}}" alt="" height="100px" width="170px" >
@endif
</div>
<h4>{{$brand->name}}</h4>
</div>
  

<div class="container" id="create">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"> За нас </div>
                <div class="card-body">
                {!! nl2br($brand->detail_about) !!}
</div>
                </div>
            </div>
<br>
            <div class="col-md-12">
            <div class="card">
                <div class="card-header"> Доставка </div>
                <div class="card-body">
                {!! nl2br($brand->detail_delivery) !!}
                </div>
</div>
            </div>
            <br>
            <br>

            <div class="col-md-12">
            <div class="card">
                <div class="card-header"> Контакти </div>
                <div class="card-body">
                {!! nl2br($brand->detail_contact) !!}
</div>
                </div>
            </div>
            
        </div>
    </div>
</div>
	
	 
@endsection


@section('content3')

<nav id="sidebar">
			
				
	    
      
    <script>
    $(document).ready(function(){
    $('#pageSubmenu2').collapse({
toggle: false,
});
    });
    $(document).on('click', '.panel-heading span.clickable', function(e){
    var $this = $(this);
	if(!$this.hasClass('panel-collapsed')) {
		$this.parents('.panel').find('.panel-body').slideUp();
		$this.addClass('panel-collapsed');
		$this.find('i').removeClass('glyphicon-chevron-down').addClass('glyphicon-chevron-up');
		
	} else {
		$this.parents('.panel').find('.panel-body').slideDown();
		$this.removeClass('panel-collapsed');
		$this.find('i').removeClass('glyphicon-chevron-up').addClass('glyphicon-chevron-down');
		
	}
})
</script>



<div class="col-md-6">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title" style="  font-weight:bold">Опции</h3>
					<span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-down"></i></span>
        </div>
        <hr>
				<div class="panel-body">
        <ul class="cat">

                <li><a href="#">Всички категории</a></li>
                <li><a href="#">Промени категорията</a></li>
	            </ul>
        </div>
			</div>
		</div>
		
	</div>
      </nav>

      
@endsection


