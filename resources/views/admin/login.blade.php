<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin - Login</title>

    <!-- Bootstrap core CSS-->
    <link href="{{ asset('admin/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="{{ asset('admin/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="{{ asset('admin/css/sb-admin.css') }}" rel="stylesheet">

</head>

<body class="bg-dark">

<div class="container">
    <div class="card card-login mx-auto mt-5">
        <div class="card-header">Login</div>
        <div class="card-body">
            <form action="{{ route('login') }}" method="post">
                @csrf
                <div class="form-group">
                    <div class="form-label-group">
                        <input type="email" id="inputEmail" name="email" class="form-control"
                               placeholder="Email address"
                               required="required" autofocus="autofocus">
                        <label for="inputEmail">Email address</label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-label-group">
                        <input type="password" id="inputPassword" name="password" class="form-control"
                               placeholder="Password"
                               required="required">
                        <label for="inputPassword">Password</label>
                    </div>
                </div>
                {{--<div class="form-group">--}}
                    {{--<div class="checkbox">--}}
                        {{--<label>--}}
                            {{--<input type="checkbox" value="remember-me">--}}
                            {{--Remember Password--}}
                        {{--</label>--}}
                    {{--</div>--}}
                {{--</div>--}}
                <input type="submit" class="btn btn-primary btn-block" value="Login"/>
            </form>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="{{ asset('admin/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- Core plugin JavaScript-->
<script src="{{ asset('admin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

</body>
</html>
