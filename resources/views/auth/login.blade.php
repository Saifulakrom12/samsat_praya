<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Admin Dashboard Templates" />
    <meta name="keywords"
        content="Login, Milestone Login, Admin, Admin Dashboard, Dashboard, Bootstrap4, Sass, CSS3, HTML5, Responsive Dashboard, Responsive Admin Template, Admin Template, Best Admin Template, Bootstrap Template, Themeforest" />
    <meta name="author" content="Bootstrap Gallery" />
    <link rel="canonical" href="https://www.bootstrap.gallery/">
    <meta property="og:url" content="https://www.bootstrap.gallery">
    <meta property="og:title" content="Admin Templates - Dashboard Templates | Bootstrap Gallery">
    <meta property="og:description" content="Marketplace for Bootstrap Admin Dashboards">
    <meta property="og:type" content="Website">
    <meta property="og:site_name" content="Bootstrap Gallery">
    <link rel="shortcut icon" href="{{ asset('img/main.jpg') }}" />

    <title>Login</title>

    <!--
   **********************
   **********************
   Common CSS files
   **********************
   **********************
  -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />

    <!-- Master CSS -->
    <link rel="stylesheet" href="{{ asset('css/main.min.css') }}" />

</head>

<body class="login-bg">

    <!-- Container start -->
    <div class="container">

        <form action="{{ route('login-proses') }}" method="POST">
            @csrf
            <div class="row justify-content-md-center">
                <div class="col-xl-4 col-lg-5 col-md-6 col-sm-12">
                    <div class="login-screen">
                        <div class="login-box">
                            <a href="#" class="login-logo">
                                <img src="{{ asset('img/main.jpg') }}" alt="Bootstrap Admin Dashboard"
                                    class="img-fluid mx-auto d-block" style="max-width: 290px; max-height: 150px;" />

                            </a>

                            <!-- Menampilkan pesan sukses logout -->
                            @if (session('success'))
                                <div class="alert alert-success" id="success">
                                    {{ session('success') }}
                                </div>
                            @endif

                            <!-- Display login errors -->
                            @if ($errors->has('login'))
                                <div class="alert alert-danger">
                                    {{ $errors->first('login') }}
                                </div>
                            @endif

                            <div class="form-group">
                                <input type="text" name="email" class="form-control" placeholder="gmail.com" />
                                <div class="invalid-feedback">Please enter your email</div>
                                @error('email')
                                    <small>{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="form-group">
                                <input type="password" name="password" class="form-control" placeholder="Password" />
                                <div class="invalid-feedback">Please enter your password</div>
                                @error('password')
                                    <small>{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="actions">
                                <button type="submit" class="btn btn-primary btn-block">Login</button>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </form>

    </div>
    <!-- Container end -->
    <script>
        $(document).ready(function() {
            setTimeout(function() {
                $("#success").fadeOut("slow");
            }, 300); // 3 detik
        });
    </script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</body>

</html>
