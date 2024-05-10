const isLoggedIn = () => localStorage.getItem('userLoggedIn') === 'true';

function showAccountDetails() {
    alert("Username: <?php echo $_SESSION['username']; ?>\nEmail: <?php echo $_SESSION['email']; ?>");
}

var menuitem = document.getElementById("menuitem");
menuitem.style.maxHeight = "0px";

function menutoggle() {
  if (menuitem.style.maxHeight == '0px') {
    menuitem.style.maxHeight = "200px";
  } else {
    menuitem.style.maxHeight = "0px";
  }
}

window.addEventListener("scroll", function () {
  var header = document.querySelector("header");
  header.classList.toggle("sticky", window.scrollY > 50);
})

function storeMovieName(movieName) {
    localStorage.setItem('selectedMovie', movieName);
  }


   
    
    // Toggle search bar visibility
    function toggleSearchBar() {
        var searchBar = document.getElementById("searchBar");
        if (searchBar.style.display === "none") {
            searchBar.style.display = "block";
        } else {
            searchBar.style.display = "none";
        }
    }

    // Search and redirect or alert
    function searchMovie() {
        var input = document.getElementById('searchInput').value.trim().toLowerCase(); // Get and normalize input
        var movies = {
            // "salaar: cease fire part - 1": "image/home.jpg",
            "manjummel boys": "image/p4.jpg",
            "the jungle book": "image/p1.jpg",
            "3 idiots": "image/p2.jpg",
            "avatar": "image/p3.jpg",
            "interstellar": "image/p18.jpg",
            "khaleja": "image/p5.jpg",
            "remo": "image/p6.jpg",
            "attarintiki daredi": "image/p7.jpg",
            "taare zameen par": "image/p8.jpg",
            "maara": "image/p9.jpg",
            "la la land": "image/p10.jpg",
            "train to busan": "image/p11.jpg",
            "the batman": "image/p12.jpg",
            "raatchasan": "image/p13.jpg",
            "cadaver": "image/p14.jpg",
            "andhadhun": "image/p15.jpg",
            "kill boksoon": "image/p16.jpg",
            "time to hunt": "image/p17.jpg"
        };
    
        if (movies[input]) {
            localStorage.setItem('selectedMovie', input);
            window.location.href = 'details.php?movieName=' + encodeURIComponent(input); // Redirect to details page with movieName parameter
        }
        else {
            alert("Movie not found"); // Alert if movie not found
        }
    }
    
    

    // Event listener for the Enter key
    document.addEventListener('DOMContentLoaded', function() {
        document.getElementById("searchInput").addEventListener("keypress", function(event) {
            if (event.key === "Enter") { // Check if Enter is pressed
                event.preventDefault(); // Prevent default form submit
                searchMovie(); // Trigger the search function
            }
        });
    });

    function toggleLike(element) {
        if (!isLoggedIn) {
            window.location.href = 'signin.html'; // Redirect to sign-in page
            return;
        }
    
        const movieTitle = element.getAttribute('data-title');
        const isLiked = element.classList.contains('fas'); // Check if it is already liked
    
        fetch('like_toggle.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
            },
            body: `title=${encodeURIComponent(movieTitle)}&liked=${isLiked}`
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                // Toggle the class based on current state
                element.classList.toggle('far');
                element.classList.toggle('fas');
                element.style.color = isLiked ? 'white' : 'red'; // Toggle color
            } else {
                console.error('Failed to toggle like:', data.message);
            }
        })
        .catch(error => {
            console.error('Error toggling like:', error);
        });
    }

    document.addEventListener('DOMContentLoaded', function() {
        if (isLoggedIn()) {
            fetchLikedMovies();
        }
    });
    
    function fetchLikedMovies() {
        fetch('fetch_likes.php', { method: 'POST' })
        .then(response => response.json())
        .then(data => {
            data.likes.forEach(movieTitle => {
                const likeElement = document.querySelector(`[data-title="${movieTitle}"]`);
                likeElement.classList.add('fas');
                likeElement.classList.remove('far');
                likeElement.style.color = 'red';
            });
        });
    }

    function submitReview() {
        const username = document.getElementById('username').value;
        const email = document.getElementById('email').value;
        const review = document.getElementById('reviewText').value;
    
        // Example of sending data using Fetch API
        fetch('submit_review_endpoint.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({ username, email, review })
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                alert('Review submitted successfully!');
                // Optionally redirect or clear form
            } else {
                alert('Failed to submit review.');
            }
        })
        .catch(error => {
            console.error('Error:', error);
        });
    }
    

    function redirectToReviewPage(element) {
        var movieName = element.getAttribute('data-title');
        window.location.href = 'submit_review.php?movieName=' + encodeURIComponent(movieName);
    }
    
    
