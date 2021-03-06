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

{{--============================================--}}
<!-- Wrap-main -->
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

                    <div class="process-checkin ">

                        <ul class="d-flex align-items-center justify-content-center nav nav-pills "  id="myDIV">
                            <li id="pill1" class="active"><a data-toggle="pill" href="#menu1" id="trigger">1</a></li>
                            <li id="pill2"><a data-toggle="pill" >2</a></li>
                            <li id="pill3"><a data-toggle="pill"  >3</a></li>
                            <li id="pill4"><a data-toggle="pill" >4</a></li>
                            <li id="pill5"><a data-toggle="pill" >5</a></li>
                            <li id="pill6"><a data-toggle="pill" >6</a></li>
                            <li id="pill7"><a data-toggle="pill" >7</a></li>
{{--                            <li><a data-toggle="pill" href="#menu8">8</a></li>--}}
                        </ul>

                        <ul class="d-flex align-items-center justify-content-center nav nav-pills">
                            <li><a data-toggle="pill" class="d-none" href="#menu9">9</a></li>
                            <li><a data-toggle="pill" class="d-none" href="#menu10">10</a></li>
                            <li><a data-toggle="pill" class="d-none" href="#menu11">11</a></li>
                            <li><a data-toggle="pill" class="d-none" href="#menu12">12</a></li>
                            <li><a data-toggle="pill" class="d-none" href="#menu13">13</a></li>
                            <li><a data-toggle="pill" class="d-none" id="14" href="#menu14">14</a></li>
                            <li><a data-toggle="pill" class="d-none" href="#menu15">15</a></li>
                            <li><a data-toggle="pill" class="d-none" href="#menu16">16</a></li>
                        </ul>


                    </div>
                    <form action="{{route('getData')}}" method="post" enctype="multipart/form-data">
                        @csrf
{{--{--}}
                    <div class="tab-content ">
{{--    ================================01 - Choose Type====================1======--}}
                        <div id="menu1" class="tab-pane fade in active">
                                <p>Checkst du ein als Kunde, als Partner <br> oder als sonstiges?</p>
                                <button type="button"  class="btn btn-default btn-pro mt-3" data-toggle="modal" data-target="#chose01model">Neuer Kunde</button> <br>

                            <ul class="align-items-center justify-content-center nav nav-pills">
                                <li><a data-toggle="pill"   href="#menu15" class="btn btn-default btn-pro mt-4 mb-80" data-dismiss="modal">Vermittler</a></li>
                            </ul>
                        {{-- <button type="button"  class="btn btn-default btn-pro mt-4 mb-80">Vermittler</button>--}}


                            <!-- The Modal -->
                            <div class="modal chose01model" id="chose01model">
                                <div class="modal-dialog">
                                    <div class="modal-content">

                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>

                                        <!-- Modal body -->
                                        <div class="modal-body text-center">
                                            <h2 class="modal-title"><span class="icon-warning"></span></h2>
                                            <p>Achtung, an dich werden Angebote und Rechnungen versendet. Du wirst unser Kunde. Wenn du den Button klickst, best??tigst du, befugt zu sein gesch??ftliche Entscheidungen zu treffen.</p>
                                            {{--  <button type="button"  class="btn btn-default btn-pro mt-4">Bin befugt</button>--}}
                                            <ul class="align-items-center justify-content-center nav nav-pills">
                                                <li><a data-toggle="pill"  href="#menu2" class="btn btn-default btn-pro mt-4" data-dismiss="modal">Bin befugt</a></li>
                                            </ul>

                                        </div>

                                        <!-- Modal footer -->
                                    </div>
                                </div>
                            </div>
                            <!-- The Modal -->
                        </div>
                        <!-- End Pill 1 -->
{{--                    =======================01-Client02=====================2=--}}
                        <div id="menu2" class="tab-pane fade" >

                            <div id="myForm" class="small-container">
                                <h2><span class="icon-user"></span></h2>
                                <p>Ich bin Jan, wer bist du?</p>
                                <div class="mt-5">
                                        <input type="text" id="name" name="name"  placeholder="Name" class="form-control validate get1">
                                        <input type="text" id="Nachname" name="nashname"  placeholder="Nachname" class="form-control validate get2">

                                        <input type="email" id="email" name="email"  placeholder="E-Mail" class="form-control validate get3">

                                        <div class="mt-4">
                                            <small><strong>Deine Mail-Adresse wird deine Simple ID.</strong> Das beudet, dass s??mtliche Angebote, Rechnungen und Vertragliches mit dieser Adresse abgewickelt wird.</small>
                                        </div>
                                        <p class="mt-4">Sind wir ein Jahrgang?</p>
                                        <input type="date" id="gebdatum" name="gebdatum"  placeholder="Geb Datum" class="form-control mt-3 validate get4">

                                        <ul class="align-items-center justify-content-center nav nav-pills">
                                            <li><a data-toggle="pill" onclick="tabCircleActive('pill2','pill1')"  onmouseover="formValidate(0 , 4 , 1 )" id="1" href="#menu3"  class="btn btn-default btn-pro mt-5 get" >Das bin ich</a></li>
                                        </ul>
{{--                                        <button type="submit"  class="btn btn-default btn-pro mt-5">Das bin ich</button>--}}
                                </div>
                            </div>
                        </div>
                        <!-- End Pill 2 -->
{{--                    =======================02-Client03=====================3==--}}
                        <div id="menu3" class="tab-pane fade">

                            <div class="small-container">
                                <h2><span class="icon-user"></span></h2>
                                <p>Ich bin Jan, wer bist du?</p>
                                <div class="mt-5">
                                        <select class="form-control mb-5 validate" name="Mail" >
                                            <option value="">Select</option>
                                            <option>Mail</option>
                                            <option>Whatsapp</option>
                                            <option>Tel</option>
                                        </select>
                                        <input type="text"  name="Mobil" placeholder="Mobil" class="form-control validate ">

                                    <input type="text" name="Festnetz"  placeholder="Festnetz" class="form-control ">
                                    <input type="text" name="Skype"  placeholder="Skype" class="form-control ">
                                    <p class="newsletter-check mt-5">
                                            <label class="xd-radio">
                                                <input type="radio" name="radio" >
                                                <span class="checkmark"></span>
                                            </label>
                                            Ich m??chte per E-Mail ??ber Neuigkeiten informiert werden
                                        </p>


                                    <ul class="align-items-center justify-content-center nav nav-pills">
                                            <li><a data-toggle="pill" onclick="tabCircleActive('pill3','pill2')" onmouseover="formValidate(4 , 6 , 2 )" id="2"  href="#menu4" class="btn btn-default btn-pro mt-5">weiter zur Firma</a></li>
                                        </ul>
{{--                                        <button type="submit"  class="btn btn-default btn-pro mt-5">weiter zur Firma</button>--}}
                                </div>
                            </div>
                        </div>
                        <!-- End Pill 3 -->
{{--                    =======================03-Company01======================4==--}}
                        <div id="menu4" class="tab-pane fade">
                            <div >
{{--                                <h2><span class="icon-apartment"></span></h2>--}}
{{--                                <p>Wir sind Stupid and Simple, wer seid ihr?</p>--}}
{{--                                <div class="company-field">--}}
{{--                                <div>--}}
{{--                                    <input type="text" name="Firmenname" class="validate form-control" placeholder="Firmenname & Rechtsform">--}}
                                    <input type="text" name="firmen_name" class="validate form-control" placeholder="Firmenname & Rechtsform">
{{--                                    <input type="text" name="Fir" class="form-control" placeholder="Firmenname & Rechtsform">--}}
{{--                                </div>--}}

                                    <p>Um was f??r eine Unternehmen handelt es sich?</p>
                                    <ul class="pl-0 pl-md-7">
                                        <li>
                                            <p class="newsletter-check">
                                                <label class="xd-radio">
                                                    <input type="radio" name="radio1" checked>
                                                    <span class="checkmark"></span>
                                                </label>
                                                Unternehmen
                                            </p>
                                        </li>
                                        <li>
                                            <p class="newsletter-check">
                                                <label class="xd-radio">
                                                    <input type="radio" name="radio1">
                                                    <span class="checkmark"></span>
                                                </label>
                                                Freiberufliche T??tigkeit
                                            </p>
                                        </li>
                                    </ul>
                                    <div class="mt-5 pl-0 pl-sm-1 pl-md-1">
                                        <p>Was ist deine Position im Unternehnen?</p>
                                        <ul class="pl-2 pl-0 pl-md-6">
                                            <li>
                                                <p class="newsletter-check">
                                                    <label class="xd-radio">
                                                        <input type="radio" name="radio2" checked>
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    Inhaber/Gesch??ftsf??hrer
                                                </p>
                                            </li>
                                            <li>
                                                <p class="newsletter-check">
                                                    <label class="xd-radio">
                                                        <input type="radio" name="radio2">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    sonstige (befugt zu <br> Firmenentscheidungen)
                                                </p>
                                            </li>
                                        </ul>
                                    </div>


                                <div class="mt-5">

                                    <ul class="align-items-center justify-content-center nav nav-pills">
                                        <li><a data-toggle="pill"  onclick="tabCircleActive('pill4','pill3')" href="#menu5" onmouseover="formValidate(6 , 7 ,3 )" id="3" class="btn btn-default btn-pro mt-5">Das sind wir</a></li>
                                    </ul>

{{--                                    <button type="submit"  class="btn btn-default btn-pro mb-5">Das sind wir</button>--}}
                                    <p class="small-font"> Wenn du nicht befugt bist f??r diese Firma Entscheidungen zu <br> treffen, oder es sich nicht um ein gemeldetes Gewerbe/T??tigkeit/ <br>Unternehmen handelt, breche bitte an dieser Stelle ab und <br> kontaktiere uns telefonisch.</p>

                                </div>
                            </div>
                        </div>

                        <!-- End Pill 4 -->
{{--                    =======================04-Company02=====================5===--}}
                        <div id="menu5" class="tab-pane fade">
                            <h2><span class="icon-apartment"></span></h2>
                            <p>Wir sitzen in Berlin zwischen Berghain <br> und Media-Spree. Wo sitzt ihr?</p>

                            <div class="small-container mt-5">



                                    <input type="text"  name="firmen2_name"  placeholder="Firmenname" class="form-control validate">


                                    <input type="text" name="Adresszusatz"  placeholder="Adresszusatz" class="form-control validate">

                                    <input type="email" name="Anschrift"  placeholder="Anschrift" class="form-control validate">

                                    <input type="text" name="PLZ" placeholder="PLZ"  class="form-control validate">

                                    <input type="text" name="Ort" placeholder="Ort"  class="form-control validate">

                                    <ul class="pl-3">
                                        <li>
                                            <p class="newsletter-check">
                                                <label class="xd-radio">
                                                    <input type="radio" id="radio" name="radio" checked onclick="movePage(1)">
                                                    <span class="checkmark"></span>
                                                </label>
                                                EU Deutschland
                                            </p>
                                        </li>
                                        <li>
                                            <p class="newsletter-check">
                                                <label class="xd-radio">
                                                    <input type="radio" name="radio" onclick="movePage(2)">
                                                    <span class="checkmark"></span>
                                                </label>
                                                EU andere
                                            </p>
                                        </li>
                                        <li>
                                            <p class="newsletter-check">
                                                <label class="xd-radio">
                                                    <input type="radio" name="radio" onclick="movePage(3)">
                                                    <span class="checkmark"></span>
                                                </label>
                                                Schweiz & au??erhalb EU
                                            </p>
                                        </li>
                                    </ul>

                                    <div class="mt-5">
{{--                                        <button type="submit"  class="btn btn-default btn-pro">Ab damit</button>--}}
                                        <ul class="align-items-center justify-content-center nav nav-pills">
                                            <li><a data-toggle="pill"  onclick="tabCircleActive('pill4','pill3')"  onmouseover="formValidate(7 , 12 ,'addMenu' )" class="btn btn-default btn-pro" id="addMenu">Ab damit</a></li>
                                        </ul>
                                    </div>
                            </div>
                        </div>
                        <!-- End Pill 5 -->
{{--                    =======================04-Company03???EU Deutschland=======================6==--}}
                        <div id="menu6" class="tab-pane fade">
                            <div class="small-container">
                                <h2><span class="icon-apartment"></span></h2>
                                <p>Seid ihr mehrwertsteuerpflichtig?</p>
                                <div class="mt-2">


                                        <select class="form-control mb-5 validate" name="select" >
                                            <option value="">Select</option>
                                            <option >Ja</option>
                                            <option>Umsatzsteuerpflichtig</option>
                                            <option>Umsatzsteuerbefreit</option>
                                        </select>
                                        <label class="pt-2 pb-3">Es kommt vor, dass wir Betr??ge <br> zur??ckzahlen, stornieren oder <br> Gutschreiben. Wohin zahlen wir?</label>
                                        <input type="text"  placeholder="Konto-Inhaber" name="KontoInhaber" class="form-control validate">
                                        <input type="text"  placeholder="IBAN" name="iban" class="form-control validate">
                                        <input type="text"  placeholder="BIC" name="bic1" class="form-control validate">
                                        <label class="pt-5 pb-3">An welche Adressen sollen wir <br> Rechnungen zus??tzlich versenden?</label>
                                        <input type="text"  name="E-Mail" placeholder="E-Mail Buchhaltung" class="form-control ">

                                        <ul class="align-items-center justify-content-center nav nav-pills">
                                            <li><a data-toggle="pill"  type="button" onclick="tabCircleActive('pill5','pill4')" onmouseover="formValidate(12 ,16,4)" id="4" href="#menu9" class="btn btn-default btn-pro mt-4">Ab damit</a></li>
                                        </ul>

{{--                                        <button type="submit"  class="btn btn-default btn-pro mt-4">Ab damit</button>--}}

                                </div>
                            </div>
                        </div>
                        <!-- End Pill 6 -->
{{--                    ===============04-Company03???EU Andere===========7=========--}}
                        <div id="menu7" class="tab-pane fade">
                            <h2>building8</h2>
                            <p>Wir sitzen in Berlin zwischen Berghain <br> und Media-Spree. Wo sitzt ihr?</p>

                            <div class="small-container">

                                <div class="mt-2">

                                        <label class="mt-5 pb-3">Wie lautet die Steuer-ID?</label>
                                        <input type="text" name="USt" placeholder="USt-ID" class="form-control">
                                        <label class="mt-5 pb-3">Seid ihr mehrwertsteuerpflichtig?</label>
                                        <select class="form-control mb-5 validate">
                                            <option value="">Select</option>
                                            <option>Ja</option>
                                            <option>Umsatzsteuerpflichtig</option>
                                            <option>Umsatzsteuerbefreit</option>
                                        </select>
                                        <label class="pt-2 pb-3">Es kommt vor, dass wir Betr??ge <br> zur??ckzahlen, stornieren oder <br> Gutschreiben. Wohin zahlen wir?</label>
                                        <input type="text"  placeholder="Konto-Inhaber" name="Konto" class="form-control validate">
                                        <input type="text"  placeholder="IBAN" name="IBAN" class="form-control validate">
                                        <input type="text"  placeholder="BIC" name="bic2" class="form-control validate">
                                        <label class="pt-5 pb-3">An welche Adressen sollen wir <br> Rechnungen zus??tzlich versenden?</label>
                                        <input type="text"  placeholder="E-Mail Buchhaltung"  class="form-control">

                                        <ul class="align-items-center justify-content-center nav nav-pills">
                                            <li><a data-toggle="pill"  type="button" onclick="tabCircleActive('pill5','pill4')" onmouseover="formValidate(16 ,20,5)" id="5" href="#menu9" class="btn btn-default btn-pro mt-4">Ab damit</a></li>
                                        </ul>
{{--                                        <button type="submit"  class="btn btn-default btn-pro mt-4">Ab damit</button>--}}

                                </div>
                            </div>
                        </div>
                        <!-- End Pill 7 -->
{{--                    =======================04-Company02-Schweiz&au??erhalbEU==================8=======--}}
                        <div id="menu8" class="tab-pane fade">
                            <h2>building8</h2>
                            <p>Es kommt vor, dass wir Betr??ge <br> zur??ckzahlen, stornieren oder <br> Gutschreiben. Wohin zahlen wir?</p>

                            <div class="small-container">

                                <div class="mt-2">

                                        <input type="text"  placeholder="KontoInhaber" name="Konto_Inhaber" class="form-control validate">
                                        <input type="text"  placeholder="IBAN" name="IBAN" class="form-control validate">
                                        <input type="text"  placeholder="BIC" name="bic3" class="form-control validate">
                                        <label class="pt-5 pb-3">An welche Adressen sollen wir <br> Rechnungen zus??tzlich versenden?</label>
                                        <input type="text"  placeholder="E-Mail Buchhaltung" name="Buchhal_tung" class="form-control">
                                        <label class="mt-5">F??r das deutsche Finanzamt ben??tigen  wir eine Unternehmerbescheinigung. Beantrage diese bitte hier.</label>
                                        <div class="upload-btn-wrapper">
                                            <button class="btn-upload">Dokument hier einf??gen</button>
                                            <input type="file" name="myfile" />
                                        </div>
                                        <label class="small-font mb-5">Wenn du das Dokument jetzt nicht zur Hand hast, kannst du diesen Punkt ??berspringen. Du erh??ltst eine Erinnerungsmail im Nachgang.</label>
                                        <ul class="align-items-center justify-content-center nav nav-pills">
                                            <li><a data-toggle="pill"  onclick="tabCircleActive('pill5','pill4')" type="button" onmouseover="formValidate(20,23,6)" id="6" href="#menu9" class="btn btn-default btn-pro mt-4">Ab damit</a></li>
                                        </ul>
{{--                                        <button type="submit"  class="btn btn-default btn-pro mt-4">Ab damit</button>--}}
                                </div>
                            </div>

                        </div>

                        <!-- End Pill 8 -->
{{--                    =======================05-Commission01=======================9===--}}
                        <div id="menu9" class="tab-pane fade">
                            <h2><span class="icon-wallet"></span></h2>
                            <p>Wir machen was tolles. Wenn wir <br> empfohlen werden, zahlen wir Provision. <br> M??chtest du Provision erhalten?</p>

                            <button type="button"  class="btn btn-default btn-pro mt-3" data-toggle="modal" data-target="#chose02model">Ich m??chte Provision</button> <br>
                            <button type="button" onclick="tabCircleActive('pill6','pill5')" class="btn btn-default btn-pro mt-4 mb-4">Bitte keine Provision</button>

                            <p class="small-font mb-80">Erfahre mehr ??ber Provision auf unserer <a href="javascript:void(0)">Vermittler-Page. </a> </p>
                            <!-- The Modal -->
                            <div class="modal chose01model" id="chose02model">
                                <div class="modal-dialog">
                                    <div class="modal-content">

                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>

                                        <!-- Modal body -->
                                        <div class="modal-body text-center">
                                            <h2 class="modal-title"><span class="icon-warning"></span></h2>
                                            <p>Wir zahlen nur Provision an Unternehmen oder Freiberufler. Wenn du keine Rechnung schreiben kannst, klicke bitte ??berspringen.</p>

                                            <ul class="align-items-center justify-content-center nav nav-pills">
                                                <li><a data-toggle="pill"  type="button" href="#menu10" class="btn btn-default btn-pro mt-3" data-dismiss="modal" >Super, kann ich</a></li>
                                            </ul>

{{--                                            <button type="button"  class="btn btn-default btn-pro mt-3">Super, kann ich</button> <br>--}}
{{--                                            <button type="button"  class="btn btn-default btn-pro mt-2">??berspringen</button>--}}

                                            <ul class="align-items-center justify-content-center nav nav-pills">
                                                <li><a data-toggle="pill"  onclick="tabCircleActive('pill6','pill5')" type="button" href="#menu12" class="btn btn-default btn-pro mt-2"  data-dismiss="modal" >??berspringen</a></li>
                                            </ul>

                                        </div>

                                        <!-- Modal footer -->

                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- End Pill 9 -->
{{--                    =======05-Commission03=================10=======--}}
                        <div id="menu10" class="tab-pane fade">
                            <h2>money</h2>
                            <p>Wohin soll Provision gezahlt werden?</p>
                            <div class="mt-4 pl-0 pl-sm-4 pl-md-4">
                                <ul class="pl-0 pl-sm-5 pl-md-5">
                                    <li>
                                        <p class="newsletter-check">
                                            <label class="xd-radio">
                                                <input type="radio" name="radio" onclick="slectPage(1)" checked>
                                                <span class="checkmark"></span>
                                            </label>
                                            Firmenadresse und Bankdaten
                                        </p>
                                    </li>
                                    <li>
                                        <p class="newsletter-check">
                                            <label class="xd-radio">
                                                <input type="radio" name="radio" onclick="slectPage(2)">
                                                <span class="checkmark"></span>
                                            </label>
                                            andere Adresse und Bankdaten
                                        </p>
                                    </li>
                                </ul>
                            </div>
                            <ul class="align-items-center justify-content-center nav nav-pills">
                                <li><a data-toggle="pill" onclick="tabCircleActive('pill6','pill5')"  class="btn btn-default btn-pro mt-3" id="slectMenu">Super, kann ich</a></li>
                            </ul>
{{--                            <button type="button"  class="btn btn-default btn-pro mt-4 mb-80">Bitte keine Provision</button>--}}
                        </div>
                        <!-- End Pill 10 -->
{{--                    =======================05-Commission04=======================11=====--}}
                        <div id="menu11" class="tab-pane fade">
                            <h2>money</h2>
                            <p>Wer erh??lt die Provision?</p>

                            <div class="small-container mt-5">


{{--                                <form class="text-center ">--}}

                                    <input type="text"  name="Firma" placeholder="Firma" class="form-control validate">
                                    <input type="text"  name="Nachname" placeholder="Name & Nachname" class="form-control validate">
                                    <input type="text"  name="Anschrift" placeholder="Anschrift" class="form-control validate">
                                    <input type="text"  name="PLZ" placeholder="PLZ" class="form-control validate">
                                    <input type="text"  name="Ort" placeholder="Ort" class="form-control validate">

                                    <ul class="pl-3">
                                        <li>
                                            <p class="newsletter-check">
                                                <label class="xd-radio">
                                                    <input type="radio" name="radio" checked>
                                                    <span class="checkmark"></span>
                                                </label>
                                                EU Deutschland
                                            </p>
                                        </li>
                                        <li>
                                            <p class="newsletter-check">
                                                <label class="xd-radio">
                                                    <input type="radio" name="radio">
                                                    <span class="checkmark"></span>
                                                </label>
                                                EU andere
                                            </p>
                                        </li>
                                        <li>
                                            <p class="newsletter-check">
                                                <label class="xd-radio">
                                                    <input type="radio" name="radio">
                                                    <span class="checkmark"></span>
                                                </label>
                                                Schweiz & au??erhalb EU
                                            </p>
                                        </li>
                                    </ul>

                                    <p class="mt-5">Bist du mehrwertsteuerpflichtig?</p>
                                    <select class="form-control mb-5 validate">
                                        <option value="">Select</option>
                                        <option >Ja</option>
                                        <option>Umsatzsteuerpflichtig</option>
                                        <option>Umsatzsteuerbefreit</option>
                                    </select>
                                    <p class="mt-3">Wie lautet die Steuer-ID?</p>
                                    <input type="text" name="USt-ID" placeholder="USt-ID" class="form-control validate">
                                    <p class="mt-5">Wohin zahlen wir die Provision?</p>
                                    <input type="text"  name="Konto-Inhaber" placeholder="Konto-Inhaber" class="form-control validate">
                                    <input type="text"  name="IBAN" placeholder="IBAN" class="form-control validate">
                                    <input type="text"  name="bic4" placeholder="BIC" class="form-control validate">
                                    <p class="mt-4">An welche Adresse sollen wir deine <br> Gutschrift-Dokumente f??r deine Steuern senden</p>
                                    <input type="text"  name="Gutschriften" placeholder="E-Mail Gutschriften" class="form-control">
                                    <div class="mt-5">
                                        <ul class="align-items-center justify-content-center nav nav-pills">
                                            <li><a data-toggle="pill" onclick="tabCircleActive('pill6' ,'pill5')"  type="button" onmouseover="formValidate(23,33,7)" id="7" href="#menu12" class="btn mb-80 btn-default btn-pro mt-3">Super, weiter geht???s</a></li>
                                        </ul>
{{--                                        <button type="submit"  class="btn btn-default btn-pro mt-3 mb-80">Super, weiter geht???s</button>--}}
                                    </div>

{{--                                </form>--}}




                            </div>
                        </div>
                        <!-- End Pill 11 -->
{{--                    =======================06-Data Check==================12========--}}
                        <div id="menu12" class="tab-pane fade">
                            <h2><span class="icon-magnifier"></span></h2>
                            <p>Du hast es geschafft. Jetzt nur noch alle <br> Angaben sorgf??ltig pr??fen und <br> best??tigen.</p>
                            <div class="small-container">
                                <table class="table text-left table-borderless data-check-table mt-5">
                                    <thead>
                                    <tr>
                                        <th scope="col" id="title1">Title</th>
                                        <td id="field1">Input</td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope="row" id="title2">Title</th>
                                        <td id="field2">Input</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" id="title3">Title</th>
                                        <td id="field3">Input</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" id="title4">Title</th>
                                        <td id="field4">Input</td>
                                    </tr>
                                    </tbody>
                                </table>
                                <ul class="align-items-center justify-content-center nav nav-pills">
                                    <li><a data-toggle="pill" onclick="tabCircleActive('pill7','pill6')" type="button" href="#menu13" class="btn btn-default btn-pro mt-5">Alles super</a></li>
                                </ul>
{{--                                <button type="submit"  class="btn btn-default btn-pro mt-5">Alles super</button>--}}

                            </div>
                        </div>

                        <!-- End Pill 12 -->
{{--                    =======================08-Completion====================14======--}}
                        <div id="menu14" class="tab-pane fade">
                            <!-- Check Process -->
                            <div class="process-checking-completed">

                                <ul class="d-flex align-items-center justify-content-center">
                                    <li><a href="javascript:void(0)"><span class="icon-check"></span></a></li>
                                </ul>

                            </div>

                            <p class="mb-5">Dein Check-In war erfolgreich.</p>
                            <h2>Willkommen bei <br> Stupid and Simple.</h2>
                            <p class="small-font">Du kannst dieses Fenster jetzt schlie??en</p>
                            <p class="mt-5">Folge uns direkt auf Instagram</p>

                            <div class="social-icons mb-80">
                                <a href="https://www.instagram.com/stupid.and.simple/"> <i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                        <!-- End Pill 14 -->
{{--                    =======================01-Agent02=============15======--}}
                        <div id="menu15" class="tab-pane fade">
                            <div class="small-container">
                                <h2><span class="icon-user"></span></h2>
                                <p>Ich bin Jan, wer bist du?</p>
                                <div class="mt-5">

                                        <input type="text"  name="Name" placeholder="Name" class="form-control validate">
                                        <input type="text"  name="Nachname" placeholder="Nachname" class="form-control validate">
                                        <input type="email" name="E-Mail" placeholder="E-Mail" class="form-control validate">
                                        <div class="mt-4">
                                            <small><strong>Deine Mail-Adresse wird deine Simple ID.</strong> Das beudet, dass s??mtliche Angebote, Rechnungen und Vertragliches mit dieser Adresse abgewickelt wird.</small>
                                        </div>
                                        <p class="mt-4">Sind wir ein Jahrgang?</p>
                                        <input type="date"  name="Datum" placeholder="Geb Datum" class="form-control mt-3 validate">

                                        <ul class="align-items-center justify-content-center nav nav-pills">
                                            <li><a data-toggle="pill" onclick="tabCircleActive('pill2','pill1')" onmouseover="formValidate(33,37,8)" id="8" type="button" href="#menu16" class="btn btn-default btn-pro mt-5">Das bin ich</a></li>
                                        </ul>

                                        {{--                                        <button type="submit"  class="btn btn-default btn-pro mt-5">Das bin ich</button>--}}

                                </div>
                            </div>
                        </div>
                        <!-- End Pill 15 -->
{{--                    ===========02-Agent03==========================16=====--}}
                         <div id="menu16" class="tab-pane fade">
                             <div class="small-container">
                                 <h2><span class="icon-user"></span></h2>
                                 <p>Ich bin Jan, wer bist du?</p>
                                 <div class="mt-5">

                                         <select class="form-control mb-5 validate">
                                             <option value="">Select</option>
                                             <option selected>Mail</option>
                                             <option>Whatsapp</option>
                                             <option>Tel</option>
                                         </select>
                                         <input type="text"  name="Mobil" placeholder="Mobil" class="form-control validate">
                                         <input type="text"  name="Festnetz" placeholder="Festnetz" class="form-control validate">
                                         <input type="text"  name="Skype" placeholder="Skype" class="form-control validate">
                                         <p class="newsletter-check mt-5">
                                             <label class="xd-radio">
                                                 <input type="radio" name="radio"  >
                                                 <span class="checkmark"></span>
                                             </label>
                                             Ich m??chte per E-Mail ??ber Neuigkeiten informiert werden
                                         </p>
                                         <ul class="align-items-center justify-content-center nav nav-pills">
                                             <li><a data-toggle="pill" onclick="tabCircleActive('pill2','pill3')"  type="button" onmouseover="formValidate(37,41,9)" id="9" href="#menu9" class="btn btn-default btn-pro mt-5">weiter zur Firma</a></li>
                                         </ul>
{{--                                        <button type="submit"  class="btn btn-default btn-pro mt-5">weiter zur Firma</button>--}}

                                 </div>
                             </div>
                         </div>
                        <!-- End Pill 16 -->
{{--                    ================================================================--}}
{{--                        =======================07-Confidentiality-agreement&AGB==================13========--}}
                        <div id="menu13" class="tab-pane fade">
                            <h2><span class="icon-hammer2"></span></h2>
                            <p>Lass uns etwas vereinbaren, an das wir <br> uns beide halten werden.</p>
                            <p class="mt-5">Hiermit best??tigen wir, dass wir Daten gut behandeln und nicht an dritte weitergeben. Ebenfalls best??tigen wird, dass s??mtliche Firmen-Interna und sensible Daten, die wir austauschen, geheim gehalten werden. Wir unterstellen uns einer Schweige- bzw. Geheimhaltungspflicht.</p>
                            <p class="mt-5">Bitte best??tige im Austausch unsere AGB. Klicke <a href="#"> hier </a> um die AGB anzuzeigen. Wir haben eine kurze Zusammenfassung eingef??gt.</p>
                            <div class="mt-4">
                                <ul class="pl-3">
                                    <li>
                                        <p class="newsletter-check">
                                            <label class="xd-radio">
                                                <input type="radio" name="radio1" checked>
                                                <span class="checkmark"></span>
                                            </label>
                                            Ich best??tige, die gesamte Kommunikation und Daten vertraulich zu behandeln.
                                        </p>
                                    </li>
                                    <li>
                                        <p class="newsletter-check">
                                            <label class="xd-radio">
                                                <input type="radio" name="radio2" required>
                                                <span class="checkmark"></span>
                                            </label>
                                            Ich best??tige, die <a href="#"> AGB </a> gelesen und verstanden zu haben
                                        </p>
                                    </li>
                                </ul>
                            </div>

                            {{--                            <ul class="align-items-center justify-content-center nav nav-pills">--}}
                            {{--                                <li><a data-toggle="pill"   type="button" href="#menu14" class="btn btn-default btn-pro mt-4 mb-80">Hiermit best??tigt</a></li>--}}
                            {{--                            </ul>--}}
{{--                            <button type="submit" class="btn btn-default btn-pro mt-4 mb-80">Hiermit best??tigt</button>--}}
                        <!-- End Pill 13 -->
                            <button type="submit" class="btn btn-default btn-pro mt-4 mb-80">Hiermit best??tigt</button>

                </div>
                </div>
                    </form>
                </div>
            </div>

        </div>

    </div>





    <!-- footer start -->

    <div class="wrap-inner-bottom">
        <div class="container-fluid p-0">
            <div class="small-container text-center d-flex align-items-center">

                <p>Ich bin Jan Richter. Du erreichst mich unter jan@stupidandsimple.com. Ich bin geboren am 04.02.1986.</p>

            </div>
        </div>
    </div>
    <!-- wrap end -->
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
                    <div class="copyright">?? Stupid and Simple 2020</div>
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

<script>
    function movePage(id) {
        var addMenu = document.getElementById('addMenu');
        if (id === 1)
        {
            addMenu.setAttribute('href','#menu6')
        }else if(id === 2){
            addMenu.setAttribute('href','#menu7')
        }else{
            addMenu.setAttribute('href','#menu8')
        }
    }
</script>
<script>
    function slectPage(id) {
        var addMenu = document.getElementById('slectMenu');
        if (id === 1)
        {
            addMenu.setAttribute('href','#menu12')
        }else{
            addMenu.setAttribute('href','#menu11')
        }
    }
</script>


     {{--validation--}}
<script>

    window.onload = function () {
    document.getElementById('trigger').click();
    document.getElementById('radio').click();
    }
    function validateEmail(email) {
        var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(email);
    }
    var bool = 0;
    var link;
    var emailBool = false;
    var emailId = 0;
    var emailCheckType = false;
    function formValidate(start , end , buttonID ) {
        var validate = document.getElementsByClassName('validate');
        var hrefLink = document.getElementById(buttonID);
        var verifyValidation = 0;
        if (buttonID !==  bool){
            bool = buttonID;
            link = hrefLink.getAttribute('href');
        }
        for ( var i = start ; i < end ; i++)
        {
            if(validate[i].type === "email"){
                emailBool = validateEmail(validate[i].value);
                emailId = i;
                emailCheckType = true;
            }
            if(validate[i].value === '')
            {
                hrefLink.removeAttribute('href');
                validate[i].style.border = "1px solid red";
            }else {
                verifyValidation++;
                validate[i].style.border = "";
                if(emailCheckType === true){
                    if (verifyValidation === ( end - start) && emailBool === true ) {
                        validate[emailId].style.border = "";
                        document.getElementById(buttonID).setAttribute('class','btn btn-default btn-pro get');
                        document.getElementById(buttonID).setAttribute('href',link);
                    }else{
                        validate[emailId].style.border = "1px solid red";
                    }
                }else{
                    if (verifyValidation === ( end - start)) {
                        document.getElementById(buttonID).setAttribute('class','btn btn-default btn-pro get');
                        document.getElementById(buttonID).setAttribute('href',link);
                    }
                }
            }
        }
    }
    let field1=$('input[name="name"]');
    let field2 = $('inpuut[name="nashname"]');
    let field3 = $('input[name="email"]');
    let field4 = $('input[name="gebdatum"]');
    field1.on('input',function () {
        let val=$(this).val();
        let attribute = $(this).attr('name');
        $('#field1').text(val);
        $('#title1').text(attribute);
    });
    field2.on('input',function () {
        let val=$(this).val();
        let attribute = $(this).attr('name');
        $('#field2').text(val);
        $('#title2').text(attribute);
    });
    field3.on('input',function () {
        let val=$(this).val();
        let attribute = $(this).attr('name');
        $('#field3').text(val);
        $('#title3').text(attribute);
    });
    field4.on('input',function () {
        let val=$(this).val();
        let attribute = $(this).attr('name');
        $('#field4').text(val);
        $('#title4').text(attribute);
    });
</script>
<script>
    function tabCircleActive(idStart , idRemove){
        document.getElementById(idRemove).removeAttribute('class');
        // alert(idStart);
        document.getElementById(idStart).setAttribute('class','active');
    }
</script>
</body>
</html>
