<?php

@include 'connect.php';

if(isset($_POST['submit'])){

   $name = $_POST['Username'];
   $email =$_POST['Email_Address'];
   $pass = password_hash($_POST['Password'], PASSWORD_DEFAULT);

   $cpass = $_POST['Confirm_Password'];
   $calories = $_POST['Daily_Calorie_Intake'];
   $habits = $_POST['Food_Habits'];

   $select = " SELECT * FROM registration WHERE email = '$email'";
   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'user already exist!';

   }else{

      if($pass != $cpass){
         $error[] = 'password not matched!';
      }else{
        $insert = "INSERT INTO registration (name, email, pass, calories, habits) VALUES ('$name', '$email', '$pass', '$calories', '$habits')";
        mysqli_query($conn, $insert);
        header('location: login.php');
      }
}


};


?>




<!DOCTYPE html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Login / Sign Up Form</title>
    <link rel="stylesheet" href="./src/styles.css">
    <script src="./src/script.js"></script>
</head>
<body>
  <!-- <head>
    <title>Daily Calorie Intake Tracker</title>
  </head> -->
  
  


    <div class="container">
        
        <form  id="createAccount" action="signup.php" method="POST">
            <h1 class="form__title">Create Account</h1>
            <div class="form_message form_message--error"></div>
            <!-- <form action="connect.php" method="post"> -->
            <div class="form__input-group">
                <input type="text" id="signupUsername" class="form__input" autofocus placeholder="Username" name="name" />
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <input type="text" class="form__input" autofocus placeholder="Email_Address" name="email" />
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <input type="password" class="form__input" autofocus placeholder="Password" name="password" />
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <input type="password" class="form__input" autofocus placeholder="Confirm password" name="Confirm_Password" />
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <input type="number" id="Calorie" class="form__input" autofocus placeholder="Daily_Calorie_Intake" name="calorie_intake" />
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <input type="text" id="Calorie" class="form__input" autofocus placeholder="Food_Habits" name="food_habits" />
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <!-- <input type="text" id="Calorie" class="form__input" autofocus placeholder="Daily Activity Level" name="Daily_Activity_Level" /> -->
                <select id="activity-level" name="activity-level" required>
                    <option value="">Select Activity Level</option>
                    <option value="Sedentary">Sedentary</option>
                    <option value="Moderately Active">Moderately Active</option>
                    <option value="Very Active">Very Active</option>
                  </select><br><br>
                <div class="form__input-error-message"></div>
            </div>
   <!-- <label for="food-habits"><br>Food Habits:<br></label>
      <textarea id="food-habits" name="food-habits" required></textarea><br><br> -->
      <!-- <label for="activity-level"><br>Daily Activity Level:<br></label>
      <select id="activity-level" name="activity-level" required>
        <option value="">Select Activity Level</option>
        <option value="Sedentary">Sedentary</option>
        <option value="Moderately Active">Moderately Active</option>
        <option value="Very Active">Very Active</option>
      </select><br><br> -->
          
 
            <button class="form__button" href="login.php" name="submit" type="submit">Continue</button>
            <p class="form__text">
                <a class="form__link" href="login.php" id="linkLogin">Already have an account? Sign in</a>
            </p>
        </form>
    </div>
    </body>