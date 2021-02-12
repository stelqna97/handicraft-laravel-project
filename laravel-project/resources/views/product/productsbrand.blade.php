@extends('layouts.app')

@section('style')
<style>
html, body {
  height: 800vh;
}
#home2{
  height: 100%;
  width: 85%;
  padding: 25px;
  position: absolute;
  top:-10px;
  left:200px;
  
}


#sort{
  height: 50px;
  width: 430px;
  padding: 25px;
  left:30px;
  top:-450px;
  position: relative;
  font-size:11px;
}

#main{
  height:500px;
  width:75% ;
  background-color:none !important;
  visibility:visible;
}
#main2{
   height:500px;
  width: 85%;
  background-color:none;
  visibility:visible;
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
  width:180px;
transition: border-color 0.6s;
}

#card-product:hover{
  border-color:green;
opacity:0.9;

}

#card-product img{
  
  height:160px;
  width:100%;
}

#card-price{
  color: #666666 ;
}

#body-product{

}

.sectionTwo{
  position:absolute;
  top:400px;
}
.notify-badge{
    position: relative;
    background: rgba(35, 144, 35,0.8);
    height:2rem;
    z-index:5;
    top:20px;
    left:0px;
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
.btn-product{
  text-decoration:none;
  text-align:center;
}

.btn-product:hover{
  text-decoration:none;
  opacity:0.8;
}

.category{
  position: relative;
  margin: 10px;
  float: left;
  width: 220px;
  height: 300px;
  right:40px;
  vertical-align: bottom;
  display: inline-block;
  padding: 25px;
}

div.category img:hover {
  transform: scale( 1.2); 
  -webkit-transform: scale( 1.2); 
  -moz-transform: scale( 1.2); 
  -o-transform: scale( 1.2);
   box-shadow: 0px 0px 25px  #bfbfbf; 
  -webkit-box-shadow: 0px 0px 25px  #bfbfbf; 
  -moz-box-shadow: 0px 0px 25px  #bfbfbf; 
  -o-box-shadow: 0px 0px 25px  #bfbfbf; 
  opacity: 1; 
  }

.category img {
  position: absolute;
  top: 0px;
  bottom: 0px;
  right: 0;
  left: 0;
  width: 100%;
  height: auto;
  margin: auto;
  opacity: 0.8;
  transition: 0.7s;
  transition-property: transform,box-shadow,opacity;
  box-shadow: 0px 0px 15px  #bfbfbf; 
  -webkit-box-shadow: 0px 0px 15px  #bfbfbf; 
  -moz-box-shadow: 0px 0px 15px  #bfbfbf; 
  -o-box-shadow: 0px 0px 15px  #bfbfbf; 
}


.category-title{
  position: absolute;
  padding: 40px;
   top: 280px;
  bottom: 0;
  right: 0;
  left: 0;
  margin: auto;
  text-align: center;
  font-family: "Comic Sans MS",cursive,sans-serif;
  color: #262626;
  font-size: 16px;
}
#quote-carousel 
{
  padding: 0 10px 30px 10px;
  margin-top: 30px;
  
}

#quote-carousel 
{

}


/* Control buttons  */
#quote-carousel .carousel-control
{
  background: none;
  color: #222;
  font-size: 2.3em;
  text-shadow: none;
  margin-top: 30px;
}
/* Previous button  */
#quote-carousel .carousel-control.left 
{
  left: -12px;
}
/* Next button  */
#quote-carousel .carousel-control.right 
{
  right: -12px !important;
}
/* Changes the position of the indicators */
#quote-carousel .carousel-indicators 
{
  right: 20%;
  top: 160px;
  bottom: 0px;
  margin-right: -19px;
}
/* Changes the color of the indicators */
#quote-carousel .carousel-indicators li 
{
  background: #c0c0c0;
  width: 3%!important;
  height: 1px!important;
  border-radius: 80%;
}
#quote-carousel .carousel-indicators .active 
{
  background: #333333;
}
#quote-carousel img
{
  width: 250px;
  height: 100px
}
/* End carousel */

.item blockquote {
    border-left: none; 
    margin: 0;
}


.item blockquote img {
    margin-bottom: 10px;
}

.item blockquote p:before {
    content: "\f10d";
    font-family: 'Fontawesome';
    float: left;
    margin-right: 10px;
}

#items{
  background-color:white;
}

/**
  MEDIA QUERIES
*/

/* Small devices (tablets, 768px and up) */
@media (min-width: 768px) { 
    #quote-carousel 
    {
      margin-bottom: 0;
      padding: 0 40px 30px 40px;
    }
    
}

/* Small devices (tablets, up to 768px) */
@media (max-width: 768px) { 
    
    /* Make the indicators larger for easier clicking with fingers/thumb on mobile */
    
    #quote-carousel .carousel-indicators {
        bottom: -20px !important;  
    }
    #quote-carousel .carousel-indicators li {
        display: inline-block;
        margin: 0px 5px;
        width: 15px;
        height: 15px;
    }
    #quote-carousel .carousel-indicators li.active {
        margin: 0px 5px;
        width: 20px;
        height: 20px;
    }
}

html, body {
  height: 700vh;
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

html, body {
  height: 200vh;
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
#create2{
  height: 80%;
  width: 430px;
  padding: 25px;
  left:-25px;
  top:7px;
  position: relative;
  font-size:11px;
  border-top:0;
}
#create2 label{
  color:#000;
}


#create2 .form-control{
  width:150px;
  
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
#card-sh{
  box-shadow:none;
  border:0;
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
  height:700px;
  width: 25%;
  top:-185px;
  left:40px;
  background-color:none;
  visibility:visible;
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
.panel-primary>.panel-heading {
    color: #000;
    background-color: #fff;
    font-size:14px;
  color: #000;
 background:#fff;
 border:0;
 font-weight:bold;
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

.show{
  width:75px;
}

#sort .cat a {
  color: black;
  padding: 5px;
  text-decoration: none;
  display: block;
  font-size:10px;
}

.dropdown-item{
  width:35px;
}

.cat{
  list-style-type: none;
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

  @section('content')
<div  id="home2" style="width:60%" >

                            <?php
                            if($brand!=""){
                                echo '<h2 class="title text-center">Бранд '.$brand->name.'</h2>';
                            }else{
                                echo '<h2 class="title text-center">Продукти</h2>';
                            }
                  
                    ?>
<hr>
@foreach($product->chunk(4) as $pro)
                <div class="row"><!--features_items-->
               
                @foreach($pro as $product)
                        @if($product->brand)
                        <?php 
$images=DB::table('product_images')->where('product_id',$product->id)->first();
?>
                    <a href="{{route('product.show',$product->id)}}" class="btn-product ">
                    <div class="col-sm-6" >
                    <div class="notify-badge">{{$product->product_price}}лв.</div>
                    <div class="card shadow-sm " id="card-product" >
                        <img src="{{URL::to($images->name)}}" alt="" >  
                        <div class="card-body" id="body-product">
    <h5 class="card-title">{{$product->product_name}}</h5>
    <?php
    $total=0;
    $avg=0;
    $rating_show=DB::table('ratings')->where([
      'product_id' => $product->id
  ])->get();
  $count=DB::table('ratings')->where('product_id',$product->id)->get()->count();
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
    <p class="card-text" id="card-price"> {{str_limit($product->details,$limit=50)}}</p>
</div>
</div>
</div>
</a>
                  
@endif

@endforeach
</div>
@endforeach

</div>
            
            <script type="text/javascript">
    
  });
  $(document).ready(function(){
$('#input-2').rating({displayOnly: true;cursore:pointer});
});
  </script> 




          

@endsection




@section('content2')

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

<script>
 
    $(document).on('click', '.card-header span.clickable', function(e){
    var $this = $(this);
	if(!$this.hasClass('panel-collapsed')) {
		$this.parents('.card').find('.card-body').slideUp();
		$this.addClass('panel-collapsed');
		$this.find('i').removeClass('glyphicon-chevron-down').addClass('glyphicon-chevron-up');
		
	} else {
		$this.parents('.card').find('.card-body').slideDown();
		$this.removeClass('panel-collapsed');
		$this.find('i').removeClass('glyphicon-chevron-up').addClass('glyphicon-chevron-down');
		
	}
})
</script>


	
  <div class="container" >
    <div class="row justify-content-center"  id="create2">
        <div class="col-md-12" >
            <div class="card" id="card-sh">
                <div class="card-header">Филтрирай
                <span class="pull-right clickable pull2"><i class="glyphicon glyphicon-chevron-down"></i></span>  </div>
<hr>
                <div class="card-body">
<form  method="GET">
<div class="form-group row">
    <label for="filter" class="col-md-4 col-form-label text-md-right">Име</label>
    <div class="col-md-6">
    <input type="text" class="form-control" id="filter" name="name" value="{{$name ?? ''}}">
    </div>
  </div>
  <div class="form-group row">
    <label for="filter" class="col-md-4 col-form-label text-md-right">Детайли</label>
    <div class="col-md-6">
    <input type="text" class="form-control" id="filter" name="details" value="{{$details ?? ''}}">
    </div>
  </div>
 
  <div class="form-group row">
  <label for="brand" class="col-md-4 col-form-label text-md-right" >Ктагория </label>
  <div class="col-md-4">
      <select name="brands" class="form-control "  >
            <option value="Всички" name="brand" ></option>
            @foreach($categories as $category )
        <option value="{{$category ->id}}" name="role" @if (($cat)==$category->id) selected @endif>{!! $category ->name !!}</option>
    @endforeach
    </select>
    </div>
    </div>
  
    <div class="form-group row">
    <label for="filter" class="col-md-4 col-form-label text-md-right">Цена</label>
    <div class="col-md-6">
    <label for="filter" class="col-sm-30 col-form-label">  Минимална цена</label>
    <input type="number" name="min" min="1" class="form-control" id="filter" min="0"  value="{{$min ?? ''}}">   
    <label for="filter" class="col-sm-30 col-form-label">Максимална цена</label>
    <input type="number" name="max" min="1" class="form-control" id="filter" min="0"  value="{{$max ?? ''}}"> 
    </div>
</div>

  <div class="form-group row">
    <label for="filter" class="col-md-4 col-form-label text-md-right">Адрес</label>
    <div class="col-md-6">
    <input type="text" class="form-control" id="filter" name="address"  value="{{$address ?? ''}}">
  </div>
  </div>
  <div class="form-group row">
    <label for="filter" class="col-md-4 col-form-label text-md-right">Дата на създаване</label>
    <div class="col-md-6">
    <input type="date" class="form-control" id="filter" name="data" value="{{$data ?? ''}}">
    </div>
  </div>


           
<div class="col-md-6 offset-md-4">
  <button type="submit" class="btn btn-primary">Намери</button>
  </div>
</form>
</div>
</div>
            </div>
            
        </div>
    </div>
</div>

<<div class="col-md-6" id="sort">
			<div class="panel panel-primary" >
				<div class="panel-heading">
					<h3 class="panel-title" style="  font-weight:bold">Подреди по</h3>
					<span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-down"></i></span>
        </div>
        <hr>
				<div class="panel-body">
       <ul class="cat">
       <li><a href="#">@sortablelink('name','име ','asc_suffix'   )</a></li>
       <li><a href="#"> @sortablelink('created_at','дата на създаване ','asc_suffix'   )</a></li>


</ul>
  </div>
</div>
</div>
</div>
      
@endsection