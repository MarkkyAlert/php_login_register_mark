<?php
    include('connectdb.php');
    session_start();

    
  
    

    if (isset($_POST['submit'])) {
        
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $passwordenc = md5($password);
        $query_check = "SELECT * FROM users WHERE username = '$username' AND password = '$passwordenc' ";
        $result_check = mysqli_query($conn, $query_check);
        $data = mysqli_fetch_assoc($result_check);
        
        if ($data['username'] === $username) {
            $_SESSION['username'] = $username;
            $_SESSION['is_logged_in'] = true;
            header('location: index.php');
        } else {
            $_SESSION['err_username_login'] = 'Wrong username or password';
            header('location: login.php');
        }
    }
?>