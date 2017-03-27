<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>PlayBoy Preservativos</title>
    <link href="/css/app.css" rel="stylesheet">
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link href="/css/login/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="/css/login/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
    <link href="/css/login/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="/css/login/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL STYLES -->
    <link href="/css/login/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
    <link href="/css/login/login-5.min.css" rel="stylesheet" type="text/css" />
    <link href="/css/login/custom_playboy.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL STYLES -->
    <script>
        window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
        ]); ?>
    </script>

    <link rel="shortcut icon" href="favicon.ico" /> </head>
</head>
<body class="login">

    @yield('content')

    <script src="/js/login/jquery.min.js" type="text/javascript"></script>
    <script src="/js/login/bootstrap.min.js" type="text/javascript"></script>
    <!-- PLUGIN -->
    <script src="/js/login/jquery.backstretch.min.js" type="text/javascript"></script>
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="/js/login/login-5.min.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL SCRIPTS -->
</body>