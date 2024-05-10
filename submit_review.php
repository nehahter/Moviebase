<?php
$movieTitle = isset($_GET['movieName']) ? htmlspecialchars($_GET['movieName']) : 'Default Movie';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submit Review</title>
    <link rel="stylesheet" href="styles.css">
    <script src="script.js" defer></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        #reviewForm {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            width: 300px;
        }
        input, textarea, button {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            border-radius: 5px;
            border: 1px solid #ddd;
        }
        textarea {
            height: 100px; /* Larger text area for review input */
            resize: none; /* Disables resizing of textarea */
        }
        button {
            background-color: #E50916;
            color: white;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: rgb(105, 12, 12);
        }
        .back-button {
            display: block;
            margin-top: 20px;
            text-align: center;
            color: #E50916;
            text-decoration: none;
        }
        .back-button:hover {
            background-color: rgb(105, 12, 12);
        }
    </style>
</head>
<body>
    <form id="reviewForm" method="POST" action="submit_review_backend.php?<?php echo "movieName=" . urlencode($movieTitle); ?>">
        <h2>Submit a Review for "<?php echo $movieTitle; ?>"</h2>
        <input id="username" name="username" placeholder="Username" type="text" required>
        <input id="email" name="email" type="email" placeholder="Email" required>
        <textarea id="reviewText" name="review" placeholder="Write your review here..." required></textarea>
        <button type="submit" id="submitReviewBtn">Submit Review</button>
        <a href="index.php" class="back-button">Back to Home</a>
    </form>
</body>
</html>

