<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ganti Password | Food n Sit</title>
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
            <h3 class="card-title text-center">Ganti Password</h3>
            <div class="card-text">
                <form action="change-password" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="oldPassword">Masukan Password Lama.</label>
                        <input type="password" id="oldPassword" class="form-control form-control-sm" name="old_password">
                    </div>
                    <div class="form-group">
                        <label for="newPassword">Masukan Password Baru.</label>
                        <input type="password" id="newPassword" class="form-control form-control-sm" name="new_password">
                    </div>
                    <div class="form-group">
                        <label for="repeatPassword">Konfirmasi Password Baru.</label>
                        <input type="password" id="repeatPassword" class="form-control form-control-sm" name="repeat_password">
                    </div>
                    <center><button type="submit" class="btn btn-primary btn-block submit-btn">Simpan</button></center>
                </form>
                <br>
            </div>
        </div>
    </div>
</body>
</html>