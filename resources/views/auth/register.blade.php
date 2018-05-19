@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <br>  <br> <br>  <br> <br>  <br>
        <div class="card mx-4">
          <div class="card-body p-4">
            <p class="text-muted text-center">Create your account</p>
            <form method="POST" action="{{ route('register') }}">
              {{ csrf_field() }}              
              <div class="input-group mb-3">
                <span class="input-group-addon"><i class="icon-user"></i></span>
                <input type="text" name="name" maxlength="50" class="form-control" placeholder="Your Name" required="required">
              </div> 
              <div class="input-group mb-3">
                <span class="input-group-addon">@</span>
                <input type="email" name="email" class="form-control" maxlength="50" placeholder="Email" required="required">
              </div>

              <div class="input-group mb-3">
                <span class="input-group-addon"><i class="icon-phone"></i></span>
                <input type="number" name="phone" class="form-control" placeholder="Phone Numner" required="required">
              </div>

              <div class="input-group mb-3">
                <span class="input-group-addon"><i class="icon-lock"></i></span>
                <input type="password" name="password" class="form-control" maxlength="20" placeholder="Password" required="required">
              </div>

              <div class="input-group mb-3">
                <span class="input-group-addon"><i class="icon-lock"></i></span>
                <input type="password" name="password_confirmation" class="form-control" maxlength="20" placeholder="Password" required="required">
              </div>
              <a href="{{ route('login') }}" class="btn btn-primary btn-sm">Sign in</a>
              <button type="submit" class="btn btn-primary btn-sm pull-right">Create Account</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
