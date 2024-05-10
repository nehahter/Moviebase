<?php
session_start();

$servername = "localhost:3307";
$username = "root";
$password = "";
$dbname = "moviebase";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['username']) && isset($_POST['password'])) {
    $user_username = $_POST['username'];
    $user_password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM user WHERE username = ?");
    $stmt->bind_param("s", $user_username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        if ($row['password'] === $user_password) {
            $_SESSION['username'] = $user_username;
            $_SESSION['name'] = $row['Name'];  // Assuming the column name in your DB is 'Name'
            $_SESSION['email'] = $row['Email'];
            $_SESSION['dob'] = $row['dob'];

            // After setting $_SESSION['username'], $_SESSION['email'], etc.
echo "<script>localStorage.setItem('userLoggedIn', 'true');</script>";


            header("Location: index.php");
            exit;
        } else {
            echo "<script>alert('You have entered the wrong password.'); window.location.href='signin.html';</script>";
        }
    } else {
        echo "<script>alert('Username does not exist. Do you want to sign up?'); window.location.href='signup.html';</script>";
    }

    $stmt->close();
    $conn->close();
} else {
    echo "<script>window.location.href='signin.html';</script>";
}
?>
