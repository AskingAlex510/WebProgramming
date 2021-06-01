<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>FAQs</title>
    <link rel="stylesheet" href="navigation.css" type="text/css"/>
    <link rel="stylesheet" href="./Assist/faq.css" type="text/css">
    <link rel="stylesheet" href="./Assist/icon.css" type="text/css"/>
    <link rel="stylesheet" href="./Assist/app.css" type="text/css">
</head>

<body onpageshow="popup()">
<header>
    <div class="logo-home">
        <a href="index.php"><img src="./image/mall-logo.jpg" alt="shopping cart creative"></a>
    </div>
    <div id="topnav">
    <nav>
        <ul>
            <li><a href="order.php">ORDERS</a></li>
            <li><a href="contacts.php">CONTACTS</a></li>
            <li><a class="active" href="faqs.php">FAQS</a></li>
            <li class="dropdown">
                <a class="dropbutton">BROWSE</a>
                <div class="drop-content">
                    <a href="browse_name.php">Browse Stores by Names</a>
                    <a href="browse_cat.php">Browse Stores by Category </a>
                </div>
            </li>
            <li><a onclick="loggedStatus()">MY ACCOUNT</a></li>
            <li><a href="fees.php">FEES</a></li>
            <li><a href="aboutus.php">ABOUT US</a></li>
            <li><a href="index.php">HOME</a></li>
        </ul>
    </nav>
    </div>
</header>

<main>
<header id="title">
    <h1>FAQ</h1>
</header>

<div id="faq-section">
    <input type="checkbox" id="faq1" />
    <label for="faq1">What does the Mall do?</label>

    <div class="content">
        <p>We currently offers a variety of stores that you can choose and buy from.</p>
    </div>

    <input type="checkbox" id="faq2" />
    <label for="faq2">Who can I contact for assistance?</label>

    <div class="content">
        <p>We recommend contacting the staffs working at the mall.        </p>
    </div>

    <input type="checkbox" id="faq3" />
    <label for="faq3">What is the pet policy of the mall?</label>

    <div class="content">
        <p>We do not allow pets inside of the mall.</p>
    </div>

    <input type="checkbox" id="faq4" />
    <label for="faq4">What are the operation hours at the mall?</label>

    <div class="content">
        <p>Our mall opens at 8:00am and closes at 10pm daily. And closes during major holidays.</p>
    </div>

    <input type="checkbox" id="faq5" />
    <label for="faq5">Is the mall's Wifi free of charge?</label>

    <div class="content">
        <p>We have Wifi accessible throughout the mall, and it is free of charge.</p>
    </div>

    <input type="checkbox" id="faq6" />
    <label for="faq6">Does the mall have a children's play area?</label>

    <div class="content">
        <p>Yes.</p>
    </div>

    <input type="checkbox" id="faq7" />
    <label for="faq7">Does the mall have a Lost and Found service?</label>

    <div class="content">
        <p>Yes.</p>
    </div>
</div>
</div>
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