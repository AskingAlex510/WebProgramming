<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Browse by category</title>
    <link rel="stylesheet" href="navigation.css" type="text/css"/>
    <link rel="stylesheet" href="./Assist/browse_cat.css" type="text/css"/>
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
                    <a href="browse_cat.php" class="active">Browse Stores by Category </a>
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

<?php
    include 'browse_stores_names.php';

    function store_category($p1, $p2) {
        return strcmp('Laptop', 'Laptop')
    }

    $mapping = [
        'Laptop' => 'store_category',
    ]

    $selected_func = 'store_category';
?>

<main>
    <header>
        <h1>SEARCH BASED ON CATEGORY</h1>
    </header>
    <div class=selector>
        <label for="category">Choose a Category:</label>
        <select name="category" id="category">
            <option value="Laptop">Laptop Gaming</option>
            <option value="PC gaming">PC Gaming</option>
            <option value="monitor">Monitor</option>
            <option value="keyboard">Keyboard</option>
            <option value="console">Console</option>
        </select>
    <button type="button"><a href="browse_stores_names.php">Search</a></button>
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
