<?php
session_start(); 
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>MOVIEBASE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!-- Owl Carousel css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <!-- Owl Carousel css-->


    <!-- jquery css-->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"
        integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
    <!-- jquery css-->

    <script src="script.js"></script>


</head>



<body class="detail">

<?php

include 'db_connection.php'; // Assume you saved the connection code in db_connection.php

$movieName = $_GET['movieName']; // Getting movie name from URL parameter

// Prepare and bind
$stmt = $conn->prepare("SELECT * FROM movie WHERE title = ?");
$stmt->bind_param("s", $movieName);

// Execute the query
$stmt->execute();
$result = $stmt->get_result();

// Fetch data
if ($result->num_rows > 0) {
    $movie = $result->fetch_assoc(); // Fetching the first row
} else {
    echo "0 results";
}

$stmt->close();
$conn->close();
?>


    <script>
        window.onload = function () {
            var movieName = localStorage.getItem('selectedMovie');
            if (movieName) { // Ensure movieName exists
                movieName = movieName.toLowerCase(); // Convert to lowercase
            }
    
            var imageUrl = "";
            switch (movieName) {
                case "salaar: cease fire - part 1":
                    imageUrl = "image/sal1.jpg";//
                    break;
                case "manjummel boys":
                    imageUrl = "image/boys.jpg"; //
                    break;
                case "the jungle book":
                    imageUrl = "image/jungle.jpg";//
                    break;
                case "3 idiots":
                    imageUrl = "image/32.jpg";
                    break;
                case "avatar":
                    imageUrl = "image/avatar.jpg";//
                    break;
                case "interstellar":
                    imageUrl = "image/is.jpg";//
                    break;
                case "khaleja":
                    imageUrl = "image/khaleja2.jpg";//
                    break;
                case "remo":
                    imageUrl = "image/remo2.jpg";//
                    break;
                case "attarintiki daredi":
                    imageUrl = "image/ad2.jpg";//
                    break;
                case "taare zameen par":
                    imageUrl = "image/tzp1.jpg";//
                    break;
                case "maara":
                    imageUrl = "image/maara2.jpg";//
                    break;
                case "la la land":
                    imageUrl = "image/lala.jpg";//
                    break;
                case "train to busan":
                    imageUrl = "image/busan.jpg";//
                    break;
                case "the batman":
                    imageUrl = "image/bat2.jpg";//
                    break;
                case "raatchasan":
                    imageUrl = "image/raat.jpg"; //
                    break;
                case "cadaver":
                    imageUrl = "image/kadavar.jpg";//
                    break;
                case "andhadhun":
                    imageUrl = "image/andh2.jpg";//
                    break;
                case "kill boksoon":
                    imageUrl = "image/kbs2.jpg";//
                    break;
                case "time to hunt":
                    imageUrl = "image/tth.jpg"; //
                    break;
                default:
                    imageUrl = "image/home.jpg"; // Fallback image
            }
    
            document.querySelector('.detail').style.backgroundImage = 'url("' + imageUrl + '")';
        }
    </script>
    
    <div class="headerbg1">
        <header>
            <div class="container">
                <div class="navbar flex1">
                    <div class="logo">
                        <img src="image/logo.png" alt="">
                    </div>

                    <nav>
                        <ul id="menuitem">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="index.php#popular">Popular</a></li>
                        <li><a href="index.php#drama">Drama</a></li>
                        <li><a href="index.php#thrillers">Thrillers</a></li>
                        <!-- <li><a href="account.html">Account</a></li> -->
                        </ul>
                    </nav>
                    <span class="fa fa-bars" onclick="menutoggle()"></span>

                </div>
            </div>
        </header>

        <div class="home_content mtop">
            <div class="container">
                <div class="left">
                    <h1><?php echo htmlspecialchars($movie['title']);?></h1>
                            <!-- //  echo " from php"; -->

                    <div class="time flex">
                        <label>U</label>
                        <i class="fas fa-circle"></i>
                        <span><?php echo htmlspecialchars($movie['length']); ?></span>
                        <i class="fas fa-circle"></i>
                        <p><?php echo htmlspecialchars($movie['year']); ?></p>
                        <i class="fas fa-circle"></i>
                    </div>

                    <p><?php echo htmlspecialchars($movie['Plot']); ?></p><br>
                    <p>Starring: <?php echo htmlspecialchars($movie['Main Cast']); ?></p><br><br>
                    <!-- <div class="button flex"> -->
                        <!-- <a href="details.html" class="btn">PLAY NOW</a>
                        <i id="palybtn" class="fas fa-play"></i> -->
                        <p><a href="<?php echo htmlspecialchars($movie['trailer']); ?>" class="btn" target="_blank">WATCH TRAILER</a></p>
                    <!-- </div> -->
<br>

                </div>

                <div class="headerbg2">
                    <br>
                    <!-- <h1 class="det">Movie Details</h1> -->
                    <ul style="list-style-type:disc;">
                       <h2><li>Genre: <?php echo htmlspecialchars($movie['genre']); ?></li></h2>
                       <h2><li>IMDB Rating: <?php echo htmlspecialchars($movie['imdb']); ?></li></h2>
                       <h2><li>Language: <?php echo htmlspecialchars($movie['language']); ?></li></h2>
                       <h2><li>Directed by: <?php echo htmlspecialchars($movie['Directed_by']); ?></li></h2>
                       <h2><li>Written by: <?php echo htmlspecialchars($movie['Written_by']); ?></li></h2>
                       <h2><li>Watch Options: <?php echo htmlspecialchars($movie['watchoptions']); ?></li></h2>
                    </ul>
                    </div>
                <!-- <div class="right1">
                    
                    </div> -->


                    </div>
                </div>
            </div>
</body>

</html>
