
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    {{--    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">--}}
    {{--    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>--}}
    <script
        src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
{{--    <script type="text/javascript" src={{asset('assets/js/printview.js')}}></script>--}}

    <script type="text/javascript">
        $(document).ready(function(){
            $('.btnprn').printPage();
        });
    </script>
    <style>
        .invoice-title h2, .invoice-title h3 {
            display: inline-block;
        }

        .table > tbody > tr > .no-line {
            border-top: none;
        }

        .table > thead > tr > .no-line {
            border-bottom: none;
        }

        .table > tbody > tr > .thick-line {
            border-top: 2px solid;
        }
    </style>
</head>
<body>

{{--<a href="{{url('get-report-print-list-of-students')}}" class="btnprn btn">Print Preview</a>--}}
<button id="printInvoice" onclick="printDiv(printch);" class="btn btn-danger btn-lg float-left" style="margin-top: 25px; margin-right: 125px;"><i class="fa fa-print"></i> Print</button>


<div id="printch" class="invoice overflow-auto" style="display: block">

    <div class="container">
        {{--    @dd(empty($data))--}}
{{--        @if(count($data) == 0)--}}
{{--            <div class="justify-content-lg-center border-bottom ">--}}
{{--                <h1>Nothing to print</h1>--}}
{{--            </div>--}}
{{--        @else--}}
            <div class="row">
                <div class="col-md-12">
                    <div class="invoice-title">


{{--                        <h2 class="d-flex justify-content-center name" >--}}
{{--                            <img src="{{asset('assets/img/log.png')}}"  style="max-width: 500px;">--}}
{{--                        </h2>--}}

                    </div>
{{--                    <span class="offset-3"> Phone:-{{$data[0]["branch_phone"]}} Email:-{{$data[0]["branch_email"]}} Address:-{{$data[0]["branch_address"]}} </span>--}}
{{--                    <hr style="border: 2px solid black;">--}}

                </div>

                <div class="offset-3">
                    <h3>Report</h3>
                </div>

                <div class="col-md-12">

                    <div class="row">
{{--                        <div class="col-md-2">--}}
{{--                            <address>--}}
{{--                                <strong>--}}
{{--                                    <h4>Branch<br>--}}
{{--                                        <hr>--}}
{{--                                        Session: <br>--}}
{{--                                        <hr>--}}
{{--                                        Class: <br>--}}
{{--                                        <hr>--}}
{{--                                        Section:--}}
{{--                                    </h4></strong>--}}
{{--                            </address>--}}
{{--                        </div>--}}
                        <div class="col-md-2 text-right">
                            <address>
                                <strong>
{{--                                    <h4>--}}
{{--                                        {{$data[0]["branch_name"]}}<br>--}}
{{--                                        <hr>--}}
{{--                                        {{$data[0]["session_name"]}}<br>--}}
{{--                                        <hr>--}}
{{--                                        {{$data[0]["class_name"]}}<br>--}}
{{--                                        <hr>--}}
{{--                                        {{$data[0]["section_name"]}}<br>--}}
{{--                                    </h4>--}}
                                </strong>
                            </address>
                        </div>
                    </div>
                </div>
            </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <table class="table datatable2 display table-bordered table-hover responsive w-100 dataTable no-footer dtr-inline" role="grid" id="class-list-table" aria-describedby="DataTables_Table_1_info" style="width: 100%;">
                    <tr class="text-center text-uppercase " style="background-color: #6c757d">
                        <td class="text-dark">First Name</td>
                        <td class="text-dark">Nashname</td>
                        <td class="text-dark">Email</td>
                        <td class="text-dark">Gebdatum</td>
                        <td class="text-darkt">Mobil</td>
                        <td class="text-darkt">Festnetz</td>
                        <td class="text-darkt">Firmen name</td>
                        <td class="text-darkt">Adresszusatz</td>
                    </tr>
                    @foreach($reportData as $key=>$datum)
                        <tr class="text-center">
                            <td>{{$datum["name_first"]}}</td>
                            <td>{{$datum["nashname"]}}</td>
                            <td>{{$datum["email"]}}</td>
                            <td>{{$datum["gebdatum"]}}</td>
                            <td>{{$datum["gebdatum"]}}</td>
                            <td>{{$datum["Mobil"]}}</td>
                            <td>{{$datum["Festnetz"]}}</td>
                            <td>{{$datum["Adresszusatz"]}}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
</body>
</html>
<script>
    $(document).ready(function() {
        window.setTimeout(function() {
            document.getElementById('printInvoice').click();
            window.history.back();
        }, 1000);


    });
    function printDiv(printch){
        document.getElementById('printInvoice').style.display='none';

        var printContents = document.getElementById('printch').innerHTML;
        var originalContents = document.body.innerHTML;

        var printHead = ".";
        var headOriginal = document.title;


        document.title = printHead;
        document.body.innerHTML = printContents ;
        // document.getElementById('printInvoice').style.display='block';


        document.body.innerHTML = printContents;
        // var css = '@page { size: landscape; }';
        //     head = document.head || document.getElementsByTagName('head')[0],
        //     style = document.createElement('style');
        //
        // style.type = 'text/css';
        // style.media = 'print';
        //
        // if (style.styleSheet){
        //     style.styleSheet.cssText = css;
        // } else {
        //     style.appendChild(document.createTextNode(css));
        // }

        // head.appendChild(style);

        window.print();

        document.title = headOriginal;
        document.body.innerHTML = originalContents;
        $('#printInvoice').show();
    }
</script>


