<!DOCTYPE html>
<?php
// $cookie_cpy="copyright";
// $cookie_cpy_value= $_POST["text-input-copyright"];
// setcookie($cookie_cpy, $cookie_cpy_value, time()+(86400*30), "copyright.php");
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Copyrights</title>
    <link rel="stylesheet" href="navigation.css" type="text/css"/>
    <link rel="stylesheet" href="./Assist/botnav_pages.css" type="text/css">
    <link rel="stylesheet" href="./Assist/icon.css" type="text/css"/>
    <link rel="stylesheet" href="./Assist/app.css" type="text/css">
</head>

<body onpageshow="popup()">
<header>
    <div class="logo-home">
        <a href="index.html"><img src="./image/mall-logo.jpg" alt="shopping cart creative"></a>
    </div>
    <div id="topnav">
    <nav>
        <ul>
            <li><a href="order.html">ORDERS</a></li>
            <li><a href="contacts.html">CONTACTS</a></li>
            <li><a href="faqs.html">FAQS</a></li>
            <li class="dropdown">
                <a class="dropbutton">BROWSE</a>
                <div class="drop-content">
                    <a href="browse_name.html">Browse Stores by Names</a>
                    <a href="browse_cat.html">Browse Stores by Category </a>
                </div>
            </li>
            <li><a onclick="loggedStatus()">MY ACCOUNT</a></li>
            <li><a href="fees.html">FEES</a></li>
            <li><a href="aboutus.php">ABOUT US</a></li>
            <li><a href="index.html">HOME</a></li>
        </ul>
    </nav>
    </div>
</header>

<main>
    <header>
        <h1>COPYRIGHT 20XX - 20XX</h1>
    </header>
    <section>
        <p>
<?php
    if(!isset($_POST["text-input-copyright"])){
        echo "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus sit architecto illo quae a blanditiis. Earum doloribus aperiam in? In ex optio temporibus id explicabo sed, officia incidunt velit possimus?";
    }
    else{
        echo $_POST["text-input-copyright"];
    }
?>
        </p>
    </section>
</main>

<footer>
    <div id="botnav">
        <nav>
            <ul>
                <li><a href="privacy.php">Privacy Policy</a></li>
                <li><a href="tos.php">Terms of Service</a></li>
                <li><a href="copyright.php">Copyright</a></li>
            </ul>
        </nav>
    </div>
</footer>
<div id="consentPopup" class="hidden">
    <p>This site uses cookies to improve the user experience. By clicking
        here you accept cookies placed by our site.</p> <a id="accept" href="#">Learn More</a>
    <button onclick="consent()">I Consent</button>
</div>
</body>
</html>
<script src="./Assist/app.js"></script>
