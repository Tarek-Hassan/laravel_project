<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">

    @yield('title')

  <!--  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type=' text/css'> -->
    <link href="css/toolkit.css" rel="stylesheet">
    
    <link href="css/application.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <style>
      /* note: this is a hack for ios iframe for bootstrap themes shopify page */
      /* this chunk of css is not part of the toolkit :) */
      body {
        width: 1px;
        min-width: 100%;
        *width: 100%;
      }
    </style>

  </head>


<body class="bjy">
<div class="bkk" id="app-growl"></div>

<nav class="ck mo zq mt qh app-navbar">

  <a class="e" href="{{url('home')}}">
    <img src="img/brand-white.png" alt="brand">
  </a>

  <button
    class="mk blk se"
    type="button"
    data-toggle="collapse"
    data-target="#navbarResponsive"
    aria-controls="navbarResponsive"
    aria-expanded="false"
    aria-label="Toggle navigation">
    <span class="ml"></span>
  </button>

  <div class="collapse f" id="navbarResponsive">
    <ul class="navbar-nav adn">
      <li class="md active">
        <a class="mb" href="{{url('home')}}">Home <span class="zt">(current)</span></a>
      </li>
      <li class="md">
        <a class="mb" href="{{ url('profile') }}">Profile</a>
      </li>
      <li class="md">
        <a class="mb" data-toggle="modal" href="#msgModal">Messages</a>
      </li>
      <li class="md">
        <!-- <a class="mb" href="docs/index.html">Docs</a> -->
      </li>

      <li class="md se">
        <a class="mb" href="{{ url('notifications') }}">Notifications</a>
      </li>
      <li class="md se">
        <a class="mb" data-action="growl">Growl</a>
      </li>
      <li class="md se">
        <a class="mb" href="{{ url('login') }}">Logout</a>
      </li>

    </ul>

    <form class="kl zc ro sk">
      <input class="form-control" type="text" data-action="grow" placeholder="Search">
    </form>

    <ul id="#js-popoverContent" class="nav navbar-nav zc aah ro sk">
      <li class="md">
        <a class="g mb" href="{{ url('notifications') }}" title="notification">
          <span class="h avv"></span>
        </a>
      </li> 
       <li class="md aax">
        <button class="cg bll blm bkf" data-toggle="popover">
          <img class="rl" src="img/avatar-dhg.png">
        </button>
      </li>
    <ul class="nav navbar-nav ro" id="js-popoverContent">
      <li class="md"><a class="mb" href="#" data-action="growl">Growl</a></li>
      <li class="md"><a class="mb" href="{{ url('login') }}">Logout</a></li>
    

    </ul>
  </div>
</nav>
<div class="cd fade" id="msgModal" tabindex="-1" role="dialog" aria-labelledby="bln" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="d">
        <h5 class="modal-title">Messages</h5>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      </div>
