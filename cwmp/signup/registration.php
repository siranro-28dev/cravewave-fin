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
        
        <form  id="createAccount" action="" method="POST">
            <h1 class="form__title">Create Account</h1>
            <div class="form_message form_message--error"></div>
            <!-- <form action="connect.php" method="post"> -->
            <div class="form__input-group">
                <input type="text" id="signupUsername" class="form__input" autofocus placeholder="Username" name="Username" />
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <input type="text" class="form__input" autofocus placeholder="Email_Address" name="Email_Address" />
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <input type="password" class="form__input" autofocus placeholder="Password" name="Password" />
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <input type="password" class="form__input" autofocus placeholder="Confirm password" name="Confirm_Password" />
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <input type="number" id="Calorie" class="form__input" autofocus placeholder="Daily Calorie Intake" name="Daily Calorie Intake" />
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <input type="text" id="Calorie" class="form__input" autofocus placeholder="Food Habits" name="Food_Habits" />
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
          
 
            <button class="form__button" href="login.php" name="submit" type="submit"><a href="http://localhost/crud/miniproj/Login_Signup/login.php">Continue</button>
            <p class="form__text">
                <a class="form__link" href="login.php" id="linkLogin">Already have an account? Sign in</a>
            </p>
        </form>
    </div>
    </body>
















    <!DOCTYPE html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Login / Sign Up Form</title>
    <link rel="stylesheet" href="./src/styles.css">
    <script src="./src/script.js"></script>
</head>
<body>
    <div class="container">
        <!-- <form class="form" id="login">
            <h1 class="form__title">Login</h1>
            <div class="form__message form__message--error"></div>
            <div class="form__input-group">
                <input type="text" class="form__input" autofocus placeholder="Username or email">
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <input type="password" class="form__input" autofocus placeholder="Password">
                <div class="form__input-error-message"></div>
            </div>
            <button class="form__button" type="submit">Continue</button>
            <p class="form__text">
                <a href="#" class="form__link">Forgot your password?</a>
            </p>
            <p class="form__text">
                <a class="form__link" href="./" id="linkCreateAccount">Don't have an account? Create account</a>
            </p>
        </form>  -->
        <form  id="createAccount" action="" method="POST">
            <h1 class="form__title">Create Account</h1>
            <div class="form__message form__message--error"></div>
            <!-- <form action="connect.php" method="post"> -->
            <div class="form__input-group">
                <input type="text" id="signupUsername" class="form__input" autofocus placeholder="Username" name="Username" />
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <input type="text" class="form__input" autofocus placeholder="Email_Address" name="Email_Address" />
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <input type="password" class="form__input" autofocus placeholder="Password" name="Password" />
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <input type="password" class="form__input" autofocus placeholder="Confirm password" name="Confirm_Password" />
                <div class="form__input-error-message"></div>
            </div>
            <button class="form__button" href="login.php" name="submit" type="submit">Continue</button>
            <p class="form__text">
                <a class="form__link" href="login.php" id="linkLogin">Already have an account? Sign in</a>
            </p>
        </form>
    </div>
    <script src="./src/main.js"></script>
</body>