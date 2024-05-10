<?php
$servername = "localhost:3307";
$username = "root"; // Use your database username
$password = ""; // Use your database password
$dbname = "moviebase";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Escape user inputs for security
$form_username = $conn->real_escape_string($_POST['username']);
$name = $conn->real_escape_string($_POST['name']);
$email = $conn->real_escape_string($_POST['email']);
$dob = $conn->real_escape_string($_POST['dob']);
$password = $conn->real_escape_string($_POST['password']); // Password is stored as-is

// Check if username already exists
$sql = "SELECT username FROM `user` WHERE username = '$form_username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<p>Username already exists. Please choose another username.</p>";
    echo "<form method='post' action='signup.html'>
            <input type='hidden' name='name' value='$name'>
            <input type='hidden' name='email' value='$email'>
            <input type='hidden' name='dob' value='$dob'>
            <button type='submit'>Try Again</button>
          </form>";
} else {
    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO `user` (`username`, `Name`, `Email`, `dob`, `password`) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $form_username, $name, $email, $dob, $password);

    // Execute
    if ($stmt->execute()) {
        echo "<script>alert('Registration successful! Redirecting to login page...'); location.href='signin.html';</script>";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
