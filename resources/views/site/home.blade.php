@extends('layouts.site')
@section('styles')
    <link rel="stylesheet" href="/css/home.css">
@endsection
@section('content')
<section id="video">
    <div class="crt-parallaxvideo">
        <video autoplay muted loop>
            <source src="/video/pb_video_2.mp4" type="video/mp4">
        </video>
    </div>
</section>

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
                <li><a href="#distribuidores" class='text-white page-scroll'>Distribuidores</a></li>
                <li><a href="#" class='text-white'><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#" class='text-white'><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                <li><a href="#" class='text-white'><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
            </ul>
            <ul class="side-nav black" id="mobile-demo">
                <li class='logo-menu'><img src="/img/logotipo-playboy-branco.svg"></li>
                <li><a href="/produtos" class='text-white'>Produto</a></li>
                <li><a href="#" class='text-white'>Campanha</a></li>
                <li><a href="#distribuidores" class='text-white page-scroll'>Distribuidores</a></li>
                <li><a href="#" class='text-white'>Notícias</a></li>
                <li><a href="#" class='text-white'>Contato</a></li>
            </ul>
        </div>
    </nav>
</div>
<section id="promo-image">
    <div class="container">
        <div class="col s12">
            <h1>Viu quem vai <br> sair na capa da <br>Playboy? <span class='destaque-title'>Você</span>.</h1>
        </div>
    </div>

</section>

<section id="product" class="pad-section">
    <div class="container">
        <div class="row">
            <div class="col s12 m5 offset-m1 align-center-mobile">
                <img class=" responsive-img center" id="imagem-camisinha-playboy"  src="/img/pack-produto.png" alt='Camisinhas playboy'>
            </div>
            <div class="col s12 m5 offset-m1  align-center-mobile">
                <h2 class='titulo-descritivo text-black'>Chegaram os <br>preservativos Playboy.</h2>
                <p class='text-black'>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus mattis rhoncus erat, nec euismod ligula. Ut ut tellus in nibh bibendum eleifend quis ac neque. Donec non odio egestas,  Maecenas ultrices venenatis blandit.  imperdiet velit, vel finibus odio. Cras ut lectus ligula. In non risus sed lorem rhoncus scelerisque. Praesent imperdiet felis non convallis mattis. Nam eu bibendum tellus.</p>
                <a class="btn btn-floating black waves-effect pulse" href="/produtos" id="custom_btn_playboy">conheça os sabores</a>
            </div>
        </div>
    </div>
</section>

<section id="promo" class=""></section>

<section id="noticias" class="pad-section">
    <div class="container">
        <div class="row">
            <div class="col s12">
                <h2 class='section-title center text-white'>NOVIDADES</h2>
            </div>
            <ul id="list_novidades" class="col s12">
                <li class="col s12 m4">
                    <div class="card">
                        <div class="card-image">
                            <img src="/img/_DSC3655trabx.jpg">
                        </div>

                        <div class="card-content">
                            <h3>TÍTULO DA NÓTICIA</h3>
                            <h5>25 de março de 2017</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus mattis rhoncus erat, nec euismod ligula. Ut ut</p>
                        </div>

                        <div class="card-action ">
                            <a class="btn black waves-effect waves-light right" href="#">Saiba mais</a>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </li>

                <li class="col s12 m4">
                    <div class="card">
                        <div class="card-image">
                            <img src="/img/_DSC3806bx.jpg">
                        </div>

                        <div class="card-content">
                            <h3>TÍTULO DA NÓTICIA</h3>
                            <h5>25 de março de 2017</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus mattis rhoncus erat, nec euismod ligula. Ut ut</p>
                        </div>

                        <div class="card-action ">
                            <a class="btn black waves-effect waves-light right" href="#">Saiba mais</a>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </li>

                <li class="col s12 m4">
                    <div class="card">
                        <div class="card-image">
                            <img src="/img/_dsc3529bx.jpg">
                        </div>

                        <div class="card-content">
                            <h3>TÍTULO DA NÓTICIA</h3>
                            <h5>25 de março de 2017</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus mattis rhoncus erat, nec euismod ligula. Ut ut</p>
                        </div>

                        <div class="card-action ">
                            <a class="btn black waves-effect waves-light right" href="#">Saiba mais</a>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </li>
            </ul>


        </div>
    </div>
</section>

<section id="distribuidores" class="pad-section">
    <div class="container">
        <div class="row">
            <div class="col s12">
                <h2 class='section-title center'>DISTRIBUIDORES</h2>
            </div>
        </div>

        <div class="row">
            <div class="col s3 ">
                <img src="/img/logo%20arcom-01.svg">
            </div>

            <div class="col s3 ">
                <img src="/img/logo%20arcom-01.svg">
            </div>

            <div class="col s3">
                <img src="/img/logo%20arcom-01.svg">
            </div>

            <div class="col s3">
                <img src="/img/logo%20arcom-01.svg">
            </div>
        </div>
    </div>
</section>
@endsection
@section('scripts')
    <script src="/js/home.js"></script>
@endsection