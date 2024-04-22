<?php
// Database connection parameters
$servername = "127.0.0.1"; 
$username = "root"; 
$password = ""; 
$database = "incgrade"; 

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to authenticate user
function authenticateUser($conn, $username, $password) {
    // Fetch user data from the database
    $sql = "SELECT Username, PasswordHash FROM Students WHERE Username='$username'  ";
    $result = $conn->query($sql);
  
    if ($result->num_rows > 0) {
        // User exists, verify password
        $row = $result->fetch_assoc();
        $hashedPassword = $row["PasswordHash"];
        
        // Verify password
        //  if (password_verify($studentpassword, $hashedPassword)) {
            // Password is correct
            if ($password==$hashedPassword) {
            return true;
        } else {
            // Password is incorrect
            
            return false;
        }
    } else {
        // User does not exist
        return false;
    }
}

// Check if form is submitted
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login_submit'])) { // Change 'Login' to 'login_submit'
    // Get username and password from form submission
    $username = $_POST["student_username"]; // Change 'username' to 'student_username'
    $password = $_POST["student_password"]; // Change 'password' to 'student_password'

    // Authenticate user
    if (authenticateUser($conn, $username, $password)) {
        // Authentication successful
        echo "Authentication successful. Welcome, $username!";
        header("Location: student.html");
    } else {
        echo "Authentication failed. Invalid username or password.";
    }
}


// Close connection
$conn->close();
?>
