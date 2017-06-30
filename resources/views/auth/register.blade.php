@extends('auth.layout')

@section('content')
<div class="register-box">
  <div class="register-logo">
    <b>Admin</b>LTE</a>
  </div>  
{{-- ---------------------------------------------------name------------------------------------------------------------- --}}
    <div class="register-box-body">
    <p class="login-box-msg">Register a new membership</p>
    <form action="{{ route('register') }}" method="post">
    {{ csrf_field() }}
    <div class="form-group has-feedback {{ $errors->has('name') ? ' has-error' : '' }}">
      <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Full name" required autofocus>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
          @if ($errors->has('name'))
            <span class="help-block">
            <strong>{{ $errors->first('name') }}</strong>
        </span>
      @endif      
    </div>
{{-- ---------------------------------------------------Email----------------------------------------------------------- --}}
  <div class="form-group has-feedback {{ $errors->has('email') ? ' has-error' : '' }}">
      <input type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}"  required>
      <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      @if ($errors->has('email'))
        <span class="help-block"><strong>{{ $errors->first('email') }}</strong></span>
      @endif
      </div>
{{-- --------------------------------------------------Password---------------------------------------------------------- --}}
    <div class="form-group has-feedback {{ $errors->has('password') ? ' has-error' : '' }}" >
      <input type="password" class="form-control" name="password" placeholder="Password" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          @if ($errors->has('password'))
            <span class="help-block"><strong>{{ $errors->first('password') }}</strong></span>
          @endif       
    </div>
{{-- --------------------------------------------------Password confirm---------------------------------------------------- --}}
      <div class="form-group has-feedback">
      <input type="password" class="form-control" name="password_confirmation" placeholder="Retype password" required>
       <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
      </div>
{{-- --------------------------------------------------------end---------------------------------------------------------- --}}
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> I agree to the <a href="#">terms</a>
            </label>
          </div>
        </div>
        <!-- /.col -->
{{-- --------------------------------------------------------checkbox---------------------------------------------------------- --}}

        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
{{-- --------------------------------------------------------submit Register-------------------------------------------------- --}}
    <div class="social-auth-links text-center">
      <p>- OR -</p>
      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign up using
        Facebook</a>
      <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign up using
        Google+</a>
    </div>
{{-- --------------------------------------------------------submit (Facebook) (Google)------------------------------------------- --}}

    <a href="login" class="text-center">I already have a membership</a>
  </div>
  <!-- /.form-box -->
{{-- --------------------------------กลับไปหน้า Login------------------------submit I already have a membership--------------------------------- --}}

</div>
@endsection
