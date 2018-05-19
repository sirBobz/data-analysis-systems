@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <br><br><br><br><br><br><br>
            <div class="card-group">
                <div class="card p-4">
                    <div class="card-body">
                        <p class="text-muted text-center">Sign In to your account</p>
                        <form method="POST" action="{{ route('login') }}">

                            {{ csrf_field() }}
                            <div class="input-group mb-3">
                                <span class="input-group-addon"><i class="icon-user"></i></span>
                                <input type="text" name="email" value="{{ old('email') }}" class="form-control" required
                                       autofocus placeholder="email">
                            </div>
                            <div class="input-group mb-4">
                                <span class="input-group-addon"><i class="icon-lock"></i></span>
                                <input type="password" name="password" class="form-control" placeholder="Password"
                                       required>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <a href="{{ url('register') }}" class="btn btn-btn btn-primary btn-sm px-4">Register</a>
                                    <button type="submit" class="btn btn-primary btn-sm px-4 pull-right">Login</button>
                                </div>
                            </div>
                            <a href="{{ url('password/reset') }}" class="btn btn-link px-0">Reset Password?</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
