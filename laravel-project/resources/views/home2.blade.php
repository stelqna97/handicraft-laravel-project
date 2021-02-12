@extends('layouts.app')


@section('style')
<style>
html, body {
  height: 420vh;
}
#home2{
height: 800px;
margin:0 auto;
  width: 100;
  padding: 25px;
  position: relative;
}



div.container#home{
  min-height: 800px;
  display:flex;
}

#home3{
  height: 100%;
  width: 100px;
  padding: 25px;
  position: absolute;
  
}


#brand-slider{
  position: relative;
  background-color: none;
  width:85%;
  visibility: visible;
  margin-left: 0px;
  margin-right: 0px;
  padding: 0px;
  left:150px;
}
#main{
 height:500px;
  width: 84%;
  visibility:visible;
  top:800px;
  background-color:white;
margin-left:auto;
margin-right:auto;
left:150px;
}

#main div.row {
  background-color:white;
  margin-left:auto;
margin-right:auto;
}

#main2{
 height:500px;
  width: 85%;
  background-color:none;
  visibility:visible;
  left:150px;
}

#main3{
  height:300px;
  width: 85%;
  top:1200px;
  background-color:white;
  visibility:visible;
}

#main4{
  height:300px;
  width: 85%;
  background-color:white;
  top:820px;
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

.h-category{
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
padding:15px;
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
 
 margin-left:35px;
 margin-right:0;
 vertical-align:middle;
  
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

div.carousel-inner {
  background-color:none !important;
}
#carousel-brand div.carousel-item {
  background-color:none !important;
}
.container-brand{
  position:relative;
  top:-1700px;
  height:300px;
  margin-left:0;
  margin-right:0;
  width:100%;
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

div.carousel-inner {
    height: 550px;
    background-color:none !important;
}

.carousel-item .img-fluid {
  width:100%;
  height: 100%;
  height:550px;
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
#home{
  position: relative;
background-color: #f2f2f2;
top:350px;
margin: 0px;
padding: 0px;
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


#gallery {
  position: relative;
 
  margin: 40px;
  float: left;
  width: 220px;
  height: 300px;
  vertical-align: bottom;
  display: inline-block;
  padding: 25px;

}

#card-category{
  width: 220px;
  height: 300px;
  margin: 5px;
  padding: 5px;
  }

  #card-category img:hover{
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
  #card-category .card-item{
margin:0;
  }
  #card-category img{
  top: 0px;
  bottom: 0px;
  right: 0;
  left: 0;
  width: 90%;
  height: auto;
  margin: 0;
  opacity: 0.8;
  transition: 0.7s;
  transition-property: transform,box-shadow,opacity;
  box-shadow: 0px 0px 15px  #bfbfbf; 
  -webkit-box-shadow: 0px 0px 15px  #bfbfbf; 
  -moz-box-shadow: 0px 0px 15px  #bfbfbf; 
  -o-box-shadow: 0px 0px 15px  #bfbfbf; 
  }



  </style>
 
  @endsection




  @section('header')
  <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-2" data-slide-to="1"></li>
    <li data-target="#carousel-example-2" data-slide-to="2"></li>
    <li data-target="#carousel-example-2" data-slide-to="3"></li>
  </ol>
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
        <img class="d-block w-100" src="{{url('..\public\logo\slider\slide3.png')}}"
          alt="First slide">
        <div class="mask rgba-black-light"></div>
      </div>
      <div class="carousel-caption">
        
      </div>
    </div>
    <div class="carousel-item">
      <div class="view">
        <img class="d-block w-100" src="{{url('..\public\logo\slider\slide4.jpg')}}"
          alt="Second slide">
        <div class="mask rgba-black-strong"></div>
      </div>
      <div class="carousel-caption">
      
      </div>
    </div>
    
    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        <img class="d-block w-100" src="{{url('..\public\logo\slider\slide5.jpeg')}}"
          alt="Third slide">
        <div class="mask rgba-black-slight"></div>
      </div>
      <div class="carousel-caption">
        
      </div>
    </div>
    <div class="carousel-item">
      <div class="view">
        <img class="d-block w-100" src="{{url('..\public\logo\slider\slide10.jpg')}}"
          alt="Third slide">
        <div class="mask rgba-black-slight"></div>
      </div>
      <div class="carousel-caption">
       
      </div>
    </div>
    
  </div>

  <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!--/.Carousel end-->
  @endsection
  
@section('brand-slider')
<?php
       
        $brands=DB::table('brands')->get();
        $br=DB::table('brands')->count();
                  ?>
<br><br><br>
<div class="container-brand"  style="">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>      
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<div id="demo" class="carousel slide" data-ride="carousel" style="background-color:white">
  
<h5 class="h-brand"> Регистрирани брандове</h5>
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
  @foreach($brands->chunk(4) as  $b)
  @if($loop->first)
  <li data-target="#demo" data-slide-to="{{$loop->index}}" class="active"></li>
   @else
   <li data-target="#demo" data-slide-to="{{$loop->index}}"></li>
  @endif
    @endforeach
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner no-padding" id="carousel-brand" style="background-color:none !important">
    
  @foreach($brands->chunk(4) as $brand)	

@if($loop->first)
  <div class="carousel-item active" id="items">
@else
  <div class="carousel-item " id="items">
@endif
  @foreach($brand as $bra)
			
      @if($br>0)
      <a class="brand" href="{{route('brand.show',$bra->id)}}" >		
      <div class="col-xs-3 col-sm-3 col-md-3" style="background-color:white">		
      <div class="card " id="card-car">
      <img src="{{URL::to($bra->logo)}}" alt="" height="65%" width="100%">
        <div class="card-body">
        <p class="card-title">{{$bra->name}}</p>
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

</div>

@endsection

@section('content')



       
            <h5 class="h-product"> Предлагани продукти</h5>
<hr>
                <?php
$products=DB::table('products')->get();
?>
 @foreach($products->chunk(5) as $pro)
<div class="row" >
                    @foreach($pro as $product)

                    <a href="{{route('product.show',$product->id)}}" class="btn-product ">
                    <div class="col-sm-6"  >
                    <?php 
$images=DB::table('product_images')->where('product_id',$product->id)->first();
?>
                    <div class="notify-badge">{{$product->product_price}}лв.</div>
                    <div class="card shadow-sm " id="card-product" >
                        <img src="{{URL::to($images->name)}}" alt="" width="100px" height="120px;" >  
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
       
                    @endforeach
                    </div>  
                    @endforeach

                  
            
            <script type="text/javascript">
    
  });
  $(document).ready(function(){
$('#input-2').rating({displayOnly: true;cursore:pointer});
});
  </script> 




          

@endsection

@section('content2')

<div class="container" id="home" style="width:99%;padding-bottom:45px" >
<div class="row">
            <h5 class="h-category"> Категории</h5>
<hr>
</div>
</br> </br> 
<?php
$categories=DB::table('categories')->get();
?>
 @foreach($categories->chunk(4) as $cat)
<div class="row">

                    @foreach($cat as $category)
                    <a href="{{route('product.show',$category->id)}}" class="btn-product " style="margin:0;padding:0">
  <div class="col-sm-6" style="background-color:none !important;">
    <div class="card" id="card-category" style="background-color:rgba(242, 242, 242,0.2) !important;box-shadow:none;border:none">
    <img class="card-img-top" src="{{URL::to($category->logo)}}" alt="" width="100px" height="140px" >  

      <div class="card-body">
        <h5 class="card-title">   {{$category->name}}  </h5>
      </div>
    </div>
  </div>
</a>
  @endforeach
</div>
@endforeach

</div>
@endsection

@section('content3')

<?php
$ratings=DB::table('ratings')->get();
$r=DB::table('ratings')->count();
?>

<div class="container" id="home3" style="width:99%"  >
  <div class="row">
    <div class='col-md-offset-2 col-md-8 text-center'>
    <h5 class="h-review">Отзиви от клиенти</h5>
    <hr>
    </div>
  </div>
  <div class='row'>
    <div class='col-md-offset-2 col-md-8'>
      <div class="carousel slide" data-ride="carousel" id="quote-carousel" data-interval="false"  data-pause="hover">
        <!-- Bottom Carousel Indicators -->
        <ol class="carousel-indicators">
        @foreach($ratings->chunk(1) as  $b)
         @if($loop->first)
         <li data-target="#quote-carousel" data-slide-to="{{$loop->index}}" class="active"></li>
         @else
        <li data-target="#quote-carousel" data-slide-to="{{$loop->index}}"></li>
         @endif
        @endforeach
        </ol>
        
        <!-- Carousel Slides / Quotes -->
        <div class="carousel-inner" id="carousel-inner-rev" >
        
        @foreach($ratings->chunk(1) as $rating)	

          @if($loop->first)
   <div class="item active" id="items">
        @else
  <div class="item " id="items">
       @endif
       @foreach($rating as $rtg)
      @if($r>0)
      <?php
$user=DB::table('users')->where('id',$rtg->user_id)->first();
      ?>
    <blockquote>
              <div class="row" id="reviews">
              <div class="col-sm-3 text-center">
                  <img class="img-circle" src="{{URL::to($user->image)}}" style="width: 100px;height:100px;">
                </div>
                <div class="col-sm-9">
                  <p>{{str_limit($rtg->comment,$limit=85)}}</p>
                  <small>{{$user->name}}</small>
                  <input id="input-2" name="input-1" class="rating " data-min="0" data-max="5" data-step="0.1" value="{{ $rtg->star }}" data-size="xxs" disabled="" data-show-clear="false" data-show-caption="false">
                </div>
               
              </div>
            </blockquote>
            @endif
      @endforeach
</div>
@endforeach
         
          
        <!-- Carousel Buttons Next/Prev -->
        <a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i class="fa fa-chevron-left"></i></a>
        <a data-slide="next" href="#quote-carousel" class="right carousel-control"><i class="fa fa-chevron-right"></i></a>
      </div>                          
    </div>
  </div>
</div>
<script>
$(document).ready(function() {
  //Set the carousel options
  $('#quote-carousel').carousel({
    pause: false,
    interval: 4000,
  });
});
</script>
@endsection

@section('content4')
<div  id="home2" style="width:60%" >
<?php

                            if($category!=""){
                                echo '<h2 class="title text-center" class="h-product">Категория '.$category->name.'</h2>';
                            }else{
                                echo '<h2 class="title text-center" class="h-product">Продукти</h2>';
                            }
                    ?>
<hr>
                          
                
@foreach($products->chunk(5) as $pro)               
<div class="row"><!--features_items-->
               
                @foreach($pro as $product)
                        
                   
                    <a href="{{route('product.show',$product->id)}}" class="btn-product ">
                    <div class="col-sm-6" >
                    <div class="notify-badge">{{$product->product_price}}лв.</div>
                    <div class="card shadow-sm " id="card-product" >
                        <img src="{{URL::to($product->image)}}" alt="" >  
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
