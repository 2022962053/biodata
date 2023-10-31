<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Biodata</title>
    <link rel="stylesheet" href="styles-desktop.css" media="screen and (min-width: 769px)">
    <link rel="stylesheet" href="styles-mobile.css" media="screen and (max-width: 768px)">
</head>

<body>
    <?php require('action.php'); ?>

    <nav class="navbar">
        <ul>
            <li><a href="#about">About Me</a></li>
            <li><a href="#contact">Contact Information</a></li>
        </ul>
    </nav>

    <div class="container" id="about">
        <header>
            <div class="pic-frame">
                <img src="<?php echo $images ?>" class="pic" width="270" height="335">
            </div>
            <h1 class="cute-font"><?php echo $name ?></h1>
            <p class="cute-text">Student</p>
        </header>

        <div class="info">
            <div class="contact-info">
                <h2 class="cute-heading">Contact Information</h2>
                <p class="cute-line contact-line">Email: <?php echo $email ?></p>
                <p class="cute-line contact-line">Phone: <?php echo $phone ?></p>
            </div>

            <div class="about-me">
                <h2 class="cute-heading">About Me</h2>
                <p class="cute-line about-line">IC: <?php echo $ic ?></p>
                <p class="cute-line about-line">Nationality: <?php echo $nationality ?></p>
                <p class="cute-line about-line">Race: <?php echo $race ?></p>
                <p class="cute-line about-line">Gender: <?php echo $gender ?></p>
                <p class "cute-line about-line">Hobby: <?php echo $hobby ?></p>
                <p class="cute-line about-line">Address: <?php echo $address ?></p>
                <p class="cute-line about-line">Age: <?php echo $age ?></p>
            </div>
        </div>
    </div>
</body>

<style>
    body {
        font-family: 'Comic Sans MS', cursive;
        background-color: #cce0ff; /* Soft light blue background color */
        background-image: linear-gradient(45deg, #cce0ff, #a3c2ff); /* Gradient animation */
        background-size: 200% 200%;
        animation: gradient 10s ease infinite;
        margin: 0;
        padding: 0;
    }

    @keyframes gradient {
        0% {
            background-position: 0% 50%;
        }

        50% {
            background-position: 100% 50%;
        }

        100% {
            background-position: 0% 50%;
        }

    }

    .container {
        max-width: 800px;
        margin: 0 auto;
        background: rgba(255, 255, 255, 0.8);
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        padding: 20px;
        border-radius: 10px;
        margin-top: 20px;
    }

    .pic-frame {
        border: 10px solid #0099cc; /* Frame border color */
        padding: 10px;
        border-radius: 15px;
        display: inline-block;
    }

    .pic {
        border-radius: 15%;
    }

    header {
        text-align: center;
    }

    .cute-font {
        font-family: 'Pacifico', cursive;
        color: #0099cc; /* Light blue font color */
        margin: 10px 0;
        font-size: 28px;
    }

    .cute-text {
        font-family: 'Arial', sans-serif;
        color: #0099cc; /* Light blue font color */
        font-size: 18px;
    }

    p {
        font-family: 'Arial', sans-serif;
        color: #0099cc; /* Light blue font color */
        font-size: 16px;
    }

    .img {
        border-radius: 20px;
    }

    .info {
        text-align: center;
    }

    .contact-info .contact-line, .about-me .about-line {
        border: 1px solid rgba(255, 193, 7, 0.5); /* Pastel color border with transparency */
        background-color: rgba(255, 193, 7, 0.1); /* Pastel color background with transparency */
        border-radius: 10px; /* Rounded border */
        padding: 10px; /* Add some padding for better spacing */
        transition: transform 0.3s, border-color 0.3s; /* Add a smooth transition for zoom and border color effect */
    }

    .contact-info .contact-line:hover, .about-me .about-line:hover {
        border-color: #ff9900; /* Orange border color on hover */
        transform: scale(1.05); /* Zoom effect on hover */
    }

    .cute-heading {
        font-family: 'Pacifico', cursive;
        color: #0099cc; /* Light blue font color */
        font-size: 20px;
    }

    .cute-line {
        font-family: 'Arial', sans-serif;
        color: #0099cc; /* Light blue font color */
        font-size: 16px;
        margin: 10px 0;
    }

    .navbar {
        background-color: #0099cc;
        text-align: center;
        padding: 10px 0;
    }

    .navbar ul {
        list-style: none;
        padding: 0;
    }

    .navbar li {
        display: inline;
        margin: 0 20px;
    }

    .navbar a {
        text-decoration: none;
        color: #fff;
        font-size: 16px;
    }

    .navbar a:hover {
        text-decoration: underline;
    }
</style>

</html>
