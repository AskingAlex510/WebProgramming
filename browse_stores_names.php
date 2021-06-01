<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Browse page</title>
    <link rel="stylesheet" href="navigation.css" type="text/css"/>
    <link rel="stylesheet" href="./Assist/browse_store_names.css" type="text/css"/>
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
                    <a href="browse_name.php">Browse Stores by Names</a>
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
        <h2>Search results:</h2>
    </header>
    <div class=store1>
        <a href="newstore1.html"><img class="imgstore" src="image\logo-store1.jpg" alt="computer tech's logo"></a>
        <a href="newstore1.html"><p class="storename">Computer tech</p></a>
    </div>
    <div class=store2>
        <a href="newstore1.html"><img class="imgstore" src="image/logo-store4.png" alt="ric's logo"></a>
        <a href="newstore1.html"><p class="storename">RIC</p></a>
    </div>
    <div class=store3>
        <a href="newstore1.html"><img class="imgstore" src="image/logo-store2.png" alt="HOUSEhold's logo"></a>
        <a href="newstore1.html"><p class="storename">HOUSEhold</p></a>
    </div>
    <div class=store3>
        <a href="newstore1.html"><img class="imgstore" src="image/logo-store3.png" alt="richway's logo"></a>
        <a href="newstore1.html"><p class="storename">Richway</p></a>
    </div>
    <div class=store4>
        <a href="newstore1.html"><img class="imgstore" src="image/logo-store5.png" alt="clothing's logo"></a>
        <a href="newstore1.html"><p class="storename">Clothing</p></a>
    </div>
    <div class=store5>
        <a href="newstore1.html"><img class="imgstore" src="image/Quality_Store_Logo_g.png" alt="quality store's logo"></a>
        <a href="newstore1.html"><p class="storename">Quality Store</p></a>
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
