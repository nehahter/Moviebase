<?php
$host = 'localhost:3307'; // Host name
$dbname = 'moviebase'; // Database name
$username = 'root'; // Username
$password = ''; // Password
$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $conn->real_escape_string($_POST['username']);
    $email = $conn->real_escape_string($_POST['email']);
    $review = $conn->real_escape_string($_POST['review']);
    // Retrieve the movie title from GET parameter
    $title = isset($_GET['movieName']) ? $conn->real_escape_string($_GET['movieName']) : 'Default Movie';

    $sql = "INSERT INTO `reviews` (`username`, `Email`, `Title`, `Review`) VALUES ('$user', '$email', '$title', '$review')";

    if ($conn->query($sql) === TRUE) {
        $message = "Review submitted successfully!";
    } else {
        $message = "Error: " . $conn->error;
    }
}
$conn->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Review Submission Result</title>
    <script type="text/javascript">
        window.onload = function() {
            // Display the message in a popup alert
            alert("<?php echo addslashes($message); ?>");
            // Optionally redirect back or to another page
            window.location.href = 'index.php'; // Redirect to a different page after showing the message
        }
    </script>
</head>
<body>
</body>
</html>

