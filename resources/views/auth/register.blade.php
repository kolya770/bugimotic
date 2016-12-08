<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Bugimotic | Login</title>
    <link href="admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="admin/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="admin/css/animate.css" rel="stylesheet">
    <link href="admin/css/style.css" rel="stylesheet">
    <link href="admin/css/plugins/iCheck/custom.css" rel="stylesheet">
    <script>
        window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body class="gray-bg">
    <div class="middle-box text-center loginscreen  animated fadeInDown">
        <div>
            <div>
                <h1 class="logo-name">BG</h1>
            </div>

            <h3>REGISTER NEW ADMIN</h3>

            <form class="m-t" role="form"  method="POST" action="{{ url('/register') }}">
                {!! csrf_field() !!}

                <div class="form-group">
                    <input type="text" name="name" value="{{ old('name') }}" class="form-control" placeholder="Name" required="">
                </div>

                <div class="form-group">
                    <input type="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="Email" required="">
                </div>

                <div class="form-group">
                    <input type="password" name="password" id="password" class="form-control" placeholder="Password" required="">
                </div>

                <div class="form-group">
                    <input type="password" name="password_confirmation" id="password" class="form-control" placeholder="Password confirmation" required="">
                </div>

                <button type="submit" class="btn btn-primary block full-width m-b">Register</button>
            </form>

            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

        </div>
    </div>

    <script src="admin/js/jquery-2.1.1.js"></script>
    <script src="admin/js/bootstrap.min.js"></script>
    <script src="admin/js/plugins/iCheck/icheck.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green'
            });
        });
    </script>
</body>
</html>

