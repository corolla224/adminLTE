@extends('master')

@section('footer')
    
@endsection

@section('content')
 
<div class="container">
      <h1>Create</h1>
      <form method="get" action="/managemembers/addmember/create">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="Name">Name</label>
            <input type="text" class="form-control" name="name" id="name"value="{{ old('name') }}" placeholder="name" required autofocus>
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
            @if ($errors->has('name'))
            <span class="help-block">
            <strong>{{ $errors->first('name') }}</strong>
            </span>
            @endif      
        </div>

        <div class="form-group">
            <label for="Email">Email</label>
            <input type="email" class="form-control" placeholder="Email" name="email" id="Email" value="{{ old('email') }}"  required>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
             @if ($errors->has('email'))
            <span class="help-block"><strong>{{ $errors->first('email') }}</strong></span>
             @endif            
        </div>

        <div class="form-group">
            <label for="password">password</label>
            <input type="password" class="form-control" name="password" placeholder="Password" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          @if ($errors->has('password'))
            <span class="help-block"><strong>{{ $errors->first('password') }}</strong></span>
          @endif       
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="password_confirmation" placeholder="Retype password" required>
       <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
   
@endsection
