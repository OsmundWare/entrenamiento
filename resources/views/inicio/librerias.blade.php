<!DOCTYPE html>
<html lang="en-us" id="extr-page">

<head>
    <meta charset="utf-8">
    <title> Boxeo</title>

    <!-- #CSS Links -->
    <!-- Basic Styles -->
    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/font-awesome.min.css">

    <!-- SmartAdmin Styles : Please note (smartadmin-production.css) was created using LESS variables -->
    <link rel="stylesheet" type="text/css" media="screen" href="css/smartadmin-production.min.css">
</head>

<body class="animated fadeInDown">

<header id="header">
    <div id="logo-group">
        <span id="logo"> {!! Html::image('img/boxeo/boxeo_logo3.png',"SmartAdmin") !!} </span>
    </div>
</header>

<div id="main" role="main">

    @yield('content')

</div>

<!--================================================== -->

<!--librería jquery importada de internet -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>

<!-- BOOTSTRAP JS  da el efecto carrusel a la imagenes del login-->
{!! Html::script('js/bootstrap/bootstrap.min.js') !!}

<script type="text/javascript">

    @yield('script')

</script>

</body>
</html>