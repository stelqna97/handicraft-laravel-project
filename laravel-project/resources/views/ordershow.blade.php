@extends('layouts.app')

@section('style')
<style>
html, body {
  height: 500vh;
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

#create2 .panel-primary{
  background: rgb(0,0,0);
background: radial-gradient(circle, rgba(0,0,0,1) 0%, rgba(38,38,38,1) 100%);
font-size:12px;
}
#sidebar{
  background:none;
  border:0;
  position:absolute;
  left:-25px;
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
  width: 105%;
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
#action button{
display:inline-block;
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
  height:50px;
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

.container .col-md-4{
  font-size:13px;
}

#create .form-check{
  position:relative;
  left:0px;
}

#edit{
  position:relative;
  left:-20px;
  top:0px;
}


#delete button{
  position:relative;
  left:10px;
  top:-35px;
  border:0;
  color:#262626;
}


#view{
  position:relative;
  left:25px;
  top:0px;
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
.container {
  background:white;
  width:90%;
  max-height:900px;
  position:relative;
  left:-15px;
  top:0px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

}
.container #create{
  height:400px;
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

<div class="container" >
    
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                    <div class="row mb-4">
                        <div class="col-6">
                            <h2 class="page-header" style="font-weight:bold"><i class="fa fa-globe"></i> Поръчка {{ $order->order_number }}</h2>
                        </div>
                        <div class="col-5">
                            <h5 class="text-right" style="position:relative;top:50px">Дата: {{ $order->created_at }}</h5>
                        </div>
                    </div>
                    <div class="row invoice-info">
                        <div class="col-4">Публикувана от
                            <address><strong>{{ $user->name }}</strong><br>Email: {{ $user->email }}</address>
                        </div>
                        <div class="col-4">Доставка до 
                            <address><strong>{{ $order->first_name }} {{ $order->last_name }}</strong><br>{{ $order->address }}<br>{{ $order->city }}, {{ $order->country }} {{ $order->post_code }}<br>{{ $order->phone_number }}<br></address>
                        </div>
                        
                        <div class="col-4">
                            <b>Цена:</b> {{ round($order->grand_total, 2) }}<br>
                            <b>Статус:</b> {{ $order->status }}<br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>Продукт</th>
                                    <th>Количество</th>
                                    <th>Цена на продукта</th>
                                    <th>Обща сума</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($items as $item)
                                        <tr>
                                            <?php
                                            $product=DB::table('products')->where('id',$item->product_id)->first();
                                            ?>
                                            <td><img src="{{URL::to($product->image)}}" alt="" height="70px" width="80px"><br>{{ $product->product_name }}</td>
          
                                  <td>{{ $item->quantity }}</td>
                                            <td>{{ round($item->price, 2) }} лв.</td>
                                            <td style="color:green">{{ $item->quantity*$item->price }} лв.</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
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


		<div class="col-md-6">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title" style="  font-weight:bold">Опции</h3>
					<span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-down"></i></span>
        </div>
        <hr>
				<div class="panel-body">
        <ul class="cat">

                <li><a href="{{route('user.profile.edit',$user->id)}}"> Всички поръчки </a></li>
                <li><a href="{{route('user.profile.edit',$user->id)}}"> Редактирай</a></li>

	            </ul>
        </div>
			</div>
		</div>
		
	</div>

 
      
@endsection




