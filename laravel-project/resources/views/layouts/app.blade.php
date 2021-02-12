<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/carousel.js') }}" defer></script>
    <script src="{{ asset('js/xzoom.js') }}" defer></script>
    <script src="{{ asset('js/xzoom.css') }}" defer></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.12.0/js/mdb.min.js" rel="stylesheet" />

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js">  </script>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.css" rel="stylesheet"> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.0.2/css/star-rating.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.0.2/js/star-rating.min.js"></script>
<link href="css/bootstrap.min.css" rel="stylesheet">


<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="css/navbar-fixed-top.css" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
<!--[if lt IE 9]><script src="assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
<script src="js/ie-emulation-modes-warning.js"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/rating.css') }}" rel="stylesheet">
    <link href="{{ asset('css/carousel.css') }}" rel="stylesheet">


      @yield('style')
</head>
<body class="d-flex flex-column">
<div id="app">
  <header>
        <nav class="navbar navbar-expand-lg  nav-br" >
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                <div class="logo">
                    <img src="{{url('../public/logo/logo/logo7.png')}}" alt=".." height="130px" width="170px"/>
              </div>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto" style="position:relative;left:-90px">
                    <?php
        $categories=DB::table('categories')->get();
        $brands=DB::table('brands')->get();
                  ?>
               <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Категории
                </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              @foreach($categories  as $category)
                <a class="dropdown-item" href="{{route('categories',$category->id)}}">{{$category->name}}</a>
                @endforeach
               </div>
               </li>
               <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Брандове
                </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              @foreach($brands  as $brand)
                <a class="dropdown-item" href="{{route('brands',$brand->id)}}">{{$brand->name}}</a>
                @endforeach
               </div>
               </li>
                    </ul>

          
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                        <li class="nav-item" id="log-reg">
                                <a class="nav-link"  href="{{ route('login') }}" >{{ __('Вход') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item dropdown" id="log-reg">
                                    <a class="nav-link" id="reg" href="{{ route('register') }}" >{{ __('Регистрация') }}</a>
                                </li>
            
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            

                                {{ Auth::user()->name }} 
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                             
                               <a href="{{route('user.profile.show',Auth::user()->id)}}" class="dropdown-item">
                                    Моят профил
                                    </a>
                                    <a href="{{route('orders.index',Auth::user()->id)}}" class="dropdown-item">
                                    Направени поръчки
                                    </a>
                                   
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Изход') }}
                                    </a>
                                   
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            
                                   
                            <?php
        
        $cartss=DB::table('carts')->where('user_email',Auth::user()->email)->count();
              
        
                  ?>
                                <div class="widget-header">
    <a href="{{route('cart')}}" class="icontext">
        <div class="icon-wrap icon-xs bg2 round text-secondary"><i
                class="fa fa-shopping-cart fa-2x"></i></div>
        <div class="text-wrap">
            <small>({{ $cartss }}) </small>
        </div>
    </a>
</div>
@can('admin-publ')
<div class="vl"></div>
<a class="nav-link"  href="{{ route('login') }}" id="new-br">{{ __('Създай нов бранд') }}</a>
@endcan
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        @guest
        @else
        @can('admin-publ')
        <nav class="navbar navbar-expand-lg  nav-br2" >
            <div class="container" id="nav-adpub">
               
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                    <?php
        $categories=DB::table('categories')->get();
        $brands=DB::table('brands')->get();
                  ?>
               <li class="nav-item dropdown" style="dislay:none">
              
               </li>
               <li class="nav-item dropdown" style="dislay:none">
              
               </li>
               @can('admin')
               <li class="nav-item">
                                <a class="nav-link" href="{{route('admin.users.index')}}" >{{ __('Потребители') }}</a>
                            </li>

                           
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('category.create') }}">{{ __('Категории') }}</a>
                               </li>

    
                               <li class="nav-item">
                                <a class="nav-link" href="{{ route('brand.index') }}">{{ __('Брандове') }}</a>
                               </li>
                            
                            
                          <li class="nav-item">
                                <a class="nav-link" href="{{ route('product.index') }}">{{ __('Продукти') }}</a>
                            </li>
                            @endcan
                            @can('publ')
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('brand.indexp') }}">{{ __('Брандове') }}</a>
                               </li>
                            
                            
                          <li class="nav-item">
                                <a class="nav-link" href="{{ route('product.indexp') }}">{{ __('Продукти') }}</a>
                            </li>
                            @endcan
                               @can('admin')
                               <li class="nav-item">
                                <a class="nav-link" href="{{ route('rating.index') }}">{{ __('Ревюта') }}</a>
                               </li>
                               <li class="nav-item">
                                <a class="nav-link" href="{{ route('admin.orders.index') }}">{{ __('Поръчки') }}</a>
                            </li>
                            @endcan
                               <li class="nav-item">
                                <a class="nav-link" href="{{ route('orders.publisher') }}">{{ __('Поръчки за изпълнение') }}</a>
                               </li>
                             
                    </ul>
          
      
                    <!-- Right Side Of Navbar -->
                   
                </div>
            </div>
        </nav>
      @endcan
        @endguest
 <!--Carousel-->
     @yield('header')
</header>
  
<div class="container2" style="border:2px" >
  
  @yield('brand')
  
    
  
</div>


	
        <main class="container-fluid " id="main">
      
        
            @yield('content')
        </main>

        <main class="container-fluid " id="main2">
      
       
          @yield('content2')
        </main>

        <main class="container-fluid " id="main3">
      
       
          @yield('content3')
        </main>

      
        <main class="container-fluid " id="main4">
      
        
      @yield('content5')
  </main>
    
  <main class="container-fluid " id="brand-slider">
  @yield('brand-slider')
  </main>
        <footer class="page-footer font-small  pt-4" id="footer" >
<!-- Call to action -->
<ul class="list-unstyled list-inline-block text-center py-2">
        <li class="list-inline-item" id="footer-menu">
          <a href="#!">Начало</a>
        </li>
        <li  class="list-inline-item" id="footer-menu">
          <a href="#!">За нас</a>
        </li>
        <li class="list-inline-item" id="footer-menu">
          <a href="#!">Условия</a>
        </li>
        <li class="list-inline-item" id="footer-menu">
          <a href="#!">Поверителност</a>
        </li>
        <li class="list-inline-item" id="footer-menu">
          <a href="#!">Контакти</a>
        </li>
      </ul>

<!-- Call to action -->

<svg height="10px" width="1300px">
   <line x1="100" y1="0" x2="1200" y2="0" style="stroke:#ffffff;stroke-width:1" />
   </svg>

<!-- Social buttons -->
<ul class="list-unstyled list-inline text-center">
  <li class="list-inline-item">
    <a class="btn-floating btn-fb mx-1">
      <i class="fa fa-facebook-f" id="icon-sc"> </i>
    </a>
  </li>
  <li class="list-inline-item">
    <a class="btn-floating btn-tw mx-1">
      <i class="fa fa-twitter" id="icon-sc"> </i>
    </a>
  </li>
  <li class="list-inline-item">
    <a class="btn-floating btn-pinterest mx-1">
      <i class="fa fa-pinterest" id="icon-sc"> </i>
    </a>
  </li>
  <li class="list-inline-item">
    <a class="btn-floating btn-instagram mx-1">
      <i class="fa fa-instagram" id="icon-sc"> </i>
    </a>
  </li>
</ul>
<!-- Social buttons -->

<!-- Copyright -->
<div class="footer-copyright text-center py-3">© 2020 Copyright:XXX
 
</div>

</footer>



</div>
    
</body>
</html>
<script type="text/javascript" src="{{ asset('js/zoomsl.js') }}" defer>
</script>
<script type="text/javascript" src="{{ asset('js/zoomsl.min.js') }}" defer>
</script>
<script type="text/javascript">
$(document).ready(function(){
$(".small_img").click(function(){
$(".big_img").attr('src',$(this).attr('src'));
});
});
</script>

<script type="text/javascript">
$(document).ready(function(){
$(".big_img").imagezoomsl({
zoomrange:[3,3]
});
});
</script>

