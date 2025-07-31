<?php
// Database connection
$servername = "localhost"; // Your database server
$username = "root"; // Your database username
$password = ""; // Your database password
$dbname = "jewelry_db"; // Your database name

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Initialize error variables
$error = "";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize user inputs to prevent SQL injection
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phonenum = mysqli_real_escape_string($conn, $_POST['phonenum']);

    // Validate input fields
    if (empty($fname) || empty($email) || empty($phonenum)) {
        $error = "All fields are required.";
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Invalid email format.";
    } else {
        // Insert form data into the database
        $sql = "INSERT INTO contacts (fname, email, phonenum) VALUES ('$fname', '$email', '$phonenum')";

        if ($conn->query($sql) === TRUE) {
            // Redirect to the form page with success message
             header("Location: http://localhost/jewelry%20(1)/jewelry/");
            exit;
        } else {
            $error = "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

// Close the database connection
$conn->close();
?>

