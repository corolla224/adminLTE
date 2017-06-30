@extends('auth.layout')

@section('content')
<div class="login-box">
  <div class="login-logo">
    <a href="/login"><b>Admin</b>LTE</a>
</div>
  {{-- -------------------------- /.login-logo -->----------------------------------------- --}}
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>
    <form action="{{ route('login') }}" method="post" >
    {{ csrf_field() }}
      <div class="form-group has-feedback{{ $errors->has('email') ? ' has-error' : '' }}">
        <input type="email" class="form-control" placeholder="Email" name="email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        @if ($errors->has('email'))
            <div>
                <strong>{{ $errors->first('email') }}</strong>
            </div>           
        @endif
      </div>
{{-- -------------------------- Password----------------------------------------- --}}
      <div class="form-group has-feedback{{ $errors->has('password') ? 'has-error' : ''}}">
        <input type="password" class="form-control" placeholder="Password" name="password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        @if ($errors->has('password'))
            <div class="help-block">
                  <strong>{{ $errors->first('password')}}</strong>
            </div>        
        @endif
      </div>
{{-- -------------------------- checkbox----------------------------------------- --}}
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox" name="remenber" {{old('remenber') ? 'checked' : ''}}> Remember Me
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
{{-- ---------------link----------- Facebook ------Google----------------------------------- --}}

    <div class="social-auth-links text-center">
      <p>- OR -</p>
      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
        Facebook</a>
      <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
        Google+</a>
    </div>
    <!-- /.social-auth-links -->

    <a href="#">I forgot my password</a><br>
    <a href="/register" class="text-center">Register a new membership</a>

  </div>
  <!-- /.login-box-body -->
</div>
@endsection

