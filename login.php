<?php 
    include('connectdb.php');
    session_start();
    error_reporting(E_ALL & ~E_NOTICE);

    if (!isset($_SESSION['err_username_login'])) {
        $_SESSION['err_username_login'] = '';
    } else {
        $err_username_login = $_SESSION['err_username_login'];
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <link rel="stylesheet" href="node_modules/mdbootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/mdbootstrap/css/mdb.min.css">
    <link rel="stylesheet" href="node_modules/mdbootstrap/css/style.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Default form login -->
                <form class="text-center border border-light p-5" action="login_backend.php" method="post">

                    <p class="h4 mb-4">Sign in</p>
                    <?php if ($_SESSION['err_username_login'] !== '') {
                        echo '<div class="alert alert-danger" role="alert">';
                        echo $err_username_login;
                        unset($_SESSION['err_username_login']);
                        echo '</div>';
                    }
                    ?>
                    

                    <!-- Email -->
                    <input type="text" id="defaultLoginFormEmail" name="username" class="form-control mb-4" placeholder="Username">

                    <!-- Password -->
                    <input type="password" id="defaultLoginFormPassword" name="password" class="form-control mb-4" placeholder="Password">

                    <div class="d-flex justify-content-around">
                        <div>
                            <!-- Remember me -->
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="defaultLoginFormRemember">
                                <label class="custom-control-label" for="defaultLoginFormRemember">Remember me</label>
                            </div>
                        </div>
                        <div>
                            <!-- Forgot password -->
                            <a href="">Forgot password?</a>
                        </div>
                    </div>

                    <!-- Sign in button -->
                    <button class="btn btn-info btn-block my-4" type="submit" name="submit">Sign in</button>

                    <!-- Register -->
                    <p>Not a member?
                        <a href="register.php">Register</a>
                    </p>

                    <!-- Social login -->
                    <p>or sign in with:</p>

                    <a href="#" class="mx-2" role="button"><i class="fab fa-facebook-f light-blue-text"></i></a>
                    <a href="#" class="mx-2" role="button"><i class="fab fa-twitter light-blue-text"></i></a>
                    <a href="#" class="mx-2" role="button"><i class="fab fa-linkedin-in light-blue-text"></i></a>
                    <a href="#" class="mx-2" role="button"><i class="fab fa-github light-blue-text"></i></a>

                </form>
                <!-- Default form login -->
            </div>
        </div>
    </div>
    <script type="text/javascript" src="node_modules/mdbootstrap/js/jquery.min.js"></script>
    <script type="text/javascript" src="node_modules/mdbootstrap/js/popper.min.js"></script>
    <script type="text/javascript" src="node_modules/mdbootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="node_modules/mdbootstrap/js/mdb.min.js"></script>
</body>

</html>