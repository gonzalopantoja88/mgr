<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet"
        type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
</head>
<!--Coded with love by Mutiullah Samim-->

<body class="container bg-orange300">

    <div class="row d-flex justify-content-center">
        <div class="col-10">
            <div class="d-flex justify-content-center align-items-center vh-100">
                <div class="card py-5 px-3 border border-2 border-primary shadow-lg">
                    <div class="card-body">
                        <h2 class="text-center mb-5">MGR</h2>

                        <form action="{{route('login-post')}}" method="post">
                            @csrf
                            <div class="input-group mb-3">
                                <span class="input-group-text bg-primary"><i class="fas fa-envelope"></i></span>
                                <input type="email" name="email" class="form-control" placeholder="Email" aria-label="Username" autofocus required>
                            </div>

                            <div class="input-group mb-3">
                                <span class="input-group-text bg-primary"><i class="fas fa-key"></i></span>
                                <input type="text" name="password" class="form-control" placeholder="Password" aria-label="Password" required>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="check">
                                <label class="form-check-label" for="check">
                                  Recordar contraseña
                                </label>
                              </div>
                    
                            <div class="input-group d-flex justify-content-center px-8">
                                <button type="submit" class="btn btn-outline-primary mt-3">Login</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{ asset('js/scripts.js') }}"></script>
</body>

</html>
