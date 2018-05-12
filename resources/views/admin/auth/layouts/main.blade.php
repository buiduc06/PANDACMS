<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="{{asset('images/favicon.ico')}}">

  <title>@yield('name', 'Login') </title>
  
  <!-- Bootstrap 4.0-->
  <link rel="stylesheet" href="{{asset('assets/vendor_components/bootstrap/dist/css/bootstrap.min.css')}}">
  
  <!-- Bootstrap 4.0-->
  <link rel="stylesheet" href="{{asset('assets/vendor_components/bootstrap/dist/css/bootstrap-extend.css')}}">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('assets/vendor_components/font-awesome/css/font-awesome.min.css')}}">

  <!-- Ionicons -->
  <link rel="stylesheet" href="{{asset('assets/vendor_components/Ionicons/css/ionicons.min.css')}}">

  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('css/master_style.css')}}">
  <link rel="stylesheet" href="{{asset('css/skins/_all-skins.css')}}">	

  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

</head>
<body class="hold-transition login-page">
  @yield('content')
  <!-- /.login-box -->


  <!-- jQuery 3 -->
  <script src="{{asset('assets/vendor_components/jquery/dist/jquery.min.js')}}"></script>
  
  <!-- popper -->
  <script src="{{asset('assets/vendor_components/popper/dist/popper.min.js')}}"></script>
  
  <!-- Bootstrap 4.0-->
  <script src="{{asset('assets/vendor_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
  @if(Session()->has('msg'))

<script>
   alert("{{Session::get('msg')}}");
</script>
@endif
  @yield('js')
</body>
</html>
