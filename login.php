<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="./assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Login</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet" />
    <!-- <link href="./assets/css/light-bootstrap-dashboard.css?v=2.0.0 " rel="stylesheet" /> -->
    <link href="./assets/css/login.css" rel="stylesheet" />
</head>

<body>
    <div class="wrapper">
        <div class="main-panel">
            <!-- Navbar -->

            <!-- End Navbar -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12" id="login-container">
                            <div class="login-div">
                                <form class="text-center border border-light p-5 m-5" action="#!">

                                    <p class="h4 mb-4">Sign in</p>

                                    <!-- Email -->
                                    <input type="email" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="E-mail">

                                    <!-- Password -->
                                    <input type="password" id="defaultLoginFormPassword" class="form-control mb-5" placeholder="Password">


                                    <!-- Sign in button -->
                                    <button class="btn btn-info btn-block my-4" type="submit">Sign in</button>

                                    <!-- Register -->
                                    <p>Not a member?
                                        <a href="">Register</a>
                                    </p>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <footer class="footer">
                    <div class="container-fluid">
                        <nav>
                            <p class="copyright text-center">
                                ©
                                <script>
                                    document.write(new Date().getFullYear())
                                </script>
                                <a href="http://www.creative-tim.com">Creative Tim</a>, made with love for a better web
                            </p>
                        </nav>
                    </div>
                </footer>
            </div>
        </div>
</body>
<!--   Core JS Files   -->
<script src="./assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="./assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="./assets/js/core/bootstrap.min.js" type="text/javascript"></script>

</html>