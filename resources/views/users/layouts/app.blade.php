<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{asset('frontend/images/favicon.ico')}}">

    <title>Laravel-Realtime-Chat</title>
    
	<!-- Vendors Style-->
	<link rel="stylesheet" href="{{asset('frontend/css/vendors_css.css')}}">
	  
	<!-- Style-->  
	<link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
	<link rel="stylesheet" href="{{asset('frontend/css/skin_color.css')}}">
  </head>

<body class="hold-transition light-skin theme-primary fixed sidebar-collapse">
	
<div class="wrapper">
	@yield('loader')
	
  <header class="main-header">
	<div class="d-flex align-items-center logo-box justify-content-start">	
		<!-- Logo -->
		<a href="index.html" class="logo">
		  <!-- logo-->
		  <div class="logo-mini w-50">
			  <span class="light-logo"><img src="{{asset('frontend/images/logo-letter.png')}}" alt="logo"></span>
			  <span class="dark-logo"><img src="{{asset('frontend/images/logo-letter.png')}}" alt="logo"></span>
		  </div>
		  <div class="logo-lg">
			  {{-- <span class="light-logo"><img src="{{asset('frontend/images/logo-dark-text.png')}}" alt="logo"></span>
			  <span class="dark-logo"><img src="{{asset('frontend/images/logo-light-text.png')}}" alt="logo"></span> --}}
			  Laravel Realtime Chat
		  </div>
		</a>
		<div class="app-menu">
		</div>	
	</div>  
	<nav class="navbar navbar-static-top">
		<div class="app-menu">
		</div>
		<div class="logo-lg">
			@yield('chatname')
		</div>
	  </nav>
  </header>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	  <div class="container-full">
		<!-- Main content -->
		@yield('content')
		<!-- /.content -->
	  </div>
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right d-none d-sm-inline-block">
        <ul class="nav nav-primary nav-dotted nav-dot-separated justify-content-center justify-content-md-end">
		  <li class="nav-item">
			<a class="nav-link" href="javascript:void(0)">FAQ</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="#">Purchase Now</a>
		  </li>
		</ul>
    </div>
	  &copy; <script>document.write(new Date().getFullYear())</script> <a href="https://www.multipurposethemes.com/">Multipurpose Themes</a>. All Rights Reserved.
  </footer>
  
</div>
<!-- ./wrapper -->
		
	
	<!-- Page Content overlay -->
	
	
	<!-- Vendor JS -->
	<script src="{{asset('frontend/js/vendors.min.js')}}"></script>
	<script src="{{asset('frontend/js/pages/chat-popup.js')}}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.28.0/feather.min.js"></script>
		
	<!-- Chat-Bot Admin App -->
	<script src="{{asset('frontend/js/template.js')}}"></script>
	<script src="{{asset('frontend/js/pages/dashboard.js')}}"></script>
	@yield('script')
</body>
</html>
