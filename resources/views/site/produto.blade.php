@extends('layouts.site')
@section('styles')
    <link rel="stylesheet" href="/css/produto.css">
    <link href="/css/jquery.bxslider.css" rel="stylesheet" />
@endsection
@section('content')
    <div class="navbar-fixed">
        <nav class="transparent shadow-control" id="nav-header">
            <div class="nav-wrapper nav-container ">
                <a href="/" class="brand-logo text-black hide-on-med-and-down">
                    <img src="/img/logotipo-playboy-horz-branco-01.svg" class='hide-on-med-and-down' id="logo-topo">
                </a>
                <a href="#" data-activates="mobile-demo" class="button-collapse text-white " style="width: 100%;margin-left: -18px;">
			      		<span class="right">
			      			<i class="material-icons">menu</i>
			      		</span>
                    <img src="/img/logotipo-playboy-horz-branco-01.svg" style="float: left;width: 100px;margin-top: 5px;margin-left: 5px;">
                </a>

                <ul class="right hide-on-med-and-down">
                    <li><a href="#" class='text-white'>Marca</a></li>
                    <li><a href="/produtos" class='text-white'>Produto</a></li>
                    <li><a href="#" class='text-white'>Campanha</a></li>
                    <li><a href="#" class='text-white'>Novidades</a></li>
                    <li><a href="/#distribuidores" class='text-white page-scroll'>Distribuidores</a></li>
                    <li><a href="#" class='text-white'><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#" class='text-white'><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    <li><a href="#" class='text-white'><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                </ul>
                <ul class="side-nav black" id="mobile-demo">
                    <li class='logo-menu'><img src="/img/logotipo-playboy-branco.svg"></li>
                    <li><a href="/produtos" class='text-white'>Produto</a></li>
                    <li><a href="#" class='text-white'>Campanha</a></li>
                    <li><a href="/#distribuidores" class='text-white page-scroll'>Distribuidores</a></li>
                    <li><a href="#" class='text-white'>Notícias</a></li>
                    <li><a href="#" class='text-white'>Contato</a></li>
                </ul>
            </div>
        </nav>
    </div>

    <section id="banner" >
        <img class="responsive-img" src="/img/produtos_header.jpg" style="max-width: 50% !important;">
    </section>

    <section id="product" class='pad-section no-margin'>
        <div class="container">
            <div class="row">
                <div class="col s12">
                    <h2 class='section-title center text-black'>CONHEÇA NOSSOS <br>	PRODUTOS</h2>
                </div>

                <div class="row">
                    <div class="col s12">
                        <ul class="bxslider ">
                            <li >
                                <div class='col s12 m6' style="">
                                    <img src="/img/pack-produto.png"  class='responsive-img img-center' />
                                </div>

                                <div class='col s12 m6' style="">
                                    <h2 class="titulo-descritivo text-black">PRESERVATIVO PLAYBOY <br> LUBRIFICADO 1</h2>

                                    <p class="text-black">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus mattis rhoncus erat, nec euismod ligula. Ut ut tellus in nibh bibendum eleifend quis ac neque. Donec non odio egestas,  Maecenas ultrices venenatis blandit.  imperdiet velit, vel finibus odio. Cras ut lectus ligula. In non risus sed lorem rhoncus scelerisque. Praesent imperdiet felis non convallis mattis. Nam eu bibendum tellus.</p>
                                </div>
                            </li>
                            <li >
                                <div class='col s12 m6' style="">
                                    <img src="/img/pack-produto.png"  class='responsive-img img-center' />
                                </div>

                                <div class='col s12 m6' style="">
                                    <h2 class="titulo-descritivo text-black">PRESERVATIVO PLAYBOY <br> LUBRIFICADO 2</h2>

                                    <p class="text-black">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus mattis rhoncus erat, nec euismod ligula. Ut ut tellus in nibh bibendum eleifend quis ac neque. Donec non odio egestas,  Maecenas ultrices venenatis blandit.  imperdiet velit, vel finibus odio. Cras ut lectus ligula. In non risus sed lorem rhoncus scelerisque. Praesent imperdiet felis non convallis mattis. Nam eu bibendum tellus.</p>
                                </div>
                            </li>

                            <li >
                                <div class='col s12 m6' style="">
                                    <img src="/img/pack-produto.png"  class='responsive-img img-center' />
                                </div>

                                <div class='col s12 m6' style="">
                                    <h2 class="titulo-descritivo text-black">PRESERVATIVO PLAYBOY <br> LUBRIFICADO 3</h2>

                                    <p class="text-black">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus mattis rhoncus erat, nec euismod ligula. Ut ut tellus in nibh bibendum eleifend quis ac neque. Donec non odio egestas,  Maecenas ultrices venenatis blandit.  imperdiet velit, vel finibus odio. Cras ut lectus ligula. In non risus sed lorem rhoncus scelerisque. Praesent imperdiet felis non convallis mattis. Nam eu bibendum tellus.</p>
                                </div>
                            </li>

                            <li >
                                <div class='col s12 m6' style="">
                                    <img src="/img/pack-produto.png"  class='responsive-img img-center' />
                                </div>

                                <div class='col s12 m6' style="">
                                    <h2 class="titulo-descritivo text-black">PRESERVATIVO PLAYBOY <br> LUBRIFICADO 4</h2>

                                    <p class="text-black">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus mattis rhoncus erat, nec euismod ligula. Ut ut tellus in nibh bibendum eleifend quis ac neque. Donec non odio egestas,  Maecenas ultrices venenatis blandit.  imperdiet velit, vel finibus odio. Cras ut lectus ligula. In non risus sed lorem rhoncus scelerisque. Praesent imperdiet felis non convallis mattis. Nam eu bibendum tellus.</p>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="slider-controller">
        <div class="container">
            <div class="row">
                <div class="col s12 m3 index-slider" data-index="0">
                    <img src="/img/pack-produto.png" class='responsive-img'>
                    <p>Morango</p>
                </div>

                <div class="col s12 m3 index-slider" data-index="1">
                    <img src="/img/pack-produto.png" class='responsive-img'>
                    <p>Morango</p>
                </div>

                <div class="col s12 m3 index-slider" data-index="2">
                    <img src="/img/pack-produto.png" class='responsive-img'>
                    <p>Morango</p>
                </div>

                <div class="col s12 m3 index-slider" data-index="3">
                    <img src="/img/pack-produto.png" class='responsive-img'>
                    <p>Morango</p>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('scripts')
    <script src="/js/jquery.bxslider.js"></script>
    <script src="/js/produto.js"></script>
@endsection