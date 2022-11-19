<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman | Register</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">

</head>

<body>
    <div class="container"><br>
        <div class="col-md-4 col-md-offset-4" style="margin-left: 350px">
            <h2 class="text-center"><b>CREATE YOUR ACCOUNT</b></h3>
                <hr>
                @if (session('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif
                <form action="{{ route('registeraksi') }}" method="post">
                    @csrf
                    <div class="form-group" style="margin-bottom: 10px">
                        <label><i class="fa fa-user"></i> Nama</label>
                        <input type="text" name="nama" class="form-control" placeholder="Create your fullname"
                            required="">
                    </div>
                    <div class="form-group" style="margin-bottom: 10px">
                        <label><i class="fa fa-user"></i> Username</label>
                        <input type="text" name="username" class="form-control" placeholder="Create your username"
                            required="">
                    </div>
                    <div class="form-group" style="margin-bottom: 10px">
                        <label><i class="fa fa-envelope"></i> Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Enter your email"
                            required="">
                    </div>

                    <div class="form-group">
                        <label><i class="fa fa-key"></i> Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Create your password"
                            required="">
                    </div>

                    <br>
                    <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-user"></i>
                        Register</button>
                    <hr>
                    <p class="text-center">Sudah punya akun silahkan <a href="{{ route('login') }}">Login Disini!</a>
                    </p>
                </form>
        </div>
    </div>
</body>

</html>
