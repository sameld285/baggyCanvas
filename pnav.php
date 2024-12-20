<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> <!-- For icons if needed -->
    <!-- Custom CSS -->
    <link rel="icon" href="image/icon.png" type="image/icon type">

    <style>
    @font-face { font-family: Nexa-Heavy; src: url('Nexa-Heavy.TTF'); } 

body {
    font-family: "Nexa-Heavy", sans-serif;
    font-weight: bold;
    margin: 0;
    padding: 0;
    overflow: hidden; /* Prevent scrollbars */
}

header {
    background-color: #e8e8e8;
    z-index: 1000; /* Ensure navbar is above other content */
    position: fixed; /* Fixed position */
    top: 0; /* Stick to the top */
    left: 0; /* Stick to the left edge */
    width: 100%; /* Full width */
}

.navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0.25rem 0.5rem; /* Slimmed down padding */
    background-color: #FFFFFF; /* Ensure background color is applied */
    text-decoration: none;
    font-family: 'Nexa-Heavy', sans-serif; /* Apply Nexa-Heavy font to navbar */
}

.navbar-brand h3 {
    font-size: 1.05rem; /* Reduced font size */
    padding-left: 15px; /* Adjust padding as needed */
    color: #333;
    margin: 0;
    transition: color 0.3s ease, transform 0.3s ease; /* Added color transition */
    text-decoration: none;
}

.navbar-menu .centered a,
.navbar-brand a {
    text-decoration: none; /* Remove underline */
    color: inherit;
    color: #333; /* Set the color if needed */

}
.navbar-brand h3:hover{
    color: #474747; 
    transform: translateY(-5px); /* Move link up by 5px */

}

.navbar-menu .links a {
    text-decoration: none; /* Remove underline */
    color: #333; /* Set the color */
    font-size: 8px;
}

.navbar-menu .links a:hover {
    
    color: #333; /* No color change on hover */
}

.navbar-toggler {
    display: none;
}

.navbar-menu {
    display: flex;
    align-items: center;
    width: 100%;
    justify-content: space-between; /* Distribute space between items */
    text-decoration: none;
}

.navbar-menu .centered {
    flex: 1;
    display: flex;
    justify-content: center;

}

.navbar-menu .centered h1 {
    font-family: 'Nexa-Heavy';
    font-size: 1.4rem; /* Reduced font size */
    padding-left: 10px; /* Adjust spacing if needed */
    margin: 0;
    color: #333;
}

.navbar-menu .links {
    display: flex;
    align-items: center;
}

.navbar-menu .links ul {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
    align-items: center;
}

.navbar-menu .links li {
    margin: 0 0.2rem; /* Reduced margin between links */
}

.navbar-menu .links a {
    text-decoration: none; /* Remove underline */
    color: #333;
    font-size: 0.85rem; /* Smaller font size for links */
    display: inline-block; /* Ensure the link behaves like a block element */
    padding: 2px 5px; /* Less padding around links */
    transition: transform 0.3s ease, background-color 0.3s ease; /* Smooth transition for rising effect */
}

.navbar-menu .links a:hover {
    color: #474747; 
    transform: translateY(-5px); /* Move link up by 5px */
}

.main-content {
    margin-left: 325px; 
    height: 100vh; 
    position: relative;
    overflow: hidden;
    padding-top: 60px; /* Adjust this value based on the height of your navbar */
}

.main-content img {
    width: 100%;
    height: 100%;
    object-fit: cover; /* Ensures the image covers the area without distortion */
    position: absolute; /* Absolute positioning for the image */
    top: 0;
    left: 0;
}

.overlay-text {
    position: absolute; /* Position on top of the image */
    top: 50%; /* Center text vertically */
    left: 50%; /* Center text horizontally */
    transform: translate(-50%, -50%); /* Center text exactly */
    color: white;
    font-size: 6.5em;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7); /* Optional: for better readability */
    z-index: 2; /* Make sure text is on top of the image */
    font-family: "Nexa-Heavy";
}
.logo {
    width: 15px; /* Adjust logo size to keep proportions */
    height: auto;
    margin-left: 5px;
    margin-right: 5px;
}
/* width */
::-webkit-scrollbar {
  width: 10px;
}

/* Track */
::-webkit-scrollbar-track {
  background: #f1f1f1;
  border-radius: 10px;

}

/* Handle */
::-webkit-scrollbar-thumb {
  background: #FFBF00;
  padding: 2px;
  border-radius: 10px;
  
}


/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #b88a02;
}

/* Media queries */
@media screen and (max-height: 450px) {
    .sidenav a {
        font-size: 18px;
    }
}



    </style>
</head>
<body>
<header>
    <nav class="navbar">
        <div class="navbar-brand">
            <a href="productions.php">
                <h3>Production</h3>
            </a>
        </div>

        <button class="navbar-toggler" type="button">
            <i class="fas fa-bars"></i>
        </button>
        <div class="navbar-menu">
            <div class="centered">
                <a href="index.php" style="display: flex; align-items: center;"> <!-- Center text and logo -->
                    <h1 style="margin: 0;">Baggy Canvas Media</h1>
                    <img class="logo" src="image/logo.png" alt="">
                </a>
            </div>
            <div class="links">
                <ul>
                    <li>
                        <a href="us.php">Us</a>
                    </li>
                    <li>
                        <a href="about.php">About</a>
                    </li>
                    <li>
                        <a href="contact.php">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

    <script>
        const toggler = document.querySelector('.navbar-toggler');
        const menu = document.querySelector('.navbar-menu');

        toggler.addEventListener('click', () => {
            menu.classList.toggle('active');
        });
    </script>
</body>
</html>
