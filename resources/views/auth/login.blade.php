
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <!-- Apple devices fullscreen -->
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <!-- Apple devices fullscreen -->
    <meta names="apple-mobile-web-app-status-bar-style" content="black-translucent" />

    <title>FLAT - Login</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- icheck -->
    <link rel="stylesheet" href="css/plugins/icheck/all.css">
    <!-- Theme CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Color CSS -->
    <link rel="stylesheet" href="css/themes.css">


    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>

    <!-- Nice Scroll -->
    <script src="js/plugins/nicescroll/jquery.nicescroll.min.js"></script>
    <!-- Validation -->
    <script src="js/plugins/validation/jquery.validate.min.js"></script>
    <script src="js/plugins/validation/additional-methods.min.js"></script>
    <!-- icheck -->
    <script src="js/plugins/icheck/jquery.icheck.min.js"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/eakroko.js"></script>

    <!--[if lte IE 9]>
    <script src="js/plugins/placeholder/jquery.placeholder.min.js"></script>
    <script>
        $(document).ready(function() {
            $('input, textarea').placeholder();
        });
    </script>
    <![endif]-->


    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.ico" />
    <!-- Apple devices Homescreen icon -->
    <link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon-precomposed.png" />

</head>

<body class='login'>
<div class="wrapper">
    <h1>
        <a href="index.html">
            <img src="img/logo-big.png" alt="" class='retina-ready' width="59" height="49">FLAT</a>
    </h1>
    <div class="login-body">
        <h2>SIGN IN</h2>
        <form method="POST" action="{{ route('login') }}" class='form-validate' id="test">
            @csrf
            <div class="form-group">
                <div class="email controls">
                    <input type="text" name='email' placeholder="Email address" class='form-control' data-rule-required="true" data-rule-email="true">
                </div>
            </div>
            <div class="form-group">
                <div class="pw controls">
                    <input type="password" name="password" placeholder="Password" class='form-control' data-rule-required="true">
                </div>
            </div>
            <div class="submit  mb-5">
{{--                <div class="remember">--}}
{{--                    <input type="checkbox" name="remember" class='icheck-me' data-skin="square" data-color="blue" id="remember">--}}
{{--                    <label for="remember">Remember me</label>--}}
{{--                </div>--}}
                <input type="submit" value="Sign me in" class='btn btn-primary'>
            </div>
        </form>
        <div class="forget">
            <a href="#">
{{--                <span>Forgot password?</span>--}}
            </a>
        </div>
    </div>
</div>
<script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-38620714-4']);
    _gaq.push(['_trackPageview']);

    (function() {
        var ga = document.createElement('script');
        ga.type = 'text/javascript';
        ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(ga, s);
    })();
</script>
</body>

</html>

{{--@extends('layouts.app')--}}

{{--@section('content')--}}
{{--<div class="container">--}}
{{--    <div class="row justify-content-center">--}}
{{--        <div class="col-md-8">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">{{ __('Login') }}</div>--}}

{{--                <div class="card-body">--}}
{{--                    <form method="POST" action="{{ route('login') }}">--}}
{{--                        @csrf--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>--}}

{{--                                @error('email')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">--}}

{{--                                @error('password')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <div class="col-md-6 offset-md-4">--}}
{{--                                <div class="form-check">--}}
{{--                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>--}}

{{--                                    <label class="form-check-label" for="remember">--}}
{{--                                        {{ __('Remember Me') }}--}}
{{--                                    </label>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row mb-0">--}}
{{--                            <div class="col-md-8 offset-md-4">--}}
{{--                                <button type="submit" class="btn btn-primary">--}}
{{--                                    {{ __('Login') }}--}}
{{--                                </button>--}}

{{--                                @if (Route::has('password.request'))--}}
{{--                                    <a class="btn btn-link" href="{{ route('password.request') }}">--}}
{{--                                        {{ __('Forgot Your Password?') }}--}}
{{--                                    </a>--}}
{{--                                @endif--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--@endsection--}}
