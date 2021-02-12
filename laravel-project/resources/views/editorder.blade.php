

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
  left:40px;
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
<div class="container" id="create">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Промени поръчка  {{$order->order_number}}  </div>

                <div class="card-body">
                  
                <form action="{{route('admin.orders.update',$order->id)}}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }} 

               

                <div class="form-group row">
                            <label for="ciry" class="col-md-4 col-form-label text-md-right">Град </label>

                            <div class="col-md-6">
                                <input id="city" type="text" class="form-control " name="city" value="{{$order->city}}"  >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">Адрес </label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control " name="address" value="{{$order->address}}"  >
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone_number" class="col-md-4 col-form-label text-md-right">Телефонен номер </label>

                            <div class="col-md-6">
                                <input id="phone_number" type="text" class="form-control " name="phone_number" value="{{$order->phone_number}}"  >
                            </div>
                        </div>
                       <div class="form-group row">
                        <label for="brand" class="col-md-4 col-form-label text-md-right">Статус </label>
                        <div class="col-md-6">
             <select name="status"  >
        <option value="pending"    @if (($order->status)=="Предстоящ")) selected @endif >Предстоящ</option>
        <option value="processing" @if (($order->status)=="Обработване")) selected @endif>Обработване</option>
        <option value="complited" @if (($order->status)=="Завършен")) selected @endif >Завършен</option>
        <option value="decline" @if (($order->status)=="Отказано")) selected @endif>Отказано</option>
    </select>        
    </div>
                        </div>
                        
        
                    <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Промени') }}
                                </button>
                            </div>
                        </div>
            </form>
                </div>
            </div>
            
        </div>
    </div>
</div>

@endsection