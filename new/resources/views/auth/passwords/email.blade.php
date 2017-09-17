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
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fpublic/it=no">
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

                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif


                        <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                            {{ csrf_field() }}

                            <div class="input-group mb-3 {{ $errors->has('email') ? ' has-error' : '' }}">
                                <span class="input-group-addon">@</span>
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                            </div>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong style="color:#b91616">{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif

                            <button type="submit" class="btn btn-block btn-success">Send Password Reset Link</button>
                        </form>
                    </div>
                    <div class="card-footer p-4">
                        <div class="row">
                            <div class="col-6">
                                <a href="{{ route('login') }}" type="button" class="btn btn-block btn-primary">Login</a>
                            </div>
                            <div class="col-6">
                                <a href="{{ route('register') }}" type="button" class="btn btn-block btn-info">Register Now!</a>
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
    <script src="{{URL::to('public/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>


</body>

</html>