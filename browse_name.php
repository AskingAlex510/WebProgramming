<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Browse by name</title>
    <link rel="stylesheet" href="navigation.css" type="text/css"/>
    <link rel="stylesheet" href="./Assist/icon.css" type="text/css"/>
    <link rel="stylesheet" href="./Assist/app.css" type="text/css">
</head>

<body onpageshow="popup()">
<style>
    h2 {
        color: rgb(0, 90, 150);
        text-align: center;
    }
    main > div {
        position: relative;
        margin-left: 2%;
    }
    main > div > ul > li > a {
        text-decoration: none;
        color:black;
    }
    main > div > ul > li > a:hover {
        color: red;
    }
</style>
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
                    <a href="browse_name.php" class="active">Browse Stores by Names</a>
                    <a href="browse_cat.php">Browse Stores by Category </a>
                </div>
            </li>
            <li><a onclick="loggedStatus()">MY ACCOUNT</a></li>
            <li><a href="fees.html">FEES</a></li>
            <li><a href="aboutus.html">ABOUT US</a></li>
            <li><a href="index.html">HOME</a></li>
        </ul>
    </nav>
    </div>
</header>

<main>
    <header>
        <h2>Choose the letter the store name starts with</h2>
    </header>
    <div id="browsename1">
        <ul>
            <li><a class="startletter" href="browse_stores_names.php">A</a></li>
            <li><a class="startletter" href="browse_stores_names.php">B</a></li>
            <li><a class="startletter" href="browse_stores_names.php">C</a></li>
            <li><a class="startletter" href="browse_stores_names.php">D</a></li>
            <li><a class="startletter" href="browse_stores_names.php">E</a></li>
            <li><a class="startletter" href="browse_stores_names.php">F</a></li>
            <li><a class="startletter" href="browse_stores_names.php">G</a></li>
            <li><a class="startletter" href="browse_stores_names.php">H</a></li>
            <li><a class="startletter" href="browse_stores_names.php">I</a></li>
            <li><a class="startletter" href="browse_stores_names.php">J</a></li>
            <li><a class="startletter" href="browse_stores_names.php">K</a></li>
            <li><a class="startletter" href="browse_stores_names.php">L</a></li>
            <li><a class="startletter" href="browse_stores_names.php">M</a></li>

            <li><a class="startletter" href="browse_stores_names.php">N</a></li>
            <li><a class="startletter" href="browse_stores_names.php">O</a></li>
            <li><a class="startletter" href="browse_stores_names.php">P</a></li>
            <li><a class="startletter" href="browse_stores_names.php">Q</a></li>
            <li><a class="startletter" href="browse_stores_names.php">R</a></li>
            <li><a class="startletter" href="browse_stores_names.php">S</a></li>
            <li><a class="startletter" href="browse_stores_names.php">T</a></li>
            <li><a class="startletter" href="browse_stores_names.php">U</a></li>
            <li><a class="startletter" href="browse_stores_names.php">V</a></li>
            <li><a class="startletter" href="browse_stores_names.php">W</a></li>
            <li><a class="startletter" href="browse_stores_names.php">X</a></li>
            <li><a class="startletter" href="browse_stores_names.php">Y</a></li>
            <li><a class="startletter" href="browse_stores_names.php">Z</a></li>
        </ul>
    </div>
</main>

<footer>
    <div id="botnav">
        <nav>
            <ul>
                <li><a href="privacy.html">Privacy Policy</a></li>
                <li><a href="tos.html">Terms of Service</a></li>
                <li><a href="copyright.html">Copyright</a></li>
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
