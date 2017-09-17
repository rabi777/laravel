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

    <title>CoreUI Bootstrap 4 Admin Template</title>

    <!-- Icons -->
    <link href="{{URL::to('public/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{URL::to('public/css/simple-line-icons.css')}}" rel="stylesheet">

    <!-- Main styles for this application -->
    <link href="{{URL::to('public/css/style.css')}}" rel="stylesheet">

</head>

<body class="app flex-row align-items-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mx-4">
                    <div class="card-body p-4">
                        <h1>Reset Password</h1>
                            <form method="POST" action="{{ route('password.request') }}">
                                {{ csrf_field() }}

                                <input type="hidden" name="token" value="{{ $token }}">

                                <div class="input-group mb-3">
                                    <span class="input-group-addon">@</span>
                                    <input id="email" type="email" class="form-control" name="email" value="{{ $email or old('email') }}" required autofocus>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="input-group mb-3 {{ $errors->has('password') ? ' has-error' : '' }}">
                                    <span class="input-group-addon"><i class="icon-lock"></i>
                                    </span>
                                    <input id="password" type="password" class="form-control" name="password" required>
                                     @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="input-group mb-4 {{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                    <span class="input-group-addon"><i class="icon-lock"></i>
                                    </span>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                    @if ($errors->has('password_confirmation'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <button type="button" class="btn btn-block btn-success">Reset Password</button>
                            </form>
                        </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap and necessary plugins -->
    <script src="{{URL::to('public/bower_components/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{URL::to('public/bower_components/tether/dist/js/tether.min.js')}}"></script>
    <script src="{{URL::to('public/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>


</body>

</html>