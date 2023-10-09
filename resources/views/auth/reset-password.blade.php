<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reset Password | Food n Sit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        html,body { height: 100%; }

        body{
            display: -ms-flexbox;
            display: -webkit-box;
            display: flex;
            -ms-flex-align: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            align-items: center;
            -webkit-box-pack: center;
            justify-content: center;
            background-color: #f5f5f5;
        }

        form{
            padding-top: 10px;
            font-size: 13px;
            margin-top: 30px;
        }

        .card-title{ font-weight:300; }

        .btn{
            font-size: 13px;
        }

        .login-form{ 
            width:320px;
            margin:20px;
        }

        .sign-up{
            text-align:center;
            padding:20px 0 0;
        }

        span{
            font-size:14px;
        }

        .submit-btn{
            margin-top:20px;
        }
    </style>
</head>
<body>
    <div class="card login-form">
        <div class="card-body">
            <h3 class="card-title text-center">Reset Password</h3>
            <div class="card-text">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error )
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    </div>
                    @endif
                    @if (session()->has('status'))
                        <div class="alert alert-success">
                            {{ session()->get('status') }}
                        </div>
                    @endif
                <form action="{{ route('password.update') }}" method="POST">
                    @csrf
                    <input type="hidden" name="token" value="{{ request()->token }}">
                    <input type="hidden" name="email" value="{{ request()->email }}">

                    <div class="form-group">
                        <label for="exampleInputEmail1">Password Baru</label>
                        <input type="password" class="form-control form-control-sm" name="password">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Konfirmasi Password Baru</label>
                        <input type="password" class="form-control form-control-sm" name="password_confirmation">
                    </div>
                    <center><input type="submit" value="Update Password" class="btn btn-primary btn-block submit-btn"></center>
                </form>
                <br>
            </div>
        </div>
    </div>
</body>
</html>