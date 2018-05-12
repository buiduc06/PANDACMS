@extends('admin.auth.layouts.main')
@section('name', 'LOGIN ADMIN')
@section('content')


<div class="login-box">
  <div class="login-logo">
    <a href="{{route('admin')}}"><b>Panda</b>Admin</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Forgot Password</p>

    <form action="{{route('login')}}" method="post" class="form-element">
    	{{csrf_field()}}
      <div class="form-group has-feedback">
        <input type="email" class="form-control" placeholder="Email" name="email">
        <span class="ion ion-email form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-12 text-center">
          <button type="submit" class="btn btn-info btn-block btn-flat margin-top-10">FORGOT PASSWORD</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
    <br>
  </div>
  <!-- /.login-box-body -->
</div>


@endsection