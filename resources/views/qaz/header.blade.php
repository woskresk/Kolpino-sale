<!DOCTYPE html>
<html lang="en">
<head>
<title>E-Commerce</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="e-commerce site well design with responsive view." />
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<link href="{{ URL::asset('image/232.png') }}" rel="icon" />
<link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet" media="screen" />
<link href="{{ URL::asset('javascript/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />

<!-- Fonts -->
<link href='http://fonts.googleapis.com/css?family=Roboto+Slab' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Arimo' rel='stylesheet' type='text/css'>
<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<link href="{{ URL::asset('css/stylesheet.css') }}" rel="stylesheet">
<link href="{{ URL::asset('css/responsive.css') }}" rel="stylesheet">
<link href="{{ URL::asset('javascript/owl-carousel/owl.carousel.css') }}" type="text/css" rel="stylesheet" media="screen" />
<link href="{{ URL::asset('javascript/owl-carousel/owl.transitions.css') }}" type="text/css" rel="stylesheet" media="screen" />
<script src="{{ URL::asset('javascript/jquery-2.1.1.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('javascript/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script type="text/javascript" src="{{ URL::asset('javascript/template_js/jstree.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('javascript/template_js/template.js') }}"></script>
<script src="{{ URL::asset('javascript/common.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('javascript/global.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('javascript/owl-carousel/owl.carousel.min.js') }}" type="text/javascript"></script>

</head>
<body>
<div class="preloader loader" style="display: block;"> <img src="{{ URL::asset('image/loader.gif') }}"  alt="#"/></div>
<header>
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="top-left pull-left">
                        
                    </div>
                    <div class="top-right pull-right">
                        <div id="top-links" class="nav pull-right">
                            <ul class="list-inline">
                                <li class="dropdown"><a href="#" title="My Account" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <span>Аккаунт</span> <span class="caret"></span></a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="{{ route('products.index') }}">Объявления</a></li>
                                        <li><a href="{{ route('login') }}">Вход</a></li>
                                        <li><a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">Выход</a></li>
 
                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                         @csrf
                                     </form>


                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="header-inner">
            <div class="col-sm-4 col-xs-6 header-left">
                <div class="shipping">
                    
                    <a href="{{route('index')}}"><img src="{{ URL::asset('image/images.jpg') }}" alt="E-Commerce" style="width: 200px;" /></a>
                    
                </div>
                
            </div>
            <div class="col-sm-4 col-xs-6 header-middle">
                <div class="header-middle-top">
                    
                    <div id="logo"> <a href="{{route('index')}}"><img src="{{ URL::asset('image/logo.png') }}" title="E-Commerce" alt="E-Commerce" class="img-responsive" /></a> </div>
                </div>
            </div>
            <div class="col-sm-4 col-xs-6 header-right">
                
                <div id="search" class="input-group">
                <form action="{{route('search')}}" method="post">
                    @csrf
                    <input type="text" name="search" value="" placeholder="Поиск услуги" class="form-control input-lg" />
                    <span class="input-group-btn">
                    <button type="submit" class="btn btn-default btn-lg"><i class="fa fa-search"></i></button>
                    </span> 
                </form>
                </div>
            </div>
        </div>
    </div>
</header>
<nav id="menu" class="navbar">
    <div class="nav-inner container">
        <div class="navbar-header"><span id="category" class="visible-xs">Categories</span>
            <button type="button" class="btn btn-navbar navbar-toggle" ><i class="fa fa-bars"></i></button>
        </div>
        <div class="navbar-collapse">
            <ul class="main-navigation">
                <li><a href="{{ route('index') }}"    class="parent"  >Главная</a> </li>
                <li><a href="{{ route('take.category', ['fashion']) }}"   class="parent"  >Красота</a> </li>
                <li><a href="{{ route('take.category', ['helth']) }}"   class="parent"  >Здоровье</a> </li>
                <li><a href="{{ route('take.category', ['fun']) }}"   class="parent"  >Развлечение</a> </li>
                <li><a href="{{ route('take.category', ['cultur']) }}"   class="parent"  >Культура</a> </li>
                <li><a href="{{ route('contacts') }}"   class="parent"  >Контакты</a> </li>
                
            </ul>
        </div>
    </div>
</nav>