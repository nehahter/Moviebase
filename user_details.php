<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: signin.html"); // Redirect if not logged in
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Details - Moviebase</title>
</head>
<body>
    <h1>User Details</h1>
    <p>Welcome, <?php echo htmlspecialchars($_SESSION['name']); ?>!</p>
    <p>Email: <?php echo htmlspecialchars($_SESSION['email']); ?></p>
    <p>Date of Birth: <?php echo date("F j, Y", strtotime($_SESSION['dob'])); ?></p>
    <button onclick="window.location.href='index.php';">Go Back to Home</button>
</body>
</html>
