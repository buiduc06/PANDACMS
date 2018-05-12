@extends('admin.auth.layouts.main')
@section('name', 'LOGIN ADMIN')
@section('content')
<style>
.error{
  color: #e22c2c;
  font-size: 12px;
}
small{
  color:#e22c2c;
}
</style>

<div class="login-box">
  <div class="login-logo">
    <a href="{{route('admin')}}"><b>Panda</b>Admin</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>

    <form action="{{route('login')}}" method="post" class="form-element" id="login">
    	{{csrf_field()}}
      <div class="form-group has-feedback">
        <input type="email" class="form-control" placeholder="Email" name="email">
        <span class="ion ion-email form-control-feedback"></span>
        @if ($errors->has('email'))
            <small>{{ $errors->first('email') }}</small>
        @endif
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" name="password">
        <span class="ion ion-locked form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-6">
          <div class="checkbox">
            <input type="checkbox" id="basic_checkbox_1" name="remember" {{ old('remember') ? 'checked' : '' }}>
            <label for="basic_checkbox_1">Remember Me</label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-6">
         <div class="fog-pwd">
           <a href="{{route('forgotpwd')}}"><i class="ion ion-locked"></i> Forgot pwd?</a><br>
         </div>
       </div>
       <!-- /.col -->
       <div class="col-12 text-center">
        <button type="submit" class="btn btn-info btn-block btn-flat margin-top-10">SIGN IN</button>
      </div>
      <!-- /.col -->
    </div>
  </form>

  <div class="social-auth-links text-center">
    <p>- OR -</p>
    <a href="#" class="btn btn-social-icon btn-circle btn-facebook"><i class="fa fa-facebook"></i></a>
    <a href="#" class="btn btn-social-icon btn-circle btn-google"><i class="fa fa-google-plus"></i></a>
  </div>
  <!-- /.social-auth-links -->

  <div class="margin-top-30 text-center">
   <p>Don't have an account? <a href="{{route('register')}}" class="text-info m-l-5">Sign Up</a></p>
 </div>

</div>
<!-- /.login-box-body -->
</div>


@endsection

@section('js')
<script>
	$(document).ready(function() {
   
        //Khi bàn phím được nhấn và thả ra thì sẽ chạy phương thức này
        $("#login").validate({
          rules: {
            password: "required",
            email: {
              required: true,
              email: true
            }
          },
          messages: {
            password: "Please enter your password",
            email: {
              required: "Please enter your email",
              email: "Email invalidate Example: abc@gmail.com"
            }
          }
        });
      });
    </script>
    @endsection