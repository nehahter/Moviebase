<?php
session_start(); 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>MOVIEBASE</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">




  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" 
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
      <!-- Owl Carousel css-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <!-- Owl Carousel css-->
  <script src="https://code.jquery.com/jquery-1.12.4.min.js"
        integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
</head>


<body>
  <section class="home">
    <div class="headerbg">
      <header>
        <div class="container">
          <div class="navbar flex1">
            <div class="logo">
              <img src="image/logo.png" alt="Logo">
            </div>
            <nav>
              <ul id="menuitem">
                <li><a href="index.php">Home</a></li>
                <li><a href="#popular">Popular</a></li>
                <li><a href="#drama">Drama</a></li>
                <li><a href="#thrillers">Thrillers</a></li>
                </ul>
            </nav>
            <span class="fa fa-bars" onclick="menutoggle()"></span>

<div class="subscribe flex">
  <i class="fas fa-search" onclick="toggleSearchBar()"></i>
  <div id="searchBar" style="display: none;">
      <input type="text" id="searchInput" placeholder="Search for a movie...">
      <button onclick="searchMovie()">Search</button>
  </div>
                <?php if(isset($_SESSION['username'])): ?>
                  <a href="user_details.php"><i class="fas fa-user"></i><?php echo $_SESSION['username']; ?></a>
                  <button onclick="window.location.href='signout.php';">SIGN OUT</button>
                <?php else: ?>
                  <button onclick="window.location.href='signin.php';">SIGN IN</button>
                <?php endif; ?>
                </div>
          </div>
        </div>
      </header>

      <div class="home_content mtop">
        <div class="container">
          <div class="left">
            <div class="movie"><h1>SALAAR: PART 1 – CEASEFIRE</h1></div>
            <div class="time flex">
              <label>A</label>
              <i class="fas fa-circle"></i>
              <span>2hrs 55mins</span>
              <i class="fas fa-circle"></i>
              <p>2023</p>
              <i class="fas fa-circle"></i>
              <button>Action</button>
            </div>
            <p>The fate of a violently contested kingdom hangs on the fraught bond between two friends-turned-foes in this saga of power, bloodshed and betrayal.</p>
            <p>Starring: Prabhas, Prithviraj Sukumaran, Shruthi Haasan</p>
            <div class="button flex">
              <a href="details.php?movieName=salaar: cease fire - part 1" onclick="storeMovieName('Salaar: Cease Fire - Part 1')" class="btn">VIEW</a>
              <p><a href="https://www.youtube.com/watch?v=4GPvYMKtrtI">WATCH TRAILER</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>



  <section id="popular" class="popular mtop">
    <div class="container">
      <div class="heading flex1">
        <h2>Popular</h2>
        <button class="more-button">MORE</button>
      </div>

      <div class="owl-carousel owl-theme">
        <div class="item">
          <div class="box">
            <a href="details.php?movieName=the jungle book" onclick="storeMovieName('The Jungle Book')">
            <div class="imgBox">
              <img src="image/p1.jpg" alt="">
            </div>
            </a>

            <div class="content">
              <i id="palybtn" class="fas fa-play"></i>
            </div>
            <div class="text">
    <h3>
        <span>The Jungle Book</span> <!-- Title on the left -->
        <div class="icon-right">
    <i class="far fa-heart" style="color: white;" onclick="toggleLike(this)" data-title="The Jungle Book"></i>
    <i class="fa fa-comment" aria-hidden="true" style="color: white;" data-title="The Jungle Book" onclick="redirectToReviewPage(this)"></i>
</div>
    </h3>
                 <!-- <div class="icon"> -->
                <!-- <i class="fas fa-share-alt"></i> -->
                <!-- <i class="fas fa-plus"></i> -->
              <!-- </div> -->
    <div class="time flex">
        <span>1hr 46mins</span>
        <i class="fas fa-circle"></i>
        <a>Adventure</a>
    </div>
</div>
</div>
        </div>
        
        <div class="item">
          <div class="box">
            <a href="details.php?movieName=avatar" onclick="storeMovieName('Avatar')">
            <div class="imgBox">
              <img src="image/p3.jpg" alt="">
            </div>
          </a>

            <div class="content">
              <i id="palybtn" class="fas fa-play"></i>
            </div>
            <div class="text">
            <h3>
        <span>Avatar</span>
        <div class="icon-right">
    <i class="far fa-heart" style="color: white;" onclick="toggleLike(this)" data-title="Avatar"></i>
    <i class="fa fa-comment" aria-hidden="true" style="color: white;" data-title="Avatar" onclick="redirectToReviewPage(this)"></i>
</div>

    </h3>
              <div class="time flex">
                <span>2hrs 41mins</span>
                <i class="fas fa-circle"></i>
                <a>Science Fiction</a>
              </div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="box">
            <a href="details.php?movieName=interstellar" onclick="storeMovieName('Interstellar')">
            <div class="imgBox">
              <img src="image/p18.jpg" alt="">
            </div>
            </a>

            <div class="content">
              <i id="palybtn" class="fas fa-play"></i>
            </div>
            <div class="text">
            <h3>
        <span>Interstellar</span>
        <div class="icon-right">
    <i class="far fa-heart" style="color: white;" onclick="toggleLike(this)" data-title="Interstellar"></i>
    <i class="fa fa-comment" aria-hidden="true" style="color: white;" data-title="Interstellar" onclick="redirectToReviewPage(this)"></i>
</div>
    </h3>              <div class="time flex">
                <span>2hrs 49mins</span>
                <i class="fas fa-circle"></i>
                <a>Sci-Fi</a>
              </div>
            </div>
          </div>
        </div>

        <div class="item">
          <div class="box">
            <a href="details.php?movieName=the batman" onclick="storeMovieName('The Batman')">
            <div class="imgBox">
              <img src="image/p12.jpg" alt="">
            </div>
          </a>

            <div class="content">
              <i id="palybtn" class="fas fa-play"></i>
            </div>
            <div class="text">
            <h3>
        <span>The Batman</span>
        <div class="icon-right">
    <i class="far fa-heart" style="color: white;" onclick="toggleLike(this)" data-title="The Batman"></i>
    <i class="fa fa-comment" aria-hidden="true" style="color: white;" data-title="The Batman" onclick="redirectToReviewPage(this)"></i>
</div>
    </h3>              <div class="time flex">
                <span>2hrs 56mins</span>
                <i class="fas fa-circle"></i>
                <a>Action</a>
              </div>
            </div>
          </div>
        </div>

        <div class="item">
          <div class="box">
            <a href="details.php?movieName=khaleja" onclick="storeMovieName('Khaleja')">
            <div class="imgBox">
              <img src="image/p5.jpg" alt="">
            </div>
          </a>

            <div class="content">
              <i id="palybtn" class="fas fa-play"></i>
            </div>
            <div class="text">
            <h3>
        <span>Khaleja</span>
        <div class="icon-right">
    <i class="far fa-heart" style="color: white;" onclick="toggleLike(this)" data-title="Khaleja"></i>
    <i class="fa fa-comment" aria-hidden="true" style="color: white;" data-title="Khaleja" onclick="redirectToReviewPage(this)"></i>
</div>
    </h3>              <div class="time flex">
                <span>2hrs 50mins</span>
                <i class="fas fa-circle"></i>
                <a>Comedy</a>
              </div>
            </div>
          </div>
        </div>

        <div class="item">
          <div class="box">
            <a href="details.php?movieName=remo" onclick="storeMovieName('Remo')">
            <div class="imgBox">
              <img src="image/p6.jpg" alt="">
            </div>
            </a>

            <div class="content">
              <i id="palybtn" class="fas fa-play"></i>
            </div>
            <div class="text">
            <h3>
        <span>Remo</span>
        <div class="icon-right">
    <i class="far fa-heart" style="color: white;" onclick="toggleLike(this)" data-title="Remo"></i>
    <i class="fa fa-comment" aria-hidden="true" style="color: white;" data-title="Remo" onclick="redirectToReviewPage(this)"></i>
</div>
    </h3>              <div class="time flex">
                <span>2hrs 31mins</span>
                <i class="fas fa-circle"></i>
                <a>Comedy</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section>

  <section id="drama" class="popular mtop">
    <div class="container ">
      <div class="heading flex1">
        <h2>Drama</h2>
        <button class="more-button">MORE</button>
      </div>

      <div class="owl-carousel owl-theme">
        <div class="item">
          <div class="box">
            <a href="details.php?movieName=taare zameen par" onclick="storeMovieName('Taare Zameen Par')">
            <div class="imgBox">
              <img src="image/p8.jpg" alt="Taare Zameen Par">
            </div>
            </a>            

            <div class="content">
              <i id="palybtn" class="fas fa-play"></i>
            </div>
            <div class="text">
            <h3>
        <span>Taare Zameen Par</span>
        <div class="icon-right">
        <i class="far fa-heart" style="color: white;" onclick="toggleLike(this)" data-title="Taare Zameen Par"></i>
    <i class="fa fa-comment" aria-hidden="true" style="color: white;" data-title="Taare Zameen Par" onclick="redirectToReviewPage(this)"></i>
        </div>
    </h3>              <div class="time flex">
                <span>2hrs 42mins</span>
                <i class="fas fa-circle"></i>
                <a>Drama</a>
              </div>
            </div>
          </div>
        </div>

        <div class="item">
          <div class="box">
            <a href="details.php?movieName=3 idiots" onclick="storeMovieName('3 Idiots')">
            <div class="imgBox">
              <img src="image/p2.jpg" alt="">
            </div>
            </a>

            <div class="content">
              <i id="palybtn" class="fas fa-play"></i>
            </div>
            <div class="text">
            <h3>
        <span>3 Idiots</span>
        <div class="icon-right">
        <i class="far fa-heart" style="color: white;" onclick="toggleLike(this)" data-title="3 Idiots"></i>
    <i class="fa fa-comment" aria-hidden="true" style="color: white;" data-title="3 Idiots" onclick="redirectToReviewPage(this)"></i>
        </div>
    </h3>              <div class="time flex">
                <span>2hrs 44min</span>
                <i class="fas fa-circle"></i>
                <a>Comedy, Drama</a>
              </div>
            </div>
          </div>
        </div>

        <div class="item">
          <div class="box">
            <a href="details.php?movieName=maara" onclick="storeMovieName('Maara')">
            <div class="imgBox">
              <img src="image/p9.jpg" alt="">
            </div>
            </a>

            <div class="content">
              <i id="palybtn" class="fas fa-play"></i>
            </div>
            <div class="text">
            <h3>
        <span>Maara</span>
        <div class="icon-right">
        <i class="far fa-heart" style="color: white;" onclick="toggleLike(this)" data-title="Maara"></i>
    <i class="fa fa-comment" aria-hidden="true" style="color: white;" data-title="Maara" onclick="redirectToReviewPage(this)"></i>
        </div>
    </h3>              <div class="time flex">
                <span>2hrs 29mins</span>
                <i class="fas fa-circle"></i>
                <a>Drama</a>
              </div>
            </div>
          </div>
        </div>

        <div class="item">
          <div class="box">
            <a href="details.php?movieName=attarintiki daredi" onclick="storeMovieName('Attarintiki Daredi')">
            <div class="imgBox">
              <img src="image/p7.jpg" alt="">
            </div>
            </a>

            <div class="content">
              <i id="palybtn" class="fas fa-play"></i>
            </div>
            <div class="text">
            <h3>
        <span>Attarintiki Daredi</span>
        <div class="icon-right">
        <i class="far fa-heart" style="color: white;" onclick="toggleLike(this)" data-title="Attarintiki Daredi"></i>
    <i class="fa fa-comment" aria-hidden="true" style="color: white;" data-title="Attarintiki Daredi" onclick="redirectToReviewPage(this)"></i>
        </div>
    </h3>              <div class="time flex">
                <span>2hrs 50mins</span>
                <i class="fas fa-circle"></i>
                <a>Action, Drama</a>
              </div>
            </div>
          </div>
        </div>

        <div class="item">
          <div class="box">
            <a href="details.php?movieName=la la land" onclick="storeMovieName('La La Land')">
            <div class="imgBox">
              <img src="image/p10.jpg" alt="">
            </div>
            </a>

            <div class="content">
              <i id="palybtn" class="fas fa-play"></i>
            </div>
            <div class="text">
            <h3>
        <span>La La Land</span>
        <div class="icon-right">
        <i class="far fa-heart" style="color: white;" onclick="toggleLike(this)" data-title="La La Land"></i>
    <i class="fa fa-comment" aria-hidden="true" style="color: white;" data-title="La La Land" onclick="redirectToReviewPage(this)"></i>
        </div>
    </h3>              <div class="time flex">
                <span>2hrs 7mins</span>
                <i class="fas fa-circle"></i>
                <a>Dreamlike</a>
              </div>
            </div>
          </div>
        </div>

  </section>


  <!-- Owl Carousel -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>
  <!-- Owl Carousel -->

  <script>
    $('.owl-carousel').owlCarousel({
      loop: true,
      margin: 20,
      nav: true,
      dots: false,
      responsive: {
        411: {
          items: 1
        },
        768: {
          items: 2
        },
        1000: {
          items: 4
        }
      }
    })
  </script>






  <section class="new_realase top">
    <div class="container">
      <div class="owl-carousel owl-carousel2 owl-theme">
        <div class="items">
          <div class="left">
            <div class="img">
              <img src="image/p4.jpg" alt="">
            </div>
            <div class="heading">
              <h2><span>NEW REALEASE</span></h2>
              <h1 class="manj">MANJUMMEL BOYS</h1>
            </div>
            <div class="time flex">
              <label>A</label>
              <i class="fas fa-circle"></i>
              <span>2hrs 15mins</span>
              <i class="fas fa-circle"></i>
              <a class="flex1"><img src="https://img.icons8.com/color/95/000000/imdb.png" /> 8.6</a>
              <i class="fas fa-circle"></i>
              <p>2024</p>
              <i class="fas fa-circle"></i>
              <p>Adventure</p>
            </div>

            <p>A group of friends get into a daring rescue mission to save their friend from Guna Caves, a perilously
              deep pit from where nobody has ever been brought back. </p>

            <div class="button flex">
              <a href="details.php?movieName=manjummel boys" onclick="storeMovieName('MANJUMMEL BOYS')" class="btn">VIEW</a>
              <!-- <i id="palybtn" class="fas fa-play"></i> -->
              <p><a href="https://www.youtube.com/watch?v=id848Ww1YLo&t=25s">WATCH TRAILER</a></p>
            </div>
          </div>
        </div>
        <div class="items">
          <div class="left">
            <div class="img">
              <img src="image/p2.jpg" alt="">
            </div>
            <div class="heading">
              <h2> <span>OLD REALEASE</span></h2>
              <h1>3 IDIOTS</h1>
            </div>
            <div class="time flex">
              <label>U</label>
              <i class="fas fa-circle"></i>
              <span>2hrs 44mins</span>
              <i class="fas fa-circle"></i>
              <a class="flex1"><img src="https://img.icons8.com/color/95/000000/imdb.png" /> 8.4</a>
              <i class="fas fa-circle"></i>
              <p>2009</p>
              <i class="fas fa-circle"></i>
              <p>Comedy</p>
            </div>

            <p>In College, Farhan And Raju Form A Great Bond With Rancho Due To His Positive And 
              Refreshing Outlook To Life. Years Later, A Bet Gives Them A Chance To Look For Their 
              Long-lost Friend Whose Existence Seems Rather Elusive.
            </p>

            <div class="button flex">
              <a href="details.php?movieName=3 idiots" onclick="storeMovieName('3 Idiots')" class="btn">VIEW</a>
              <!-- <i id="palybtn" class="fas fa-play"></i> -->
              <p><a href="https://www.youtube.com/watch?v=K0eDlFX9GMc">WATCH TRAILER</a></p>
            </div>
          </div>
        </div>
        <div class="items">
          <div class="left">
            <div class="img">
              <img src="image/p19.jpg" alt="">
            </div>
            <div class="heading">
              <h2><span>OLD REALEASE</span></h2>
              <h1>AVATAR</h1>
            </div>
            <div class="time flex">
              <label>U</label>
              <i class="fas fa-circle"></i>
              <span>2hrs 41mins</span>
              <i class="fas fa-circle"></i>
              <a class="flex1"><img src="https://img.icons8.com/color/95/000000/imdb.png" /> 7.9</a>
              <i class="fas fa-circle"></i>
              <p>2021</p>
              <i class="fas fa-circle"></i>
              <p>Science Fiction</p>
            </div>

            <p>Former Marine Jake Sully is deployed as an Avatar on a mission to Pandora but, 
              he ultimately finds himself torn between two worlds.
            </p>

            <div class="button flex">
              <a href="details.php?movieName=avatar" onclick="storeMovieName('Avatar')" class="btn">VIEW</a>
              <!-- <i id="palybtn" class="fas fa-play"></i> -->
              <p><a href="https://www.youtube.com/watch?v=5PSNL1qE6VY">WATCH TRAILER</a></p>
            </div>
          </div>
        </div>
        <div class="items">
          <div class="left">
            <div class="img">
              <img src="image/p9.jpg" alt="">
            </div>
            <div class="heading">
              <h2><span>FEEL GOOD</span></h2>
              <h1>MAARA</h1>
            </div>
            <div class="time flex">
              <label>U</label>
              <i class="fas fa-circle"></i>
              <span>2hrs 29mins</span>
              <i class="fas fa-circle"></i>
              <a class="flex"><img src="https://img.icons8.com/color/95/000000/imdb.png" /> 7.5</a>
              <i class="fas fa-circle"></i>
              <p>2021</p>
              <i class="fas fa-circle"></i>
              <p>Drama</p>
            </div>

            <p>When Paaru sees a fairy tale she heard from a stranger as a child painted across the 
              walls of a coastal town, she goes in search of the man who painted it-Maara.
            </p>

            <div class="button flex">
              <a href="details.php?movieName=maara" onclick="storeMovieName('Maara')" class="btn">VIEW</a>
              <!-- <i id="palybtn" class="fas fa-play"></i> -->
              <p><a href="https://www.youtube.com/watch?v=Lv5KUKKwQEw">WATCH TRAILER</a></p>
            </div>
          </div>
        </div>
        <div class="items">
          <div class="left">
            <div class="img">
              <img src="image/p11.jpg" alt="">
            </div>
            <div class="heading">
              <h2><span>TERRIFYING</span></h2>
              <h1 class="manj">TRAIN TO BUSAN</h1>
            </div>
            <div class="time flex">
              <label>A</label>
              <i class="fas fa-circle"></i>
              <span>1hrs 53mins</span>
              <i class="fas fa-circle"></i>
              <a class="flex1"><img src="https://img.icons8.com/color/95/000000/imdb.png" /> 7.6</a>
              <i class="fas fa-circle"></i>
              <p>2016</p>
              <i class="fas fa-circle"></i>
              <p>Suspense</p>
            </div>

            <p>While a zombie virus breaks out in South Korea, passengers struggle 
              to survive on the train from Seoul to Busan.
            </p>

            <div class="button flex">
              <a href="details.php?movieName=train to busan" onclick="storeMovieName('Train to Busan')" class="btn">VIEW</a>
              <!-- <i id="palybtn" class="fas fa-play"></i> -->
              <p><a href="https://www.youtube.com/watch?v=1ovgxN2VWNc">WATCH TRAILER</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script>

    $('.owl-carousel2').owlCarousel({
      loop: true,
      margin: 20,
      dots: true,
      items: 1
    })
  </script>



  <section id="thrillers" class="popular mtop">
    <div class="container ">
      <div class="heading flex1">
        <h2>Thrillers</h2>
        <button class="more-button">MORE</button>
      </div>

      <div class="owl-carousel owl-theme">

        <div class="item">
          <div class="box">
            <a href="details.php?movieName=train to busan" onclick="storeMovieName('Train to Busan')">
            <div class="imgBox">
              <img src="image/p11.jpg" alt="">
            </div>
            </a>

            <div class="content">
              <i id="palybtn" class="fas fa-play"></i>
            </div>
            <div class="text">
            <h3>
        <span>Train to Busan</span>
        <div class="icon-right">
        <i class="far fa-heart" style="color: white;" onclick="toggleLike(this)" data-title="Train to Busan"></i>
    <i class="fa fa-comment" aria-hidden="true" style="color: white;" data-title="Train to Busan" onclick="redirectToReviewPage(this)"></i>
        </div>
    </h3>              <div class="time flex">
                <span>1hr 53mins</span>
                <i class="fas fa-circle"></i>
                <a>Zombie</a>
              </div>
            </div>
          </div>
        </div>

        <div class="item">
          <div class="box">
            <a href="details.php?movieName=raatchasan" onclick="storeMovieName('Raatchasan')">
            <div class="imgBox">
              <img src="image/p13.jpg" alt="">
            </div>
            </a>

            <div class="content">
              <i id="palybtn" class="fas fa-play"></i>
            </div>
            <div class="text">
            <h3>
        <span>Raatchasan</span>
        <div class="icon-right">
        <i class="far fa-heart" style="color: white;" onclick="toggleLike(this)" data-title="Raatchasan"></i>
    <i class="fa fa-comment" aria-hidden="true" style="color: white;" data-title="Raatchasan" onclick="redirectToReviewPage(this)"></i>
        </div>
    </h3>              <div class="time flex">
                <span>2hrs 26mins</span>
                <i class="fas fa-circle"></i>
                <a>Crime</a>
              </div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="box">
            <a href="details.php?movieName=cadaver" onclick="storeMovieName('Cadaver')">
            <div class="imgBox">
              <img src="image/p14.jpg" alt="">
            </div>
            </a>

            <div class="content">
              <i id="palybtn" class="fas fa-play"></i>
            </div>
            <div class="text">
            <h3>
        <span>Cadaver</span>
        <div class="icon-right">
        <i class="far fa-heart" style="color: white;" onclick="toggleLike(this)" data-title="Cadaver"></i>
    <i class="fa fa-comment" aria-hidden="true" style="color: white;" data-title="Cadaver" onclick="redirectToReviewPage(this)"></i>
        </div>
    </h3>              <div class="time flex">
                <span>1hr 26mins</span>
                <i class="fas fa-circle"></i>
                <a>Horror</a>
              </div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="box">
            <a href="details.php?movieName=andhadhun" onclick="storeMovieName('Andhadhun')">
            <div class="imgBox">
              <img src="image/p15.jpg" alt="">
            </div>
            </a>

            <div class="content">
              <i id="palybtn" class="fas fa-play"></i>
            </div>
            <div class="text">
            <h3>
        <span>Andhadhun</span>
        <div class="icon-right">
        <i class="far fa-heart" style="color: white;" onclick="toggleLike(this)" data-title="Andhadhun"></i>
    <i class="fa fa-comment" aria-hidden="true" style="color: white;" data-title="Andhadhun" onclick="redirectToReviewPage(this)"></i>
        </div>
    </h3>              <div class="time flex">
                <span>2hrs 19mins</span>
                <i class="fas fa-circle"></i>
                <a>Thriller</a>
              </div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="box">
            <a href="details.php?movieName=kill boksoon" onclick="storeMovieName('Kill Boksoon')">
            <div class="imgBox">
              <img src="image/p16.jpg" alt="">
            </div>
            </a>

            <div class="content">
              <i id="palybtn" class="fas fa-play"></i>
            </div>
            <div class="text">
            <h3>
        <span>Kill Booksoon</span>
        <div class="icon-right">
        <i class="far fa-heart" style="color: white;" onclick="toggleLike(this)" data-title="Kill Boksoon"></i>
    <i class="fa fa-comment" aria-hidden="true" style="color: white;" data-title="Kill Boksoon" onclick="redirectToReviewPage(this)"></i>
        </div>
    </h3>              <div class="time flex">
                <span>2hrs 17mins</span>
                <i class="fas fa-circle"></i>
                <a>Action</a>
              </div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="box">
            <a href="details.php?movieName=time to hunt" onclick="storeMovieName('Time to Hunt')">
            <div class="imgBox">
              <img src="image/p17.jpg" alt="">
            </div>
            </a>

            <div class="content">
              <i id="palybtn" class="fas fa-play"></i>
            </div>
            <div class="text">
            <h3>
        <span>Time to hunt</span>
        <div class="icon-right">
        <i class="far fa-heart" style="color: white;" onclick="toggleLike(this)" data-title="Time to Hunt"></i>
    <i class="fa fa-comment" aria-hidden="true" style="color: white;" data-title="Time to Hunt" onclick="redirectToReviewPage(this)"></i>
        </div>
    </h3>              <div class="time flex">
                <span>2hrs 14mins</span>
                <i class="fas fa-circle"></i>
                <a>Crime</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <script>
    $('.owl-carousel').owlCarousel({
      loop: true,
      margin: 20,
      nav: true,
      dots: false,
      responsive: {
        414: {
          items: 1
        },
        600: {
          items: 2
        },
        1000: {
          items: 4
        }
      }
    })
  </script>



  <footer>
    <div class="container mtop">
      <div class="box">
        <div class="logo">
          <img src="image/logo.png">
        </div>
        <div class="icon">
          <i class="fab fa-facebook-square"></i>
          <i class="fab fa-instagram"></i>
          <i class="fab fa-twitter-square"></i>
          <i class="fab fa-youtube-square"></i>
        </div>
      </div>

     
      <div class="box">
        <h2>Download App</h2>
        <div class="img flex1">
          <img src="image/app1.png" alt="">
          <img src="image/app2.png" alt="">
        </div>
      </div>
    </div>
    <p class="legal">Copyright (c) 2024 Copyright Holder All Rights Reserved</p>
  </footer>

  <script src="script.js"></script>

</body>

</html>
