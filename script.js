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
            "salaar": "image/home.jpg",
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
        } else {
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
