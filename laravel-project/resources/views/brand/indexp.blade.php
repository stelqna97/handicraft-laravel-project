@extends('layouts.app')

@section('style')
<style>
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
  top:-47px;
  position: relative;
  font-size:11px;
  border-top:0;
  box-shadow:none;
}
#create2 label{
  color:#000;
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
#create2 .panel-primary{
 
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

div.panel-primary{
  background-color:white;
  width:350px;
  border:0;
box-shadow:0;
}
.col-md-6{
  box-shadow:0;
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


<div class="row justify-content-center" id="create">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Създадени брандове</div>

                <div class="card-body">
                  
                   <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Лого</th>
      <th scope="col">Име</th>
      <th scope="col">За бранда</th>
      <th scope="col">Контакти</th>
      <th scope="col">Доставка</th>
      <th style="width:100px; min-width:100px;" class="text-center text-danger"><i class="fa fa-bolt"> </i><i class="fa fa-bolt"> </i></th>
    </tr>
  </thead>
  <tbody>
  @foreach($brand as $bra)    <tr>
    <th scope="row">{{$bra->id}}</th>
<td><img src="{{URL::to($bra->logo)}}" alt="" height="70px" width="80px"></td>
<td>{{$bra->name}}</td>
<td>{{str_limit($bra->detail_about,$limit=50)}}</td>
<td>{{str_limit($bra->detail_contact,$limit=50)}}</td>
<td>{{str_limit($bra->detail_delivery,$limit=50)}}</td>

      <td id="action">
    
      <a href="{{ route('brand.edit',$bra->id)}}"><button type="button"  class="btn">
      <i class="fa fa-edit" style="font-size:20px;color:#cccc00" id="edit" ></i></button></a>

        
      <form action="{{ route('brand.destroy',$bra->id)}}" method="POST" class="float-left" id="delete" >

          @csrf
     <button type="submit" class="btn btn-warning"> <i class="fa fa-trash" style="font-size:20px;color:#cc0000"></i></button>
      </form>
      <a href="{{ route('brand.show',$bra->id)}}"><button type="button" class="btn ">
      <i class="fa fa-eye" style="font-size:20px;color:#2eb82e" id="view" ></i></button></a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
{!! $brand->links() !!}

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

                <li><a href="#"> Добави нов потребител</a></li>
                
	            </ul>
        </div>
			</div>
		</div>
		
	</div>

  <div class="container" >
    <div class="row justify-content-center"  id="create2">
        <div class="col-md-12" >
            <div class="card" id="card-sh">
                <div class="card-header">Филтрирай
                <span class="pull-right clickable pull2"><i class="glyphicon glyphicon-chevron-down"></i></span>  </div>

                <div class="card-body">
<form  method="GET">
  <div class="form-group row">
    <label for="filter" class="col-md-4 col-form-label text-md-right">Име</label>
    <div class="col-md-6">
    <input type="text" class="form-control" id="filter" name="name"  value="{{$name ?? ''}}">
    </div>
  </div>
  
  <div class="form-group row">
    <label for="filter" class="col-md-4 col-form-label text-md-right">Дата на създаване</label>
    <div class="col-md-6">
    <input type="date" class="form-control" id="filter" name="data"  value="{{$data ?? ''}}">
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

<div class="col-md-6" id="sort">
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