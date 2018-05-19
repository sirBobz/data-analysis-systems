@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <br><br><br><br><br><br><br>
            <div class="card-group">
                <div class="card p-4">
                
                    <div class="card-body">
                        <p class="text-muted">Sign In to your account</p>
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
                                    <button type="submit" class="btn btn-primary px-4">Login</button>
                                    <a href="{{ url('password/reset') }}" class="btn btn-link px-0 pull-right">Forgot password?</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
