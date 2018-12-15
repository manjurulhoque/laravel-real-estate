<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <!-- Basic need -->
    <title>ReaLand</title>
    <meta charset="UTF-8">
    <meta name="description" content="ReaLand - Real Estate HTML Template">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <link rel="profile" href="">
    <!-- <link rel="shortcut icon" href="images/favicon.ico"> -->

    <!-- Mobile specific meta -->
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="format-detection" content="telephone-no">

    <!-- External Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600|Raleway:400,700,800|Roboto:400,500,700"
          rel="stylesheet">

    <!-- CSS files -->
    <link rel="stylesheet" href="{{ asset('css/plugins.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
@include('partials.navbar')

<div style="margin: 0 auto; width: 50%">
    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> Something is wrong!!<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div>

@yield('content')

@include('partials.footer')

@include('partials.javascript')
</body>
</html>