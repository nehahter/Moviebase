<?php
session_start();
header('Content-Type: application/json');

include 'db_connection.php';

if (!isset($_SESSION['username'])) {
    echo json_encode(['success' => false, 'message' => 'Not logged in']);
    exit;
}

$username = $_SESSION['username'];

$sql = "SELECT movie_title FROM likes WHERE username = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

$likes = [];
while ($row = $result->fetch_assoc()) {
    $likes[] = $row['movie_title'];
}

$stmt->close();
$conn->close();

echo json_encode(['success' => true, 'likes' => $likes]);
?>
