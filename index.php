<?php require("pnav.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baggy Canvas Media</title>
    <style>
        .video {
            flex: 1 0 100%; /* Full width of the container */
            display: flex;
            justify-content: center; /* Center the video */
            padding-top: 20px;
            padding: 20px;
            margin-top: 80px;
            margin-right: 40px;
        }

        .video video {
            width: 100%; /* Adjust to be responsive */
            max-width: 1100px; /* Set a maximum width */
            height: auto; /* Keep aspect ratio */
        }

        .container {
            margin-top: -70px;
            display: flex;
            background-color: black;
            flex-wrap: wrap;
            justify-content: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="video">
            <!-- Video with a default source for desktop -->
            <video id="mainVideo" autoplay muted loop playsinline>
                <source src="image/BCMV.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
    </div>

    <script>
        // JavaScript to check screen width and load the appropriate video source
        document.addEventListener("DOMContentLoaded", function () {
            const video = document.getElementById("mainVideo");
            const mobileSrc = "image/bcmp.mp4";
            const desktopSrc = "image/BCMV.mp4";

            // Set initial source based on screen size
            if (window.innerWidth < 768) {
                video.querySelector("source").setAttribute("src", mobileSrc);
            } else {
                video.querySelector("source").setAttribute("src", desktopSrc);
            }

            // Reload video and play
            video.load();
            video.play().catch(error => {
                console.log("Autoplay failed:", error);
            });
        });

        // Update video source if the window is resized
        window.addEventListener("resize", function () {
            const video = document.getElementById("mainVideo");
            const mobileSrc = "image/bcmp.mp4";
            const desktopSrc = "image/BCMV.mp4";

            if (window.innerWidth < 768 && video.querySelector("source").getAttribute("src") !== mobileSrc) {
                video.querySelector("source").setAttribute("src", mobileSrc);
                video.load();
                video.play().catch(error => {
                    console.log("Autoplay failed:", error);
                });
            } else if (window.innerWidth >= 768 && video.querySelector("source").getAttribute("src") !== desktopSrc) {
                video.querySelector("source").setAttribute("src", desktopSrc);
                video.load();
                video.play().catch(error => {
                    console.log("Autoplay failed:", error);
                });
            }
        });
    </script>
</body>
</html>
