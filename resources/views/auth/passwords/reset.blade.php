@extends('layout.master')

@section('title')
Đăng nhập
@endsection

@section('content')
@include('layout.navigation2')

<div id="breadcrumb">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="trang-chu">Trang chủ</a></li>
            <li class="active">Đăng nhập</li>
        </ul>
    </div>
</div>

<div class="section">
    <div class="container">
        <div class="row">
            <form class="clearfix" action="{{ route('password.request') }}" method="POST">
                {{ csrf_field() }}

                <input type="hidden" name="token" value="{{ $token }}">

                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="billing-details">
                        <div class="section-title">
                            <h3 class="title">Reset Password</h3>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="txtEmail">Email:</label>
                            <input class="input" type="email" id="email" name="email" value="{{ $email ?? old('email') }}" placeholder="Nhập email" required="" autofocus="">

                            @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password">Mật khẩu</label>
                            <input id="password" type="password" class="input" name="password" required>

                            @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label for="password-confirm">Nhập lại mật khẩu</label>
                            <input id="password-confirm" type="password" class="input" name="password_confirmation" required>

                            @if ($errors->has('password_confirmation'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                            </span>
                            @endif
                        </div>

                        <div class="form-group text-center">
                            <button class="primary-btn" type="submit">Reset Password</button>
                        </div>
                    </div>
            </form>
        </div>
    </div>
</div>
@endsection