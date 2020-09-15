<?php
session_start();
include('connectdb.php');


$_SESSION['err_password_regis'] = '';
$_SESSION['err_username_regis'] = '';

if (isset($_POST['submit'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password1 = mysqli_real_escape_string($conn, $_POST['password1']);
    $password2 = mysqli_real_escape_string($conn, $_POST['password2']);
    $query_check = "SELECT * FROM users WHERE username = '$username'";
    $result_check = mysqli_query($conn, $query_check);
    $data = mysqli_fetch_assoc($result_check);

    if ($password1 !== $password2) {
        

        if ($data['username'] === $username) {
            $_SESSION['err_username_regis'] = "Username already exists";
            header('location: register.php');
        }

        else {
            $_SESSION['err_password_regis'] = "Password does not match";
            header('location: register.php');
        }
        
    }

    elseif ($password1 === $password2) {
        
        if ($data['username'] === $username) {
            $_SESSION['err_username_regis'] = "Username already exists";
            header('location: register.php');
        }

        else {
            $query_insert = "INSERT INTO users (username, password) VALUES ('$username', '$password1')";
            $result_insert = mysqli_query($conn, $query_insert);
            $_SESSION['is_logged_in'] = true;
            $_SESSION['username'] = $username;
            header('location: index.php');
        }
    }
    
}
