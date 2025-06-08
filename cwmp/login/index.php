<?php

@include 'cwmp\Login_Signup\connect.php';

session_start();
if (isset($_POST['submit'])) {
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $pass = mysqli_real_escape_string($db, $_POST['pass']);
  
    if (empty($email)) {
        array_push($errors, "Username is required");
    }
    if (empty($pass)) {
        array_push($errors, "Password is required");
    }
  
    if (count($errors) == 0) {
        $pass = md5($pass);
        $query = "SELECT * FROM registration WHERE email='$email' AND pass=$pass";
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1) {
          $_SESSION['email'] = $email;
          $_SESSION['submit'] = "You are now logged in";
          header('location: http://127.0.0.1:5500/cwmp/index2.php');
        }else {
            array_push($errors, "Wrong username/password combination");
        }
    }
  }
?>


<!DOCTYPE html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Login / Sign Up Form</title>
    <link rel="stylesheet" href="../signup/src/styles.css">
    <script src="./src/script.js"></script>
</head>
<body>
<div class="container">
<form class="form" id="login" method="POST" action="login.php">
            <h1 class="form__title">Login</h1>
            <div class="form__message form__message--error"></div>
            <div class="form__input-group">
                <input type="text" class="form__input" name="name" autofocus placeholder="Username or email">
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <input type="password" class="form__input" name="password" autofocus placeholder="Password">
                <div class="form__input-error-message"></div>
            </div>
            <button class="form__button" name="submit" type="submit">Continue</button>
            <p class="form__text">
                <a href="#" class="form__link">Forgot your password?</a>
            </p>
            <p class="form__text">
                <a class="form__link" href="index.php" id="linkCreateAccount">Don't have an account? Create account</a>
            </p>
        </form> 
</div>
</body>
</html>