<?php
include('connectdb.php');
session_start();
error_reporting(E_ALL & ~E_NOTICE);


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
                <form class="text-center border border-light p-5" action="register_backend.php" method="post">

                    <p class="h4 mb-4">Sign Up</p>

                    <!-- Email -->
                    <?php if (isset($_SESSION['err_username_regis'])) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo $_SESSION['err_username_regis']; ?>
                        </div>
                    <?php endif; ?>

                    <?php if (isset($_SESSION['error'])) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo $_SESSION['error']; ?>
                        </div>
                    <?php endif; ?>
                    <input type="username" id="defaultLoginFormEmail" name="username" class="form-control mb-4" placeholder="Username" required>

                    <!-- Password -->
                    <input type="password" id="defaultLoginFormPassword" name="password1" class="form-control mb-4" placeholder="Password" required>
                    <input type="password" id="defaultLoginFormPassword" name="password2" class="form-control mb-4" placeholder="Confirm Password" required>
                    <?php if (isset($_SESSION['err_password_regis'])) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo $_SESSION['err_password_regis']; ?>
                        </div>
                    <?php endif; ?>


                    <div class="d-flex justify-content-around">
                        <div>
                            <!-- Remember me -->

                        </div>

                    </div>

                    <!-- Sign in button -->
                    <button class="btn btn-info btn-block my-4" type="submit" name="submit">Sign up</button>

                    <!-- Register -->


                    <!-- Social login -->


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

<?php
    if (isset($_SESSION['err_username_regis']) || isset($_SESSION['error']) || isset($_SESSION['err_password_regis'])) {
        session_destroy();
    }
?>