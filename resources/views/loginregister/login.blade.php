<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prediksi Kelulusan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">

</head>

<body>

    <div class="container-fluid md-12 bg-light"><br><br><br>
        <div class="col-md-4 col-md-offset-4" style="margin-left: 450px">
            <h2 class="text-center"><b>Login Your Account Here</b></h2>
            <hr>
            @if (session('error'))
                <div class="alert alert-danger">
                    <b>Opps!</b> {{ session('error') }}
                </div>
            @endif

            <form action="{{ route('user.loginaksi') }}" method="post">
                @csrf
                <div class="form-group">
                    <label style="text-align: start ">Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Enter your email"
                        required="">
                </div>
                <br>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Enter your password"
                        required="">
                </div>
                <br>
                <button type="submit" class="btn btn-primary btn-block">Log In</button>
                <hr>
                <p class="text-center">Belum punya akun? <a href="{{ route('register') }}">Register </a>Sekarang!</p>
            </form>
        </div>
    </div>

</body>

</html>
