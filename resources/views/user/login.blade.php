<!DOCTYPE html>
<html dir="rtl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ورود</title>
    {!! htmlScriptTagJsApi() !!}
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('panel') }}/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{ asset('panel') }}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('panel') }}/dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link href="{{ asset('plugins/alertify/css/themes/bootstrap.rtl.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/alertify/css/alertify.rtl.css') }}" rel="stylesheet">
    <link href="{{ asset('fonts/css/style.css') }}" rel="stylesheet">
</head>
<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <a href="https://behinavaagancy.site">
            <img src="{{ asset('images/behinavalogo.png') }}" width="100">
        </a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">اطلاعات کاربری</p>

            <form action="{{ route('user.login') }}" style="direction: ltr;" method="post">
                @csrf
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="نام کاربری" name="username" autocomplete="off" autofocus>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" name="password" placeholder="رمز عبور">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                {!! htmlFormSnippet([
    "theme" => "light",
    "size" => "normal",
    "tabindex" => "3",
    "callback" => "callbackFunction",
    "expired-callback" => "expiredCallbackFunction",
    "error-callback" => "errorCallbackFunction",
]) !!}
                <div class="row">
                    <!-- /.col -->
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">ورود</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

            <!-- /.social-auth-links -->

        </div>
        <!-- /.login-card-body -->
    </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{ asset('panel') }}/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('panel') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('plugins/alertify/alertify.min.js') }}"></script>

@if($errors->any())
    <script>
        alertify.error('{{ $errors->first() }}');
    </script>
@endif
@if(session('success'))
    <script>
        alertify.success('{{ session('success') }}');
    </script>
@endif
</body>
</html>
