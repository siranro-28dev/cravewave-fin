<?php
// Start session
session_start();

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
    $password = $conn->real_escape_string($_POST['password']);

    // Fetch user from database
    $sql = "SELECT * FROM users WHERE name='$name'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        // Verify password
        // var_dump($row['name']);
        $stored_password = $row['password']; // Fetch hashed password from database
        if (password_verify($password, $stored_password)) { // Compare hashed password
            // Set session variables
            $_SESSION['name'] = $name;
            echo "Login successful. Welcome, $name!";
        } else {
            echo "Invalid password.";
        }
    } else {
        echo "User not found.";
    }
}

// Close connection
$conn->close();
?>
