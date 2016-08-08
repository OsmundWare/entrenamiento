<!DOCTYPE html>
<html lang="en-us">
<head>
    <meta charset="utf-8">

    <title> Boxeo </title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <!-- datepicker -->
    <link rel="stylesheet" href="{{URL::to('//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css')}}">

    <!-- Basic Styles -->
    {!! Html::style('css/bootstrap.min.css',array('media'=>'screen')) !!}
    {!! Html::style('css/font-awesome.min.css',array('media'=>'screen')) !!}

            <!-- SmartAdmin Styles : Please note (smartadmin-production.css) was created using LESS variables -->
    {!! Html::style('css/smartadmin-skins.min.css',array('media'=>'screen')) !!}
    {!! Html::style('css/smartadmin-production.min.css',array('media'=>'screen')) !!}

    <!-- GOOGLE FONT -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,300,400,700">

    <!-- iOS web-app metas : hides Safari UI Components and Changes Status Bar Appearance -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

</head>
<body class="">

<!-- HEADER -->
<header id="header">
    <div id="logo-group">
        <!-- PLACE YOUR LOGO HERE -->
        <span id="logo"> {!! Html::image('img/boxeo/boxeo_logo3.png',"SmartAdmin") !!} </span>
    </div>

    <!-- pulled right: nav area -->
    <div class="pull-right">

        <!-- collapse menu button -->
        <div id="hide-menu" class="btn-header pull-right">
            <span> <a href="javascript:void(0);" data-action="toggleMenu" title="Collapse Menu"><i class="fa fa-reorder"></i></a> </span>
        </div>
        <!-- end collapse menu -->


        <!-- logout button -->
        <div id="logout" class="btn-header transparent pull-right">
            <span> <a href="{!! URL::to('logout') !!}" title="Sign Out" data-action="userLogout" data-logout-msg="¿Está seguro que desea cerrar su sesión?"><i class="fa fa-sign-out"></i></a> </span>
        </div>
        <!-- end logout button -->

        <!-- fullscreen button -->
        <div id="fullscreen" class="btn-header transparent pull-right">
            <span> <a href="javascript:void(0);" data-action="launchFullscreen" title="Full Screen"><i class="fa fa-arrows-alt"></i></a> </span>
        </div>
        <!-- end fullscreen button -->

    </div>
    <!-- end pulled right: nav area -->

</header>

<aside id="left-panel">

    <!-- User info -->
    <div class="login-info">
				<span> <!-- User image size is adjusted inside CSS, it should stay as it -->
					<a>
                        {!! Html::image('img/boxeo/usuario1.png',"me",array("class"=>'online')) !!}
                    </a>
				</span>
    </div>

    @yield('panel')

    <span class="minifyme" data-action="minifyMenu">
				<i class="fa fa-arrow-circle-left hit"></i>
    </span>

</aside>
<!-- END NAVIGATION -->

<!-- MAIN PANEL -->
<div id="main" role="main">

    <!-- RIBBON -->
    <div id="ribbon">

        @yield('Breadcrumb')

    </div>
    <!-- END RIBBON -->

    <!-- MAIN CONTENT -->
    <div id="content">
        <div class="row">
            @yield('content')
        </div>

    </div>

</div>
<!-- END MAIN PANEL -->

<!-- PAGE FOOTER -->
<div class="page-footer">
    <div class="row">
        <div class="col-xs-12 col-sm-6">
            <span class="txt-color-white">Proyecto Boxeo 2016</span>
        </div>

    </div>
</div>
<!-- END PAGE FOOTER -->

<!--================================================== -->

<!-- PACE LOADER - turn this on if you want ajax loading to show (caution: uses lots of memory on iDevices)-->
<script data-pace-options='{ "restartOnRequestAfter": true }' src="js/plugin/pace/pace.min.js"></script>

<!-- Link to Google CDN's jQuery + jQueryUI; fall back to local -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>


<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>


        <!-- IMPORTANT: APP CONFIG -->
{!! Html::script('js/app.config.js') !!}

        <!-- BOOTSTRAP JS -->
{!!  Html::script('js/bootstrap/bootstrap.min.js') !!}

        <!-- CUSTOM NOTIFICATION  logout-->
{!!  Html::script('js/notification/SmartNotification.min.js') !!}

        <!-- MAIN APP JS FILE -->
{!! Html::script('js/app.min.js') !!}



@yield('scripts')


</body>

</html>