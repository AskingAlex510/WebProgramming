<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Shopping cart</title>
    <link rel="stylesheet" href="navigation.css" type="text/css"/>
    <link rel="stylesheet" href="./Assist/icon.css" type="text/css"/>
    <link rel="stylesheet" href="./Assist/order.css" type="text/css">
    <link rel="stylesheet" href="./Assist/app.css" type="text/css">
</head>

<body onpageshow="popup()" onload="doShowAll()">

<header>
    <div class="logo-home">
        <a href="./index.php"><img src="./image/mall-logo.jpg" alt="shopping cart creative"></a>
    </div>
    <div id="topnav">
    <nav>
        <ul>
            <li><a class="active" href="order.php">ORDERS</a></li>
            <li><a href="contacts.php">CONTACTS</a></li>
            <li><a href="faqs.php">FAQS</a></li>
            <li class="dropdown">
                <a class="dropbutton">BROWSE</a>
                <div class="drop-content">
                    <a href="browse_name.php">Browse Stores by Names</a>
                    <a href="browse_cat.php">Browse Stores by Category </a>
                </div>
            </li>
            <li><a href="account.php">MY ACCOUNT</a></li>
            <li><a href="fees.php">FEES</a></li>
            <li><a href="aboutus.php">ABOUT US</a></li>
            <li><a href="index.php">HOME</a></li>
        </ul>
    </nav>
    </div>
</header>

<main>
<!--Add the items picked-->
<section>
    <table id="list"></table>
    <label><input type="button" value="Clear" onclick="ClearAll()"></label>
<div class="ordered-items">
    <div class="item">
        <a><img class="product" src="./image/store-product/cat1-product1.png" alt="Acer Aspire 7"></a>
        <h3>Laptop gaming Acer Aspire 7 A715 42G R4ST</h3>
        <h3>Price: </h3><p>18,490,000 VND</p>
        <h3>Quantity:</h3><input value= "1" />
    </div>
    <div class="item">
        <a><img class="product" src="./image/store-product/cat5-product1.jpg" alt="PS5 DualSence"></a>
        <h3>PS5 DualSence Controller</h3>
        <h3>Price: </h3><p>1,990,000 VND</p>
        <h3>Quantity:</h3><input value= "1" />
    </div>
    <div class="item">
        <a><img class="product" src="./image/store-product/cat4-product4.jpg" alt="Gaming DAREU EK87 - Black (Multi-LED)"></a>
        <h3>Gaming DAREU EK87 - Black (Multi-LED)</h3>
        <h3>Price: </h3><p>499,999 VND</p>
        <h3>Quantity:</h3><input value="1" />
    </div>
</div>
<!-- Original HTML codes sourced and adapted for educational purposes:
    https://iframedev.blogspot.com/2020/11/responsive-shopping-cart-in-html-and-css.php -->
</section>
<!--Add the buttons-->
<div class="buttons">
    <div id="Continue">
        <button><a href="product.php">Continue shopping</a></button>
    </div>
    <div id="Order">
        <button><a href="Thankyou.php">Order</a></button>
    </div>
</div>
</body>
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
<script src="cart.js"></script>
