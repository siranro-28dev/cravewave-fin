<?php
// Database connection
$servername = "localhost";
$username = "root"; // Default XAMPP username
$password = ""; // Default XAMPP password
$dbname = "cravefood"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Escape user inputs for security
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $calorie_intake = intval($_POST['calorie_intake']); // Ensure integer value
    $food_habits = $conn->real_escape_string($_POST['food_habits']);
    $password = password_hash($conn->real_escape_string($_POST['password']), PASSWORD_DEFAULT);

    // Check if email already exists
    $check_query = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($check_query);

    if ($result->num_rows > 0) {
        echo "Email already exists.";
    } else {
        // Insert data into database
        $sql = "INSERT INTO users (name, email, calorie_intake, food_habits, password) 
                VALUES ('$name', '$email', $calorie_intake, '$food_habits', '$password')";

        if ($conn->query($sql) === TRUE) {
            echo "User registration successful.";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

// Close connection
$conn->close();
?>
