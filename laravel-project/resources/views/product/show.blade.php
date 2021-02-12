@extends('layouts.app')

@section('style')
<style>
html, body {
  min-height: 1300vh;
}
#home2{
  height: 90%;
  width: 85%;
  padding: 25px;
  position: absolute;
  top:-10px;
  left:200px;
  
}




#main{
  min-height:1000vh;
  width:85% ;
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
.review-block-description{
 
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
ul{
    list-style-type: none;
margin-left: -30px;
}

ul li{
   padding: 5px;
   margin: 0px;
   float: left;
}

ul li img{
    width: 50px;
    height: 70px;
  float: left;
  padding-left: 5px;
}

.big_img{
    width: 250px;
    height: 300px;
    margin-top: 2px;
    margin-left: 10px;
    margin-right: 5px;
    vertical-align: middle;
}

#small_img{
  margin-left: 5px;
}
















.xzoom-source img, .xzoom-preview img, .xzoom-lens img {
    display: block;
    max-width: none;
    max-height: none;
    -webkit-transition: none;
    -moz-transition: none;
    -o-transition: none;
    transition: none;
  }
  /* --------------- */
  
  /* xZoom Styles below */
  .xzoom-container { 
    display: inline-block;
  }
  
  .xzoom-thumbs {
    text-align: center;
    margin-bottom: 10px;
  }
  
  .xzoom { 
    -webkit-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.5);
    -moz-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.5);
    box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.5);  
  }
  .xzoom2, .xzoom3, .xzoom4, .xzoom5 {
    -webkit-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.5);
    -moz-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.5);
    box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.5);
  }
  
  /* Thumbs */
  .xzoom-gallery, .xzoom-gallery2, .xzoom-gallery3, .xzoom-gallery4, .xzoom-gallery5 {
    border: 1px solid #cecece;
    margin-left: 5px;
    margin-bottom: 10px;
  }
  
  .xzoom-source, .xzoom-hidden {
    display: block;
    position: static;
    float: none;
    clear: both;
  }
  
  /* Everything out of border is hidden */
  .xzoom-hidden {
    overflow: hidden;
  }
  
  /* Preview */
  .xzoom-preview {
    border: 1px solid #888;
    background: #2f4f4f;
    box-shadow: -0px -0px 10px rgba(0,0,0,0.50);
  }
  
  /* Lens */
  .xzoom-lens {
    border: 1px solid #555;
    box-shadow: -0px -0px 10px rgba(0,0,0,0.50);
    cursor: crosshair;
  }
  
  /* Loading */
  .xzoom-loading {
    background-position: center center;
    background-repeat: no-repeat;
    border-radius: 100%;
    opacity: .7;
    background: url(../images/xloading.gif);
    width: 48px;
    height: 48px;
  }
  
  /* Additional class that applied to thumb when it is active */
  .xactive {
    -webkit-box-shadow: 0px 0px 3px 0px rgba(74,169,210,1);
    -moz-box-shadow: 0px 0px 3px 0px rgba(74,169,210,1);
    box-shadow: 0px 0px 3px 0px rgba(74,169,210,1); 
    border: 1px solid #4aaad2;
  }
  
  /* Caption */
  .xzoom-caption {
    position: absolute;
    bottom: -43px;
    left: 0;
    background: #000;
    width: 100%;
    text-align: left;
  }
  
  .xzoom-caption span {
    color: #fff;
    font-family: Arial, sans-serif;
    display: block;
    font-size: 0.75em;
    font-weight: bold;
    padding: 10px;
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
  
  background-size:cover;
  height:45%;
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
#breake{
  position:relative;
}

#details{
  position:relative;
left:-10px;
  width:100%;
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

.img-rounded{
  border-radius:50%;
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


.pull-left{
  position:relative;
  top:-20px;
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

#create{
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

#sort{
  height: 50px;
  width: 430px;
  padding: 25px;
  left:-10px;
  top:-30px;
  position: relative;
  font-size:11px;
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
background: radial-gradient(circle, rgba(0,0,0,1) 0%, rgba(38,38,38,1) 100%);
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

@section('content')
    <section class="section-content bg padding-y border-top" id="site">

<div class="row justify-content-center" id="create">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> {{$product->product_name}}</div>

                <div class="card-body">
                  
                <div class="row ">
                        <div class="col-sm-4 border-right">
    <div class="gallery-wrap">
                          @if ($image->count() > 0)
          <img class="big_img" id="big_img" src="{{URL::to($image->first()->name)}}"  />
          @else
          <img class="big_img" id="big_img" src="{{URL::to($product->image)}}"  />
          @endif
          <ul id="small_img">
          @if ($image->count() > 0)
          @foreach($image as $img)
            <li  ><img class="small_img" width="80" src="{{URL::to($img->name)}}" /></li>
            @endforeach
            @endif
         </ul>

         
</div>
                </div>
                <?php
        
        $bran=DB::table('brands')->select('name')->where('id',$product->brand_id)

            ?>
           <div class="col-sm-7">
               <div class="p-5">
                   <h3 class="title mb-3">{{ $product->product_name }}</h3>
                   <input id="input-1" name="input-1" class="rating rating-loading" data-min="0" data-max="5" data-step="0.1" value="{{ $avg }}" data-size="xs" disabled="">

                   <dl class="row">
                   <dt class="col-sm-3">Код на продукта</dt>
                       <dd class="col-sm-9">{{$product->product_code  }}</dd>
                       <dt class="col-sm-3">Бранд</dt>
                       <dd class="col-sm-9">{{ $product->brand->name }}</dd>
                       <dt class="col-sm-3">Категория</dt>
                       <dd class="col-sm-9">{{ $product->category->name }}</dd>
                   </dl>
                   <div class="mb-3">
                   
                           <var class="price h3 text-success">
                               <span class="currency">{{ config('settings.currency_symbol') }}</span><span class="num" id="productPrice">{{ $product->product_price }}</span>
                           </var>
                    
                   </div>
                   <hr>
                   
                 
                   <form action="{{ route('product.add.cart', $product->id) }}" method="POST" accept-charset="UTF-8">
                   @csrf
                     
                       <div class="row">
                           <div class="col-sm-12">
                               <dl class="dlist-inline">
                                   <dt>Количество: </dt>
                                   <dd>
                                       <input class="form-control" type="number" min="1" value="1" max="{{ $product->quantity }}" name="quantity" style="width:70px;">
                                       <input type="hidden" name="product_id" value="{{ $product->id }}"> 
                                       <input type="hidden" name="publisher_id" value="{{ $product->user_id }}"> 
                                       <input type="hidden" name="product_name" value="{{ $product->product_name }}">                                                        
                                       <input type="hidden" name="product_code" value="{{ $product->product_code }}">
                                       <input type="hidden" name="price" id="finalPrice" value="{{  $product->product_price }}">
                                   </dd>
                               </dl>
                           </div>
                       </div>
                      
                       <button type="submit" class="btn btn-success"><i class="fa fa-shopping-cart"></i> Купи</button>
                   </form>
                   
</div>
</div>
            </div>
            

            
        </div>
    </div>
<div class="container" >
    <div class="col-md-12" id="details" >
                    <article class="card mt-4">
                    <div class="card-header"> Описание</div>
                        <div class="card-body">
                        {!! nl2br($product->details) !!}
                        </div>
                    </article>
                </div>
</div>
 
    			
                <div class="col-md-12">  

                        @if($rating_user==0)
                        <article class="card mt-4">

                        <div class="card-body">
                <div class="details col-md-8">
                <form  method="POST" action="{{route('ratting.store')}}"  enctype="multipart/form-data" >
                                            
                                            @csrf 
                                            @method('POST')
                                        <h4 class="product-title" style="font-weight:bold">Добави рейтинг</h4>
                                        <div class="rating">
                                        <input type="hidden" name="_method" value="POST">
                                            <input id="ratings-hidden" name="rating" type="hidden"> 
                                        <textarea class="form-control animated" cols="50" id="new-review" name="comment" placeholder="Enter your review here..." rows="5"></textarea>
                                            <input id="input-1" name="star" class="rating rating-loading" data-min="0" data-max="5" data-step="1"  data-size="xs">
                                            <input type="hidden" name="product_id" required="" value="{{ $product->id }}">
                                            <input type="hidden" name="user_id" required="" value="{{ auth()->user()->id }}">
                                            <br/>
                                            <button class="btn btn-success">Добави</button>
                                         
                                        </div>
                                         </form>
                                    </div>
                                    </div>
                                    
                    </article>
                </div>
                @else 
                                    <div class="col-md-12">
                    <article class="card mt-4">
                        <div class="card-body">
                               <div class="details col-md-6">
                               <h4 class="product-title" style="font-weight:bold">Моят рейтинг</h4>
                                        <div class="rating">
                                        <div class="row">
						<div class="col-sm-8">
                        <input id="input-1" name="input-1" class="rating rating-loading" data-min="0" data-max="5" data-step="0.1" value="{{ $rating_show->star ?? ''}}" data-size="xs" disabled="">
							<div class="review-block-name">{{$rating_show->comment ?? ''}}</div>
							<div class="review-block-date">{{$rating_show->created_at ?? ''}}<br/></div>
                        </div>
                        <div class="col-sm-7">
                        <a href="{{route('rating.edit',$product->id)}}" class="btn btn-primary">Промени</a>
                           </div>
                         </div>
                         </div>
                    </article>
                </div>
              
                                       

                                    @endif
                                    <div class="col-md-12">
                    <article class="card mt-4">
                        <div class="card-body">                   
    <div class="container">
    			
		<div class="row">
			<div class="col-sm-4">
				<div class="rating-block">
					<h4>Среден рейтинг</h4>
                    <input id="input-1" name="input-1" class="rating rating-loading" data-min="0" data-max="5" data-step="0.1" value="{{ $avg }}" data-size="xs" disabled="">
				
				</div>
			</div>
			<div class="col-sm-6" id="breake" style="margin:20px;">
				<h4></h4>
				<div class="pull-left">
					<div class="pull-left" style="width:35px; line-height:1;">
						<div style="height:9px; margin:5px 0;">5 <span class="glyphicon glyphicon-star"></span></div>
					</div>
					<div class="pull-left" style="width:180px;">
						<div class="progress" style="height:9px; margin:8px 0;">
<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="5" style="width: {{$percFive}}%;background-color:#2eb82e">
							<span class="sr-only">80% Complete (danger)</span>
						  </div>
						</div>
					</div>
					<div class="pull-right" style="margin-left:10px;">{{$five}}</div>
				</div>
				<div class="pull-left">
					<div class="pull-left" style="width:35px; line-height:1;">
						<div style="height:9px; margin:5px 0;">4 <span class="glyphicon glyphicon-star"></span></div>
					</div>
					<div class="pull-left" style="width:180px;">
						<div class="progress" style="height:9px; margin:8px 0;">
						  <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="4" aria-valuemin="0" aria-valuemax="5" style="width:{{$percFour}}%">
							<span class="sr-only">80% Complete (danger)</span>
						  </div>
						</div>
					</div>
					<div class="pull-right" style="margin-left:10px;">{{$four}}</div>
				</div>
				<div class="pull-left">
					<div class="pull-left" style="width:35px; line-height:1;">
						<div style="height:9px; margin:5px 0;">3 <span class="glyphicon glyphicon-star"></span></div>
					</div>
					<div class="pull-left" style="width:180px;">
						<div class="progress" style="height:9px; margin:8px 0;">
						  <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="3" aria-valuemin="0" aria-valuemax="5" style="width: {{$percThree}}%;background-color:#66ccff">
							<span class="sr-only">80% Complete (danger)</span>
						  </div>
						</div>
					</div>
					<div class="pull-right" style="margin-left:10px;">{{$three}}</div>
				</div>
				<div class="pull-left">
					<div class="pull-left" style="width:35px; line-height:1;">
						<div style="height:9px; margin:5px 0;">2 <span class="glyphicon glyphicon-star"></span></div>
					</div>
					<div class="pull-left" style="width:180px;">
						<div class="progress" style="height:9px; margin:8px 0;">
						  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="5" style="width: {{$percTwo}}%;background-color:#ffa500">
						  </div>
						</div>
					</div>
					<div class="pull-right" style="margin-left:10px;">
                    <input type="hidden"  id="filter" name="tw" value="2">
                    {{$two}}
                    </div>
				</div>
				<div class="pull-left">
					<div class="pull-left" style="width:35px; line-height:1;">
						<div style="height:9px; margin:5px 0;">1 <span class="glyphicon glyphicon-star"></span></div>
					</div>
					<div class="pull-left" style="width:180px;">
						<div class="progress" style="height:9px; margin:8px 0;">
						  <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="1" aria-valuemin="0" aria-valuemax="5" style="width: {{$percOne}}%;background-color:#ff0000">
						  </div>
						</div>
					</div>
					<div class="pull-right" style="margin-left:10px;">
                    <input type="hidden"  id="filter" name="tw" value="2">
                  
                    {{$one}}
                    </div>
				</div>
			</div>			
		</div>			
		
		<div class="row">
			<div class="col-sm-10">
				<hr/>
				<div class="review-block">
                    @foreach($rating as $rtg)
					<div class="row">
						<div class="col-sm-3">
							<img src="{{URL::to($rtg->users->image)}}" class="img-rounded" width="50px" height="50px;">
							<div class="review-block-name"  style="padding-left:8px;font-weight:bold">{{$rtg->users->name}}</div>
							<div class="review-block-date">{{$rtg->created_at}}<br/> {{ Carbon\Carbon::parse($rtg->created_at)->diffForHumans()}} </div>
            
            </div>
						<div class="col-sm-9">
                        <input id="input-1" name="input-1" class="rating rating-loading" data-min="0" data-max="5" data-step="0.1" value="{{ $rtg->star }}" data-size="xs" disabled="">
                        <div class="review-block-description" style="padding:15px">{{$rtg->comment}}</div>

							</div>
							
						</div>
					</div>
                    <hr/>
                    @endforeach
					
					
				</div>
			</div>
		</div>
		
    </div> <!-- /container -->
    </div>
                    </article>
                </div>

</div>
 



          

@endsection


