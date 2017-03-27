@extends('layouts.login')

@section('content')
    <div class="user-login-5">
        <div class="row bs-reset">
            <div class="col-md-6 bs-reset">
                <div class="login-bg" style="background-image:url(/img/login1.jpg)">
                    <img class="login-logo" src="/img/logo.png" /> </div>
            </div>
            <div class="col-md-6 login-container bs-reset">
                <div class="login-content">
                    <h1>Painel de controle</h1>
                    <p> Lorem ipsum dolor sit amet, coectetuer adipiscing elit sed diam nonummy et nibh euismod aliquam erat volutpat. Lorem ipsum dolor sit amet, coectetuer adipiscing. </p>
                    <form role="form" method="POST" action="{{ url('/pblogin') }}" class="login-form" method="post">
                        {{ csrf_field() }}

                        @if ($errors->has('email'))
                            <div class="alert alert-danger">
                                <button class="close" data-close="alert"></button>
                                <span>{{ $errors->first('email') }}</span>
                            </div>
                        @elseif($errors->has('password'))
                            <div class="alert alert-danger">
                                <button class="close" data-close="alert"></button>
                                <span>{{ $errors->first('password') }}</span>
                            </div>
                        @endif

                        <div class="row">
                            <div class="col-xs-6">
                                <input class="form-control form-control-solid placeholder-no-fix form-group" type="text" autocomplete="off" placeholder="Login" name="email" required/>
                            </div>
                            <div class="col-xs-6">
                                <input class="form-control form-control-solid placeholder-no-fix form-group" type="password" autocomplete="off" placeholder="Senha" name="password" required/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="rem-password">
                                    <label class="rememberme mt-checkbox mt-checkbox-outline">
                                        <input type="checkbox" name="remember" value="1" {{ old('remember') ? 'checked' : ''}} /> Lembre me
                                        <span></span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-8 text-right">
                                <button class="btn btn-submit" type="submit">Enviar</button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="login-footer">
                    <div class="row bs-reset">

                        <div class="col-xs-12 bs-reset">
                            <div class="login-copyright text-center">
                                <p> Copyright &copy; Playboy Preservativos {{date('Y')}} </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection