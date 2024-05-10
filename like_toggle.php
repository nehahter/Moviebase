<?php
session_start();
include 'db_connection.php';  // Ensure you have this file for database connection setup

if (isset($_POST['title'], $_SESSION['username'])) {
    $title = $_POST['title'];
    $username = $_SESSION['username'];
    $liked = filter_var($_POST['liked'], FILTER_VALIDATE_BOOLEAN); // Convert string to boolean

    if ($liked) {
        // If currently liked, remove the like
        $query = "DELETE FROM liked WHERE username = ? AND title = ?";
    } else {
        // If not liked, add a like
        $query = "INSERT INTO liked (username, title) VALUES (?, ?)";
    }

    $stmt = $conn->prepare($query);
    $stmt->bind_param("ss", $username, $title);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false]);
    }
} else {
    echo json_encode(['success' => false]);
}
?>
