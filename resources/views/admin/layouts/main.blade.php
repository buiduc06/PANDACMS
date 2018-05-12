<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{asset('images/favicon.ico')}}">

    <title>@yield('name', 'Minimal Admin - Dashboard')</title>
    @include('admin.layouts.css')
    @yield('css')
</head>

<body class="hold-transition skin-blue sidebar-mini">
    @hasSection('custom-content')
    @yield('custom-content')
    @endif

    @hasSection('content')
    <div class="wrapper">
     @include('admin.layouts.header')

     <!-- Left side column. contains the logo and sidebar -->
     @include('admin.layouts.sideleft')

     <!-- Content Wrapper. Contains page content -->
     <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">

            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                @php
                $rq = Request::path();
                $pathurl = explode('/', $rq);
                if (count($pathurl)>1) {
                    for ($i=1; $i < sizeof($pathurl)-1 ; $i++) { 
                       echo '<li class="breadcrumb-item active">'.$pathurl[$i].'</li>';
                    }
                }
                @endphp
                @hasSection('namepage')
                 <li class="breadcrumb-item active">@yield('namepage')</li>
                @endif
            </ol>
        </section>
        <!-- Main content -->
        @yield('content')
    </div>
    <!-- /.content-wrapper -->
    @include('admin.layouts.footer')

    <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
@endif

@include("admin.layouts.js")
@yield('js')

@if(Session()->has('msg'))

<script>
   alert("{{Session::get('msg')}}");
</script>
@endif
</body>

</html>