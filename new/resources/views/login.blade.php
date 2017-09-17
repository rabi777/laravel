<!--
 * CoreUI - Open Source Bootstrap Admin Template
 * @version v1.0.0-alpha.6
 * @link http://coreui.io
 * Copyright (c) 2017 creativeLabs Łukasz Holeczek
 * @license MIT
 -->
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="CoreUI Bootstrap 4 Admin Template">
    <meta name="author" content="Lukasz Holeczek">
    <meta name="keyword" content="CoreUI Bootstrap 4 Admin Template">
    <link rel="shortcut icon" href="{{URL::to('public/img/favicon.png')}}">

    <title>Login</title>

    <!-- Icons -->
    <link href="{{URL::to('public/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{URL::to('public/css/simple-line-icons.css')}}" rel="stylesheet">

    <!-- Main styles for this application -->
    <link href="{{URL::to('public/css/style.css')}}" rel="stylesheet">

</head>

<body class="app flex-row align-items-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <div class="card-group mb-0">
                    <div class="card p-4">
                        <div class="card-body">
                            <h1>Login</h1>
                            <p class="text-muted">Sign In to your account</p>
                            <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                                {{ csrf_field() }}
                                <div class="input-group mb-3 {{ $errors->has('email') ? ' has-error' : '' }}">
                                    <span class="input-group-addon"><i class="icon-email">@</i>
                                    </span>
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                                </div>
                                     @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong style="color:#b91616">{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                <div class="input-group mb-4 {{ $errors->has('password') ? ' has-error' : '' }}">
                                    <span class="input-group-addon"><i class="icon-lock"></i>
                                    </span>
                                    <input id="password" type="password" class="form-control" name="password" required>
                                </div>
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong style="color:#b91616">{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                <div class="row">
                                    <div class="col-6">
                                        <button type="submit" class="btn btn-primary px-4">Login</button>
                                    </div>
                            </form>
                                    <div class="col-6 text-right">
                                        <a href="{{ route('password.request') }}"><button type="button" class="btn btn-link px-0">Forgot password?</button></a>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <div class="card text-white bg-primary py-5 d-md-down-none" style="width:44%">
                        <div class="card-body text-center">
                            <div>
                                <h2>Sign up</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <a href="{{ route('register') }}"><button type="button" class="btn btn-primary active mt-3">Register Now!</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap and necessary plugins -->
    <script src="{{URL::to('public/bower_components/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{URL::to('public/bower_components/tether/dist/js/tether.min.js')}}"></script>
    <script src="{{URL::to('public/bower_components/popper.js/index.js')}}"></script>
    <script src="{{URL::to('public/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>



</body>

</html>