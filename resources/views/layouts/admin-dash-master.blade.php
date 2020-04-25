<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <!-- Apple devices fullscreen -->
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <!-- Apple devices fullscreen -->
    <meta names="apple-mobile-web-app-status-bar-style" content="black-translucent" />

    <title>FLAT - Dashboard</title>

    <!-- Bootstrap -->
{{--    <link rel="stylesheet" href="css/bootstrap.min.css">--}}
    <link rel="stylesheet" href="{{asset('assets/backend/admin-dash/css/bootstrap.min.css')}}">
    <!-- jQuery UI -->
{{--    <link rel="stylesheet" href="css/plugins/jquery-ui/jquery-ui.min.css">--}}
    <link rel="stylesheet" href="{{asset('assets/backend/admin-dash/css/plugins/jquery-ui/jquery-ui.min.css')}}">
    <!-- PageGuide -->
{{--    <link rel="stylesheet" href="css/plugins/pageguide/pageguide.css">--}}
    <link rel="stylesheet" href="{{asset('assets/backend/admin-dash/css/plugins/pageguide/pageguide.css')}}">
    <!-- Fullcalendar -->
{{--    <link rel="stylesheet" href="css/plugins/fullcalendar/fullcalendar.css">--}}
    <link rel="stylesheet" href="{{asset('assets/backend/admin-dash/css/plugins/fullcalendar/fullcalendar.css')}}">
{{--    <link rel="stylesheet" href="css/plugins/fullcalendar/fullcalendar.print.css" media="print">--}}
    <link rel="stylesheet" href="{{asset('assets/backend/admin-dash/css/plugins/fullcalendar/fullcalendar.print.css')}}" media="print">
    <!-- chosen -->
{{--    <link rel="stylesheet" href="css/plugins/chosen/chosen.css">--}}
    <link rel="stylesheet" href="{{asset('assets/backend/admin-dash/css/plugins/chosen/chosen.css')}}">
    <!-- select2 -->
{{--    <link rel="stylesheet" href="css/plugins/select2/select2.css">--}}
    <link rel="stylesheet" href="{{asset('assets/backend/admin-dash/css/plugins/select2/select2.css')}}">
    <!-- icheck -->
{{--    <link rel="stylesheet" href="css/plugins/icheck/all.css">--}}
    <link rel="stylesheet" href="{{asset('assets/backend/admin-dash/css/plugins/icheck/all.css')}}">
    <!-- Theme CSS -->
{{--    <link rel="stylesheet" href="css/style.css">--}}
    <link rel="stylesheet" href="{{asset('assets/backend/admin-dash/css/style.css')}}">
    <!-- Color CSS -->
{{--    <link rel="stylesheet" href="css/themes.css">--}}
    <link rel="stylesheet" href="{{asset('assets/backend/admin-dash/css/themes.css')}}">

    <link rel="stylesheet" href="{{asset('css/plugins/datatable/TableTools.css')}}">
    <!-- Favicon -->
{{--    <link rel="shortcut icon" href="img/favicon.ico" />--}}
    <link rel="shortcut icon" href="{{asset('assets/backend/admin-dash/img/favicon.ico')}}" />
    <!-- Apple devices Homescreen icon -->
{{--    <link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon-precomposed.png" />--}}
    <link rel="apple-touch-icon-precomposed" href="{{asset('assets/backend/admin-dash/img/apple-touch-icon-precomposed.png')}}" />
</head>

<body>
@section('header')
    <div id="navigation">
        <div class="container-fluid">
            <a href="#" id="brand">FLAT</a>
            <a href="#" class="toggle-nav" rel="tooltip" data-placement="bottom" title="Toggle navigation">
                <i class="fa fa-bars"></i>
            </a>
            <ul class='main-nav'>
                <li>
                    <a href="index.html">
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="#" data-toggle="dropdown" class='dropdown-toggle'>
                        <span>Forms</span>
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="forms-basic.html">Basic forms</a>
                        </li>
                        <li>
                            <a href="forms-extended.html">Extended forms</a>
                        </li>
                        <li>
                            <a href="forms-validation.html">Validation</a>
                        </li>
                        <li>
                            <a href="forms-wizard.html">Wizard</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" data-toggle="dropdown" class='dropdown-toggle'>
                        <span>Components</span>
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="components-timeline.html">Timeline</a>
                        </li>
                        <li>
                            <a href="components-pagestatistics.html">Page statistics</a>
                        </li>
                        <li>
                            <a href="components-sidebarwidgets.html">Sidebar widgets</a>
                        </li>
                        <li>
                            <a href="components-messages.html">Messages &amp; Chat</a>
                        </li>
                        <li>
                            <a href="components-gallery.html">Gallery &amp; Thumbs</a>
                        </li>
                        <li>
                            <a href="components-tiles.html">Tiles</a>
                        </li>
                        <li>
                            <a href="components-icons.html">Icons &amp; Buttons</a>
                        </li>
                        <li>
                            <a href="components-elements.html">UI elements</a>
                        </li>
                        <li>
                            <a href="components-typography.html">Typography</a>
                        </li>
                        <li>
                            <a href="components-bootstrap.html">Bootstrap elements</a>
                        </li>
                        <li>
                            <a href="components-grid.html">Grid</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" data-toggle="dropdown" class='dropdown-toggle'>
                        <span>Tables</span>
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="tables-basic.html">Basic tables</a>
                        </li>
                        <li>
                            <a href="tables-advanced.html">Advanced tables</a>
                        </li>
                        <li>
                            <a href="tables-large.html">Large tables</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" data-toggle="dropdown" class='dropdown-toggle'>
                        <span>Plugins</span>
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="plugins-charts.html">Charts</a>
                        </li>
                        <li>
                            <a href="plugins-calendar.html">Calendar</a>
                        </li>
                        <li>
                            <a href="plugins-filemanager.html">File manager</a>
                        </li>
                        <li>
                            <a href="plugins-filetrees.html">File trees</a>
                        </li>
                        <li>
                            <a href="plugins-elements.html">Editable elements</a>
                        </li>
                        <li>
                            <a href="plugins-maps.html">Maps</a>
                        </li>
                        <li>
                            <a href="plugins-dragdrop.html">Drag &amp; Drop widgets</a>
                        </li>

                    </ul>
                </li>
                <li>
                    <a href="#" data-toggle="dropdown" class='dropdown-toggle'>
                        <span>Pages</span>
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="more-error.html">Error pages</a>
                        </li>
                        <li class='dropdown-submenu'>
                            <a href="#" data-toggle="dropdown" class='dropdown-toggle'>Shop</a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="more-shop-list.html">List view</a>
                                </li>
                                <li>
                                    <a href="more-shop-product.html">Product view</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="more-pricing.html">Pricing tables</a>
                        </li>
                        <li>
                            <a href="more-faq.html">FAQ</a>
                        </li>
                        <li>
                            <a href="more-invoice.html">Invoice</a>
                        </li>
                        <li>
                            <a href="more-userprofile.html">User profile</a>
                        </li>
                        <li>
                            <a href="more-searchresults.html">Search results</a>
                        </li>
                        <li>
                            <a href="more-login.html">Login</a>
                        </li>
                        <li>
                            <a href="more-locked.html">Lock screen</a>
                        </li>
                        <li>
                            <a href="more-email.html">Email templates</a>
                        </li>
                        <li>
                            <a href="more-blank.html">Blank page</a>
                        </li>
                        <li class='dropdown-submenu'>
                            <a href="#" data-toggle="dropdown" class='dropdown-toggle'>Blog</a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="more-blog-list.html">List big image</a>
                                </li>
                                <li>
                                    <a href="more-blog-list-small.html">List small image</a>
                                </li>
                                <li>
                                    <a href="more-blog-post.html">Post</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class='active'>
                    <a href="#" data-toggle="dropdown" class='dropdown-toggle'>
                        <span>Layouts</span>
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="layouts-sidebar-hidden.html">Default hidden sidebar</a>
                        </li>
                        <li>
                            <a href="layouts-sidebar-right.html">Sidebar right side</a>
                        </li>
                        <li>
                            <a href="layouts-color.html">Different default color</a>
                        </li>
                        <li>
                            <a href="layouts-fixed.html">Fixed layout</a>
                        </li>
                        <li>
                            <a href="layouts-fixed-topside.html">Fixed topbar and sidebar</a>
                        </li>
                        <li class='dropdown-submenu'>
                            <a href="#">Mobile sidebar</a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="layouts-mobile-slide.html">Slide</a>
                                </li>
                                <li>
                                    <a href="layouts-mobile-button.html">Button</a>
                                </li>
                            </ul>
                        </li>
                        <li class='active'>
                            <a href="layouts-footer.html">Footer</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <div class="user">
                <ul class="icon-nav">
                    <li class='dropdown'>
                        <a href="#" class='dropdown-toggle' data-toggle="dropdown">
                            <i class="fa fa-envelope"></i>
                            <span class="label label-lightred">4</span>
                        </a>
                        <ul class="dropdown-menu pull-right message-ul">
                            <li>
                                <a href="#">
                                    <img src="img/demo/user-1.jpg" alt="">
                                    <div class="details">
                                        <div class="name">Jane Doe</div>
                                        <div class="message">
                                            Lorem ipsum Commodo quis nisi ...
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="img/demo/user-2.jpg" alt="">
                                    <div class="details">
                                        <div class="name">John Doedoe</div>
                                        <div class="message">
                                            Ut ad laboris est anim ut ...
                                        </div>
                                    </div>
                                    <div class="count">
                                        <i class="fa fa-comment"></i>
                                        <span>3</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="img/demo/user-3.jpg" alt="">
                                    <div class="details">
                                        <div class="name">Bob Doe</div>
                                        <div class="message">
                                            Excepteur Duis magna dolor!
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="components-messages.html" class='more-messages'>Go to Message center
                                    <i class="fa fa-arrow-right"></i>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="dropdown sett">
                        <a href="#" class='dropdown-toggle' data-toggle="dropdown">
                            <i class="fa fa-cog"></i>
                        </a>
                        <ul class="dropdown-menu pull-right theme-settings">
                            <li>
                                <span>Layout-width</span>
                                <div class="version-toggle">
                                    <a href="#" class='set-fixed'>Fixed</a>
                                    <a href="#" class="active set-fluid">Fluid</a>
                                </div>
                            </li>
                            <li>
                                <span>Topbar</span>
                                <div class="topbar-toggle">
                                    <a href="#" class='set-topbar-fixed'>Fixed</a>
                                    <a href="#" class="active set-topbar-default">Default</a>
                                </div>
                            </li>
                            <li>
                                <span>Sidebar</span>
                                <div class="sidebar-toggle">
                                    <a href="#" class='set-sidebar-fixed'>Fixed</a>
                                    <a href="#" class="active set-sidebar-default">Default</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class='dropdown colo'>
                        <a href="#" class='dropdown-toggle' data-toggle="dropdown">
                            <i class="fa fa-tint"></i>
                        </a>
                        <ul class="dropdown-menu pull-right theme-colors">
                            <li class="subtitle">
                                Predefined colors
                            </li>
                            <li>
                                <span class='red'></span>
                                <span class='orange'></span>
                                <span class='green'></span>
                                <span class="brown"></span>
                                <span class="blue"></span>
                                <span class='lime'></span>
                                <span class="teal"></span>
                                <span class="purple"></span>
                                <span class="pink"></span>
                                <span class="magenta"></span>
                                <span class="grey"></span>
                                <span class="darkblue"></span>
                                <span class="lightred"></span>
                                <span class="lightgrey"></span>
                                <span class="satblue"></span>
                                <span class="satgreen"></span>
                            </li>
                        </ul>
                    </li>
                    <li class='dropdown language-select'>
                        <a href="#" class='dropdown-toggle' data-toggle="dropdown">
                            <img src="img/demo/flags/us.gif" alt="">
                            <span>US</span>
                        </a>
                        <ul class="dropdown-menu pull-right">
                            <li>
                                <a href="#">
                                    <img src="img/demo/flags/br.gif" alt="">
                                    <span>Brasil</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="img/demo/flags/de.gif" alt="">
                                    <span>Deutschland</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="img/demo/flags/es.gif" alt="">
                                    <span>España</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="img/demo/flags/fr.gif" alt="">
                                    <span>France</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <div class="dropdown">
                    <a href="#" class='dropdown-toggle' data-toggle="dropdown">John Doe
                        <img src="img/demo/user-avatar.jpg" alt="">
                    </a>
                    <ul class="dropdown-menu pull-right">
{{--                        <li>--}}
{{--                            <a href="more-userprofile.html">Edit profile</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="#">Account settings</a>--}}
{{--                        </li>--}}
                        <li>
                            @auth
                                <form method="post" action="{{route('logout')}}" class="dropdown-item">

                                    @csrf

                                    <button class="btn btn-primary" type="submit">Logout</button>
                                </form>
                                @endauth
{{--                            </a>--}}
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

@show
<div class="container-fluid" id="content">
    @section('sidebar')
    <div id="left">

        <form action="search-results.html" method="GET" class='search-form'>
            <div class="search-pane">
                <input type="text" name="search" placeholder="Search here...">
                <button type="submit">
                    <i class="fa fa-search"></i>
                </button>
            </div>
        </form>

        <div class="subnav">
            <div class="subnav-title">
                <a href="#" class='toggle-subnav'>
                    <i class="fa fa-angle-down"></i>
                    <span>Content</span>
                </a>
            </div>
            <ul class="subnav-menu">
                <li class='dropdown'>
                    <a href="#" data-toggle="dropdown">Articles</a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#">Action #1</a>
                        </li>
                        <li>
                            <a href="#">Antoher Link</a>
                        </li>
                        <li class='dropdown-submenu'>
                            <a href="#" data-toggle="dropdown" class='dropdown-toggle'>Go to level 3</a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="#">This is level 3</a>
                                </li>
                                <li>
                                    <a href="#">Unlimited levels</a>
                                </li>
                                <li>
                                    <a href="#">Easy to use</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">News</a>
                </li>
                <li>
                    <a href="#">Pages</a>
                </li>
                <li>
                    <a href="#">Comments</a>
                </li>
            </ul>
        </div>
        <div class="subnav">
            <div class="subnav-title">
                <a href="#" class='toggle-subnav'>
                    <i class="fa fa-angle-down"></i>
                    <span>Plugins</span>
                </a>
            </div>
            <ul class="subnav-menu">
                <li>
                    <a href="#">Cache manager</a>
                </li>
                <li class='dropdown'>
                    <a href="#" data-toggle="dropdown">Import manager</a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#">Action #1</a>
                        </li>
                        <li>
                            <a href="#">Antoher Link</a>
                        </li>
                        <li class='dropdown-submenu'>
                            <a href="#" data-toggle="dropdown" class='dropdown-toggle'>Go to level 3</a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="#">This is level 3</a>
                                </li>
                                <li>
                                    <a href="#">Unlimited levels</a>
                                </li>
                                <li>
                                    <a href="#">Easy to use</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">Contact form generator</a>
                </li>
                <li>
                    <a href="#">SEO optimization</a>
                </li>
            </ul>
        </div>
        <div class="subnav">
            <div class="subnav-title">
                <a href="#" class='toggle-subnav'>
                    <i class="fa fa-angle-down"></i>
                    <span>Settings</span>
                </a>
            </div>
            <ul class="subnav-menu">
                <li>
                    <a href="#">Theme settings</a>
                </li>
                <li class='dropdown'>
                    <a href="#" data-toggle="dropdown">Page settings</a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#">Action #1</a>
                        </li>
                        <li>
                            <a href="#">Antoher Link</a>
                        </li>
                        <li class='dropdown-submenu'>
                            <a href="#" data-toggle="dropdown" class='dropdown-toggle'>Go to level 3</a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="#">This is level 3</a>
                                </li>
                                <li>
                                    <a href="#">Unlimited levels</a>
                                </li>
                                <li>
                                    <a href="#">Easy to use</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">Security settings</a>
                </li>
            </ul>
        </div>
        <div class="subnav subnav-hidden">
            <div class="subnav-title">
                <a href="#" class='toggle-subnav'>
                    <i class="fa fa-angle-right"></i>
                    <span>Default hidden</span>
                </a>
            </div>
            <ul class="subnav-menu">
                <li>
                    <a href="#">Menu</a>
                </li>
                <li class='dropdown'>
                    <a href="#" data-toggle="dropdown">With submenu</a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#">Action #1</a>
                        </li>
                        <li>
                            <a href="#">Antoher Link</a>
                        </li>
                        <li class='dropdown-submenu'>
                            <a href="#" data-toggle="dropdown" class='dropdown-toggle'>More stuff</a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="#">This is level 3</a>
                                </li>
                                <li>
                                    <a href="#">Easy to use</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">Security settings</a>
                </li>
            </ul>
        </div>
    </div>
    @show

    <!--			====================================Start-Content==================================	-->

        <div id="main">
        <div class="container-fluid">

            <div class="page-header">
                <div class="pull-left">
                    <h1>Site with footer</h1>
                </div>
                <div class="pull-right">
                    <ul class="minitiles">
                        <li class='grey'>
                            <a href="#">
                                <i class="fa fa-cogs"></i>
                            </a>
                        </li>
                        <li class='lightgrey'>
                            <a href="#">
                                <i class="fa fa-globe"></i>
                            </a>
                        </li>
                    </ul>
                    <ul class="stats">
                        <li class='satgreen'>
                            <i class="fa fa-money"></i>
                            <div class="details">
                                <span class="big">$324,12</span>
                                <span>Balance</span>
                            </div>
                        </li>
                        <li class='lightred'>
                            <i class="fa fa-calendar"></i>
                            <div class="details">
                                <span class="big">February 22, 2013</span>
                                <span>Wednesday, 13:56</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
{{--            <div class="breadcrumbs">--}}
{{--                <ul>--}}
{{--                    <li>--}}
{{--                        <a href="more-login.html">Home</a>--}}
{{--                        <i class="fa fa-angle-right"></i>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <a href="layouts-sidebar-hidden.html">Layouts</a>--}}
{{--                        <i class="fa fa-angle-right"></i>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <a href="layouts-footer.html">Footer</a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--                <div class="close-bread">--}}
{{--                    <a href="#">--}}
{{--                        <i class="fa fa-times"></i>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--            </div>--}}
            <div class="row">
                <div class="col-md-12">
                    @if(session()->has('success'))
                    <div class="alert alert-success d-flex justify-content-center text-center w-50">{{session()->get('success')}}</div>
                    @endif
                </div>
                <div class="col-sm-12">
                    <div class="box">
{{--                        <div class="box-title">--}}
{{--                            <h3>--}}
{{--                                <i class="fa fa-bars"></i>--}}
{{--                                Basic Widget--}}
{{--                            </h3>--}}
{{--                        </div>--}}
                        <div class="col-sm-12">
                            <div class="box box-color box-bordered">
                                <div class="box-title">
                                    <h3>
                                        <i class="fa fa-table"></i>
                                        Feedback
                                    </h3>
                                </div>
                                <div class="box-content nopadding">
                                    <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer">
{{--                                        <div class="dataTables_length" id="DataTables_Table_0_length">--}}
{{--                                            <label>Show <select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="">--}}
{{--                                                    <option value="10">10</option><option value="25">25</option><option value="50">50</option>--}}
{{--                                                    <option value="100">100</option>--}}
{{--                                                </select> entries--}}
{{--                                            </label>--}}
{{--                                        </div>--}}
{{--                                        <div id="DataTables_Table_0_filter" class="dataTables_filter">--}}
{{--                                            <label>Search:<input type="search" class="" placeholder="" aria-controls="DataTables_Table_0">--}}
{{--                                            </label>--}}
{{--                                        </div>--}}
                                        <table class="table table-hover table-nomargin table-bordered dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info" style="width: 1105px;">
                                            <thead>
                                            <tr role="row">
                                                <th class="d-none" style="display: none">id</th>
                                                <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Rendering engine: activate to sort column descending" style="width: 210px;" aria-sort="ascending">Name</th>
                                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 202px;">Email</th>
                                                <th class="hidden-350 sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 184px;">Date Of Birth</th>
                                                <th class="hidden-1024 sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 178px;">IBAN</th>
                                                <th class="hidden-480 sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Date</th>
                                                <th class="hidden-480 sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 133px;">Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($feedback as $feed)
                                            <tr role="row" class="odd">
                                                <td class="d-none" style="display: none">{{$feed['id']}}</td>
                                                <td class="sorting_1">{{$feed['name_first'].' '.$feed['nashname']}}</td>
                                                <td>{{$feed['email']}}</td>
                                                <td class="hidden-350">{{$feed['gebdatum']}}</td>
                                                <td class="hidden-1024">{{$feed['IBAN']}}</td>
                                                <td class="hidden-480">{{$feed['Datum']}}</td>
                                                <td>
                                                    <button class="view-data-btn" data-placement="bottom" title="View" data-toggle="modal" data-target="#exampleModal" ><i class="fa fa-search"></i></button>
                                                    <button class="edit-data-btn" data-placement="bottom" title="Edit" data-toggle="modal" data-target="#editModal"><i class="fa fa-edit"></i></button>
                                                </td>
                                            </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
{{--                                        <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Showing 1 to 10 of 18 entries</div>--}}
{{--                                        <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">--}}
{{--                                            <a class="paginate_button previous disabled" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" id="DataTables_Table_0_previous">Previous</a>--}}
{{--                                            <span>--}}
{{--                                                <a class="paginate_button current" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0">1</a>--}}
{{--                                                <a class="paginate_button " aria-controls="DataTables_Table_0" data-dt-idx="2" tabindex="0">2</a>--}}
{{--                                            </span>--}}
{{--                                            <a class="paginate_button next" aria-controls="DataTables_Table_0" data-dt-idx="3" tabindex="0" id="DataTables_Table_0_next">Next</a>--}}
{{--                                        </div>--}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    <!-- View Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title text-uppercase" id="exampleModalLabel">View data</h5>
{{--                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
{{--                                            <span aria-hidden="true">&times;</span>--}}
{{--                                        </button>--}}
                                    </div>
                                    <div class="modal-body" id="show-feed-back-modal">

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
{{--                                        <button type="button" class="btn btn-primary">Save changes</button>--}}
                                    </div>
                                </div>
                            </div>
                        </div>

                    <!-- Edit Modal -->
                        <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title text-uppercase" id="exampleModalLabel">update data</h5>
{{--                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
{{--                                            <span aria-hidden="true">&times;</span>--}}
{{--                                        </button>--}}
                                    </div>
                                    <div class="modal-body" id="show-edit-form-modal">

                                    </div>
                                    <div class="modal-footer">
{{--                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>--}}
{{--                                        <button type="button" class="btn btn-primary">Save changes</button>--}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-content">
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>
            <!--			====================================End-Content==================================	-->
        </div>
    </div>

    <!--			====================================End-Content==================================	-->

</div>

<!--=====================================================Start-Footer===================================================-->


@section('footer')
    <div id="footer">
        <p>
            FLAT - Responsive Admin Template
            <span class="font-grey-4">|</span>
            <a href="#">Contact</a>
            <span class="font-grey-4">|</span>
            <a href="#">Imprint</a>
        </p>
        <a href="#" class="gototop">
            <i class="fa fa-arrow-up"></i>
        </a>
    </div>
@show
<!--=====================================================Start-Footer===================================================-->
@section('script')
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

<!-- jQuery -->
{{--    <script src="js/jquery.min.js"></script>--}}
<script src="{{asset('assets/backend/admin-dash/js/jquery.min.js')}}"></script>


<!-- Nice Scroll -->
{{--    <script src="js/plugins/nicescroll/jquery.nicescroll.min.js"></script>--}}
<script src="{{asset('assets/backend/admin-dash/js/plugins/nicescroll/jquery.nicescroll.min.js')}}"></script>
<!-- jQuery UI -->
{{--    <script src="js/plugins/jquery-ui/jquery-ui.js"></script>--}}
<script src="{{asset('assets/backend/admin-dash/js/plugins/jquery-ui/jquery-ui.js')}}"></script>
<!-- Touch enable for jquery UI -->
{{--    <script src="js/plugins/touch-punch/jquery.touch-punch.min.js"></script>--}}
<script src="{{asset('assets/backend/admin-dash/js/plugins/touch-punch/jquery.touch-punch.min.js')}}"></script>
<!-- slimScroll -->

<script src="js/plugins/datatables/jquery.dataTables.min.js"></script>
{{--<script src="js/plugins/datatables/extensions/dataTables.tableTools.min.js"></script>--}}
{{--<script src="js/plugins/datatables/extensions/dataTables.colReorder.min.js"></script>--}}
{{--<script src="js/plugins/datatables/extensions/dataTables.colVis.min.js"></script>--}}
{{--<script src="js/plugins/datatables/extensions/dataTables.scroller.min.js"></script>--}}

{{--    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>--}}
<script src="{{asset('assets/backend/admin-dash/js/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>
<!-- Bootstrap -->
{{--    <script src="js/bootstrap.min.js"></script>--}}
<script src="{{asset('assets/backend/admin-dash/js/bootstrap.min.js')}}"></script>
<!-- vmap -->
{{--    <script src="js/plugins/vmap/jquery.vmap.min.js"></script>--}}
<script src="{{asset('assets/backend/admin-dash/js/plugins/vmap/jquery.vmap.min.js')}}"></script>
{{--    <script src="js/plugins/vmap/jquery.vmap.world.js"></script>--}}
<script src="{{asset('assets/backend/admin-dash/js/plugins/vmap/jquery.vmap.world.js')}}"></script>
{{--    <script src="js/plugins/vmap/jquery.vmap.sampledata.js"></script>--}}
<script src="{{asset('assets/backend/admin-dash/js/plugins/vmap/jquery.vmap.sampledata.js')}}"></script>
<!-- Bootbox -->
{{--    <script src="js/plugins/bootbox/jquery.bootbox.js"></script>--}}
<script src="{{asset('assets/backend/admin-dash/js/plugins/bootbox/jquery.bootbox.js')}}"></script>
<!-- Flot -->
{{--    <script src="js/plugins/flot/jquery.flot.min.js"></script>--}}
<script src="{{asset('assets/backend/admin-dash/js/plugins/flot/jquery.flot.min.js')}}"></script>
{{--    <script src="js/plugins/flot/jquery.flot.bar.order.min.js"></script>--}}
<script src="{{asset('assets/backend/admin-dash/js/plugins/flot/jquery.flot.bar.order.min.js')}}"></script>
{{--    <script src="js/plugins/flot/jquery.flot.pie.min.js"></script>--}}
<script src="{{asset('assets/backend/admin-dash/js/plugins/flot/jquery.flot.pie.min.js')}}"></script>
{{--    <script src="js/plugins/flot/jquery.flot.resize.min.js"></script>--}}
<script src="{{asset('assets/backend/admin-dash/js/plugins/flot/jquery.flot.resize.min.js')}}"></script>
<!-- imagesLoaded -->
{{--    <script src="js/plugins/imagesLoaded/jquery.imagesloaded.min.js"></script>--}}
<script src="{{asset('assets/backend/admin-dash/js/plugins/imagesLoaded/jquery.imagesloaded.min.js')}}"></script>
<!-- PageGuide -->
{{--    <script src="js/plugins/pageguide/jquery.pageguide.js"></script>--}}
<script src="{{asset('assets/backend/admin-dash/js/plugins/pageguide/jquery.pageguide.js')}}"></script>
<!-- FullCalendar -->
{{--    <script src="js/plugins/fullcalendar/moment.min.js"></script>--}}
<script src="{{asset('assets/backend/admin-dash/js/plugins/fullcalendar/moment.min.js')}}"></script>
{{--    <script src="js/plugins/fullcalendar/fullcalendar.min.js"></script>--}}
<script src="{{asset('assets/backend/admin-dash/js/plugins/fullcalendar/fullcalendar.min.js')}}"></script>
<!-- Chosen -->
{{--    <script src="js/plugins/chosen/chosen.jquery.min.js"></script>--}}
<script src="{{asset('assets/backend/admin-dash/js/plugins/chosen/chosen.jquery.min.js')}}"></script>
<!-- select2 -->
{{--    <script src="js/plugins/select2/select2.min.js"></script>--}}
<script src="{{asset('assets/backend/admin-dash/js/plugins/select2/select2.min.js')}}"></script>
<!-- icheck -->
{{--    <script src="js/plugins/icheck/jquery.icheck.min.js"></script>--}}
<script src="{{asset('assets/backend/admin-dash/js/plugins/icheck/jquery.icheck.min.js')}}"></script>

<!-- Theme framework -->
{{--    <script src="js/eakroko.min.js"></script>--}}
<script src="{{asset('assets/backend/admin-dash/js/eakroko.min.js')}}"></script>
<!-- Theme scripts -->
{{--    <script src="js/application.min.js"></script>--}}
<script src="{{asset('assets/backend/admin-dash/js/application.min.js')}}"></script>
<!-- Just for demonstration -->
{{--    <script src="js/demonstration.min.js"></script>--}}
<script src="{{asset('assets/backend/admin-dash/js/demonstration.min.js')}}"></script>

<!--[if lte IE 9]-->
{{--<script src="js/plugins/placeholder/jquery.placeholder.min.js"></script>--}}
<script src="{{asset('assets/backend/admin-dash/js/plugins/placeholder/jquery.placeholder.min.js')}}"></script>

<script>
    $(document).ready(function() {
        $('input, textarea').placeholder();
    });

    $('.view-data-btn').on('click',function (e) {
        e.preventDefault();
        let id=$(this).parent().siblings()[0].innerHTML;
        let url = 'view-data'+'/'+id;
        let type = 'get';
        $.ajax({
            url:url,
            type:type,
            success:function (response) {
                $('#show-feed-back-modal').html(response);
            },
            error:function (error) {
                console.log(error);
            }
        });
    });
    $('.edit-data-btn').on('click',function (e) {
        e.preventDefault();
        let id=$(this).parent().siblings()[0].innerHTML;
        let url = 'edit-data-form'+'/'+id;
        $.ajax({
           url:url,
           type:"get",
           success:function (response) {
                $('#show-edit-form-modal').html(response);
           },
           error:function (error) {
                console.log(error);
           }
        });
    });
</script>

@show

</body>

</html>
