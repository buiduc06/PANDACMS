@extends('admin.auth.layouts.main')
@section('name', 'Register')
@section('content')
<style>
.error{
  color: #e22c2c;
  font-size: 12px;
}
</style>
<div class="register-box">
  <div class="register-logo">
    <a href="{{route('login')}}"><b>Minimal</b>Admin</a>
  </div>

  <div class="register-box-body">

    <p class="login-box-msg">Register a new membership</p>

    <form action="{{route('register')}}" method="post" class="form-element" id="register">
     {{csrf_field()}}
     <div class="form-group has-feedback">
      <input type="text" class="form-control" name="name" placeholder="Full name" value="{{old('name','')}}">
      <span class="ion ion-person form-control-feedback "></span>
      @if(count($errors) > 0)
      <small style="color: red">{{$errors->first('name')}}</small>
      @endif
    </div>
    <div class="form-group has-feedback">
      <input type="email" name="email" class="form-control" placeholder="Email" value="{{old('email','')}}">
      <span class="ion ion-email form-control-feedback "></span>
      @if(count($errors) > 0)
      <small style="color: red">{{$errors->first('email')}}</small>
      @endif
    </div>
    <div class="form-group has-feedback">
      <input type="password" name="password" id="password" class="form-control" placeholder="Password">
      <span class="ion ion-locked form-control-feedback "></span>
      @if(count($errors) > 0)
      <small style="color: red">{{$errors->first('password')}}</small>
      @endif
    </div>
    <div class="form-group has-feedback">
      <input type="password" name="password_confirmation" class="form-control" placeholder="Retype password">
      <span class="ion ion-log-in form-control-feedback "></span>
      @if(count($errors) > 0)
      <small style="color: red">{{$errors->first('password_confirmation')}}</small>
      @endif
    </div>
    <div class="row">
      <div class="col-12">
        <div class="checkbox">
          <input type="checkbox" id="basic_checkbox_1" checked="checked">
          <label for="basic_checkbox_1">I agree to the <a href="#"><b>Terms</b></a></label>
        </div>
      </div>
      <!-- /.col -->
      <div class="col-12 text-center">
        <button type="submit" class="btn btn-info btn-block btn-flat margin-top-10">SIGN UP</button>
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

  <div class="margin-top-20 text-center">
   <p>Already have an account?<a href="{{route('login')}}" class="text-info m-l-5"> Sign In</a></p>
 </div>

</div>
<!-- /.form-box -->
</div>
<!-- /.register-box -->


@endsection

@section('js')
<script>
  $(document).ready(function() {

    $("#register").validate({
      rules: {
        Terms: "required",
        name: "required",
        email: {
          required: true,
          email: true
        },
        password: {
          required: true,
          minlength: 6,
        },
        password_confirmation: {
          equalTo: "#password"
        }
      },
      messages: {
        Terms: "please agree to the Terms",
        name: "please enter your name",
        email: {
          required: "please enter your email",
          email: "Email invalidate Example: abc@gmail.com"
        },password: {
          required: "Please enter your password",
          minlength: "Password length must not be less than 6 characters",
        },
        password_confirmation: {
          equalTo: "Retype password must be the same password"
        }
      }
    });
  });
</script>
@endsection