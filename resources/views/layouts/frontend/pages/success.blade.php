<!doctype>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    {{--    <link rel="stylesheet" href="css/bootstrap.min.css">--}}
    <link rel="stylesheet" href="{{asset('assets/frontend/welcome-page/css/bootstrap.min.css')}}">
    <!-- Custom CSS -->
    {{--    <link rel="stylesheet" href="css/custom.css">--}}
    <link rel="stylesheet" href="{{asset('assets/frontend/welcome-page/css/custom.css')}}">
    <!-- font awesome CSS -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- Linearicons CSS -->
    {{--    <link rel="stylesheet" href="css/lineariconsfonts.css">--}}
    <link rel="stylesheet" href="{{asset('assets/frontend/welcome-page/css/lineariconsfonts.css')}}">
</head>
<body>

<div class="wrap-main">
    <!-- Container -->
    <div class="container-fluid">
        <!-- inner-wrap -->
        <div class="inner-wrap text-center d-flex align-items-center justify-content-center">
            <div class="row">
                <div class="col-md-12">
                    @if(session()->has('success'))
                        <div class="alert alert-success text-center">{{session()->get('success')}}</div>
                    @endif
                </div>
                <div class="col col-md-12">
                    <h1 class="title-head">CHECK-IN</h1>

                    <!-- Check Process -->
                    <div class="process-checking-completed">

                        <ul class="d-flex align-items-center justify-content-center">
                            <li><a href="javascript:void(0)"><span class="icon-check"></span></a></li>
                        </ul>

                    </div>

                    <p class="mb-5">Dein Check-In war erfolgreich.</p>
                    <h2>Willkommen bei <br> Stupid and Simple.</h2>
                    <p class="small-font">Du kannst dieses Fenster jetzt schließen</p>
                    <p class="mt-5">Folge uns direkt auf Instagram</p>

                    <div class="social-icons mb-80">
                        <a href="https://www.instagram.com/stupid.and.simple/"> <i class="fa fa-instagram"></i></a>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
<!-- footer start -->
<footer class="footer">
    <div class="container-fluid">
        <div class="inner-wrap">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <div class="footer-list">
                        <ul class="d-block d-md-flex">
                            <li><a href="#">Impressum</a></li>
                            <li><a href="#">Datenschutz</a></li>
                            <li><a href="#">Kontakt</a></li>
                            <li><a href="https://www.stupidandsimple.com/">stupidandsimple.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 text-center text-md-right">
                    <div class="copyright">© Stupid and Simple 2020</div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer end -->

<!-- footer end -->
<script src="{{asset('assets/frontend/welcome-page/js/jquery-3.2.1.slim.min.js')}}"></script>
<script src="{{asset('assets/frontend/welcome-page/js/popper.min.js')}}"></script>
<script src="{{asset('assets/frontend/welcome-page/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/frontend/welcome-page/demo-files/liga.js')}}"></script>
<script src="{{asset('assets/frontend/welcome-page/demo-files/linearicons.js')}}"></script>
</body>
</html>
