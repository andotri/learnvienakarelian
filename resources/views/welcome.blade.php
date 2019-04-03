<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} - Welcome</title>

    <link rel="shortcut icon" type="image/png" href="images/favicon.png"/>

    <link href="css/custom.css" rel="stylesheet">
    <link href="css/media-query.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.1/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Bootstrap core JavaScript-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/startbootstrap-sb-admin-2/3.3.7+1/js/sb-admin-2.min.js"></script>
</head>
<body class="bg-gradient-primary">

<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row justify-content-md-center">
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <img src="images/logo.png" id="logo-big">
                                    <br><br>
                                </div>
                                <p>
                                    We provide the dialect and cultural learning of Viena Karelian.
                                    Learn from the easiest level with interesting topics,
                                    also explore cultural information every day for <b>FREE</b>.

                                    <br>Join our community now.
                                </p>
                                <hr>
                                <form class="user" method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div class="form-group">
                                        <select class="form-control" id="language" name="language" required>
                                            <option value="en">I speak English</option>
                                            <option value="fi">I speak Finnish</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="name" name="name" placeholder="My name is ..." required>
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox small">
                                            <input type="checkbox" class="custom-control-input" id="customCheck" name="anonymous" onchange="toggleName()">
                                            <label class="custom-control-label" for="customCheck">Play as an anonymous</label>
                                        </div>
                                    </div>
                                    <input type="submit" class="btn btn-primary btn-user btn-block" value="Get Started">
                                </form>
                                <hr>
                                <div class="text-center">
                                    <div class="float-left">
                                        <a class="small" href="forgot-password.html">Privacy and Policy</a>
                                    </div>
                                    <div class="float-right">
                                        <a class="small" href="register.html">Feedback</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>
</body>
<script src="js/welcome.js"></script>
</html>
