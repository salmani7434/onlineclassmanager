@extends('layouts.app')
@section('content')
<div class="login-box">
        <div class="logo">
            <a href="javascript:void(0);">{{ trans('panel.site_title') }}</b></a>
            
        </div>
        <div class="card">
            <div class="body">
                 <div class="msg">Sign in to start your session</div>
                     @if(\Session::has('message'))
                        <p class="alert alert-info">
                            {{ \Session::get('message') }}
                        </p>
                    @endif
                <form id="sign_in" action="{{ route('login') }}" method="POST">
                    {{ csrf_field() }}
                   
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text"  class="form-control" name="email" placeholder="{{ trans('global.login_email') }}" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" placeholder="{{ trans('global.login_password') }}" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-8 p-t-5">
                            <input type="checkbox" name="rememberme" id="rememberme" class="filled-in chk-col-pink">
                            <label for="rememberme">{{ trans('global.remember_me') }}</label>
                        </div>
                        <div class="col-xs-4">
                             <button type="submit" class="btn btn-block bg-pink waves-effect">
                                    {{ __('Login') }}
                                </button>

                        </div>
                    </div>
                    <div class="row m-t-15 m-b--20">
                        
                        <div class="col-xs-6 align-right">
                            <a class="" href="{{ route('password.request') }}">
                                {{ trans('global.forgot_password') }}
                            </a>
                        </div>
                         <div class="col-xs-6 align-right">

                             @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                         @endif
                            
                        </div>
                    </div>
                </form>
            </div>
        </div>
</div>
@endsection