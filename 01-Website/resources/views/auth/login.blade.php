<html lang="nl">

<head>
    <meta charset="utf-8" />
    <title>Inloggen | HBO-i</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="" name="description" />
    <meta content="" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- CSS -->
    <link href="{{ asset('back-end/login/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('back-end/login/fonts/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('back-end/login/fonts/icon-font.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('back-end/login/vendor/animate.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('back-end/login/vendor/hamburgers.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('back-end/login/vendor/animsition.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('back-end/login/vendor/select2.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('back-end/login/vendor/daterangepicker.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('back-end/login/css/util.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('back-end/login/css/main.css') }}" rel="stylesheet" type="text/css" />

</head>

<body>
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
                    @csrf
                    <span class="login100-form-title p-b-43">
                        <img src="{{ asset('front-end/img/logos/logoHBO-i.svg') }}" class="logo">
                    </span>
                    <span class="login100-form-title p-b-43">
                        Login
                    </span>
                    @if (count($errors) > 0)
                        <div class="flex-sb-m w-full p-t-3 p-b-32">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li class="alert-validate">{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="wrap-input100 validate-input">
                        <input type="text" class="input100 has-val" name="email" id="email"
                            placeholder="Voer hier uw email adres in" required autofocus>
                        <span class="focus-input100"></span>
                        <span class="label-input100">Email</span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <input type="password" class="input100 has-val" name="password" id="userpassword"
                            placeholder="Voer hier uw wachtwoord in" required autocomplete="current-password">
                        <span class="focus-input100"></span>
                        <span class="label-input100">Wachtwoord</span>
                    </div>
                    <div class="flex-sb-m w-full p-t-3 p-b-32">
                        <div class="contact100-form-checkbox">
                            <input type="checkbox" class="input-checkbox100" id="remember_me" name="remember">
                            <label class="label-checkbox100" for="remember_me">
                                Onthouden
                            </label>
                        </div>
                        <div>
                            <a href="{{ route('password.request') }}" class="txt1">
                                Wachtwoord vergeten?
                            </a>
                        </div>
                    </div>
                    
                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn">
                            Inloggen
                        </button>
                    </div>
                    <div class="text-center p-t-46 p-b-20">
                        <span class="txt2">
                            <a href="/register">
                                Registreren
                            </a>
                             | 
                            <a href="/">
                                Terug naar website
                            </a>
                        </span>
                    </div>
                </form>
                <div class="login100-more" style="background-image: url('front-end/img/nieuwsbrief-overzichtspagina.jpg');">
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('back-end/login/vendor/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('back-end/login/vendor/animsition.min.js') }}"></script>
    <script src="{{ asset('back-end/login/vendor/popper.js') }}"></script>
    <script src="{{ asset('back-end/login/vendor/bootstrap.min.js') }}"></script>
    <script src="{{ asset('back-end/login/vendor/select2.min.js') }}"></script>
    <script src="{{ asset('back-end/login/vendor/moment.min.js') }}"></script>
    <script src="{{ asset('back-end/login/vendor/daterangepicker.js') }}"></script>
    <script src="{{ asset('back-end/login/vendor/countdowntime.js') }}"></script>
    <script src="{{ asset('back-end/login/js/main.js') }}"></script>

</body>

</html>

