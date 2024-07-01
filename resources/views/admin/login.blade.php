<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>LapTop-Centre | Log in</title>
    <base href="{{ asset('') }}">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="../admin_asset/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../admin_asset/bower_components/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../admin_asset/bower_components/Ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="../admin_asset/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="../admin_asset/plugins/iCheck/square/blue.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="../../index2.html"><b>Admin</b> LapTop-Centre</a>
        </div>
        <div class="login-box-body">
            <p class="login-box-msg">Bạn cần đăng nhập</p>
            @if (count($errors) > 0)
            <div class="alert alert-danger">
                @foreach ($errors->all() as $err)
                {{$err}}<br>
                @endforeach
            </div>
            @endif
            @if (session('error'))
            <div class="alert alert-danger">
                {{Session('error')}}
            </div>
            @endif
            <form action="admin/dang-nhap" method="post">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <div class="form-group has-feedback">
                    <input type="email" class="form-control" id="txtEmail" name="txtEmail" placeholder="Nhập email">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" id="txtPassword" name="txtPassword" placeholder="Nhập mật khẩu">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="row">
                    <div class="col-xs-8">
                        <div class="checkbox icheck">
                            <label>
                                <input type="checkbox"> Nhớ mật khẩu
                            </label>
                        </div>
                    </div>
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Đăng nhập</button>
                    </div>
                </div>
            </form>
            <div class="social-auth-links text-center">
                <p>- Hoặc -</p>
                <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Đăng nhập bằng Facebook</a>
                <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Đăng nhập bằng Google+</a>
            </div>
            <!-- <a href="#">Quên mật khẩu</a><br>
            <a href="register.html" class="text-center">Đăng ký</a> -->
        </div>
    </div>
    <script src="../admin_asset/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="../admin_asset/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../admin_asset/plugins/iCheck/icheck.min.js"></script>
    <script>
        $(function() {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%'
            });
        });
    </script>
</body>

</html>