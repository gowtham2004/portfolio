<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet"> <!-- https://fonts.google.com/ -->
    <link rel="stylesheet" href="fontawesome/css/all.min.css"> <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="css/magnific-popup.css"> 
    <link rel="stylesheet" href="css/templatemo-ocean-vibes.css"> 
</head>
<body>
    <!-- Video banner 400 px height -->
    <div id="tm-video">
        <video autoplay muted loop id="tm-video">
            <source src="video/ocean-sea-wave-video.mp4" type="video/mp4">
        </video>
        <svg class="arrows">
            <path class="a1" d="M0 0 L30 32 L60 0"></path>
            <path class="a2" d="M0 20 L30 52 L60 20"></path>
            <path class="a3" d="M0 40 L30 72 L60 40"></path>
          </svg> 
        <script>
            // Define the speed of the scroll
            const scrollSpeed = 5;
    
            // Get the current position of the page
            let currentPosition = window.scrollY;
    
            // Define a function to scroll the page
            function scrollPage() {
                // Update the position of the page
                currentPosition += scrollSpeed;
    
                // Scroll the page to the updated position
                window.scrollTo(0, currentPosition);
    
                // Check if we've reached the end of the page
                if (currentPosition < document.body.clientHeight) {
                    // If not, continue scrolling
                    window.requestAnimationFrame(scrollPage);
                }
            }
    
            // Call the scrollPage function to start scrolling
        </script> 
    </div>
    <div class="tm-container tm-text-center">
        <nav class="tm-main-nav">
            <ul id="inline-popups">
                <li class="tm-nav-item">
                    <a href="portfolio.html" data-effect="mfp-move-from-top" class="tm-nav-link">
                        PORT FOLIO
                        <i class="fas fa-3x fa-user"></i>
                    </a>
                </li>
                <li class="tm-nav-item">
                    <a href="hobby.html" data-effect="mfp-move-from-top" class="tm-nav-link">
                        HOBBY
                        <i class="fas fa-3x fa-magic"></i>
                    </a>
                </li>
                <li class="tm-nav-item">
                    <a href="movie.html" data-effect="mfp-move-from-top" class="tm-nav-link">
                        MOVIES
                        <i class="fas fa-3x fa-film"></i>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</body>
</html>
        