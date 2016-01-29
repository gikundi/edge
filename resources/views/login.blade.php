@extends('layouts.layout')

@section('content')  

<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <h1 class="text-center login-title">Welcome to Ralphowino Developer Portal</h1>
            <div class="account-wall">

                <form class="form-signin">
                    <input type="text" class="form-control" placeholder="Email" required autofocus>
                    <input type="password" class="form-control" placeholder="Password" required>
                    <button class="btn btn-lg btn-primary btn-block" type="submit">
                        Sign in</button>
                    <label class="checkbox pull-left">
                        <input type="checkbox" value="remember-me">
                        Remember me
                    </label>
                    <a href="#" class="pull-right need-help">Need help? </a><span class="clearfix"></span>
                    
                       <a class="btn-auth btn-github large" href="{{URL::to('auth/github')}}">
                    Sign in with <b>GitHub</b>
                </a>
                </form>

            </div>
           
        </div>
    </div>
</div>


@endsection
