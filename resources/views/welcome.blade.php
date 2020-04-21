
{{--============================================================start worke============================================================================--}}
    <!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
{{--    <link rel="stylesheet" href="css/bootstrap.min.css">--}}
    <link rel="stylesheet" href="{{asset('assets/frontend/welcome-page/css/bootstrap.min.css')}}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="{{asset('assets/frontend/welcome-page/css/custom.css')}}">
    <!-- font awesome CSS -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- Linearicons CSS -->
{{--    <link rel="stylesheet" href="css/lineariconsfonts.css">--}}
    <link rel="stylesheet" href="{{asset('assets/frontend/welcome-page/css/lineariconsfonts.css')}}">
</head>
<body>


<!-- Wrap-main -->

<div class="wrap-main">
    <!-- Container -->
    <div class="container-fluid">
        <!-- inner-wrap -->
        <div class="inner-wrap text-center d-flex align-items-center justify-content-center">
            <div class="row">
                <div class="col col-md-12">
                    <h1 class="title-head">CHECK-IN</h1>
                    <p>Willkommen zum Check-In bei Stupid and Simple.</p>
                    <p>Wir denken um Daten kümmert man sich am besten am Anfang - einmal und dann nie wieder, damit jede weitere Minute für die wichtigen Dinge des Lebens frei ist.</p>
                    <h2 class="mt-5"><span class="icon-clock2"></span></h2>
                    <p>Der Check-In dauert maximal 5 Minuten.</p>
                    <form action="{{route('index')}}">
                    <button class="btn btn-default btn-pro mt-3">Ok, auf geht’s</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="wrap-inner-bottom profile-case-wrap">
        <div class="container-fluid p-0">
            <div class="small-container text-center d-flex align-items-center">

                <div class="profile-preview">
                    <div class="profile-preview-pic">

                        <img src="{{asset('assets/frontend/welcome-page/images/img-profile.png')}}">
                    </div>
                    <p>Ich bin Jan, ich führe dich durch den</p>
                    <p>Check-In.</p>
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
<script src="{{asset('assets/frontend/welcome-page/js/jquery-3.2.1.slim.min.js')}}"></script>
<script src="{{asset('assets/frontend/welcome-page/js/popper.min.js')}}"></script>
<script src="{{asset('assets/frontend/welcome-page/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/frontend/welcome-page/demo-files/liga.js')}}"></script>
<script src="{{asset('assets/frontend/welcome-page/demo-files/linearicons.js')}}"></script>
</body>
</html>
