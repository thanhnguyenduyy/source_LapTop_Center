@extends('layout.master')

@section('title')
    Reset Password
@endsection

@section('content')
    @include('layout.navigation2')

    <div id="breadcrumb">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="trang-chu">Trang chủ</a></li>
                <li class="active">Reset Password</li>
            </ul>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="row">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <form class="clearfix" action="{{ route('password.email') }}" method="POST">
                    {{ csrf_field() }}

                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <div class="billing-details">
                            <div class="section-title">
                                <h3 class="title">Reset Password</h3>
                            </div>                       
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="txtEmail">Email:</label>
                                <input class="input" type="email" id="email" name="email" value="{{ old('email') }}" placeholder="Nhập email" required="" autofocus="">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group text-center">
                                <button class="primary-btn" type="submit">Send Reset Password Link</button>
                            </div>
                        </div>
                    </div>                       
                </form>
            </div>
        </div>
    </div>
@endsection
