<html>
<head lang='en'>
    <head lang='en'>
        <meta charset='UTF-8'>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>PlayBoy Preservativos</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" href="/css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="/css/common.css">
        @yield('styles')

        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,700" rel="stylesheet">
        <link rel="stylesheet" href="/css/font-awesome/css/font-awesome.min.css">
        <link rel="shortcut icon" href="favicon.ico" />
        <script>
            window.Laravel = <?php echo json_encode([
                    'csrfToken' => csrf_token(),
            ]); ?>
        </script>
</head>
<body>
    @yield('content')
    <footer class='page-footer footer black '>
        <div class="container">
            <div class="row">
                <div class="col m1 s12 text-white center">
                    <img src="img/logotipo-playboy-branco-01.svg" id="logo-image">
                </div>
                <div class="col m11 s12 text-white">
                    <ul class='right'>
                        <li><a href="#" class=' text-white'>MARCA</a></li>
                        <li><a href="#" class=' text-white'>produto</a></li>
                        <li><a href="#" class=' text-white'>campanha</a></li>
                        <li><a href="#" class=' text-white'>distribuidoes</a></li>
                        <li><a href="#" class=' text-white'>Novidades</a></li>
                        <li><a href="#"class=' text-white'>Contato</a></li>
                        <li><a href="#" class=' text-white'>prolitica de privacidade</a></li>
                        <li><a href="#" class=' text-white'>termos de uso</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <script type="text/javascript" src="/js/jquery.min.js"></script>
    <script src="/js/materialize.min.js"></script>
    <script src="/js/common.js"></script>
    @yield('scripts')
</body>
</html>