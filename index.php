<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>home</title>
    <link rel="stylesheet" href="navigation.css" type="text/css"/>
    <link rel="stylesheet" href="./Assist/mall-home.css">
    <link rel="stylesheet" href="./Assist/icon.css" type="text/css">
    <link rel="stylesheet" href="./Assist/app.css" type="text/css">
</head>

<body  onpageshow="popup()">
<header>
    <div class="logo-home">
        <a href="./index.php"><img src="./image/mall-logo.jpg" alt="shopping cart creative"></a>
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
            <li><a href="aboutus.html">ABOUT US</a></li>
            <li><a class="active" href="index.html">HOME</a></li>
        </ul>
    </nav>
    </div>
</header>

<main>
    <section align="center"><header>NEW STORES</header></section>
    <div class="scroll_auto">
        <ul class="scroll_content">
        <?php
            $fp = fopen('stores.csv', 'r');
            while ($i = fgetcsv($fp)){
                if($i[4] == 'TRUE'){
                    echo'<li>';
                    echo'<a href="./newstore1.html"><img src="./image/logo-store1.jpg" alt="Computer Tech" id="s1"></a>';
                    echo'<div>';
                    echo'<p>';
                    printf("%s", $i[1]);
                    echo'</p>';
                    echo'</div>';
                    echo'</li>'; 
                }
            }
            ?>
        </ul>
    </div>

    <section align="center"><header>NEW PRODUCTS</header></section>
    <div class="scroll_auto">
        <ul class="scroll_content1">
        <?php
            $fp = fopen('products.csv', 'r');
            $check = 1;
            $count = 0;
            while ($i = fgetcsv($fp)){
                if($i[5] == 'TRUE'){
                    if($count < 10){
                        echo'<li>';
                        if($check == 1 ){
                            echo'<a href="./product.html"><img src="./image/store-product/cat5-product2.jpg"  alt="product jpg" id="p1"></a>';
                            $check++;
                            }
                        else{
                            echo'<a href="./product2.html"><img src="./image/store-product/cat4-product4.jpg"  alt="product jpg" id="p2"></a>';
                            $check = 1;
                            } 
                        echo'<div>';
                        echo'<p>';
                        printf("%s", $i[1]);
                        echo'</p>';
                        echo'</div>';
                        echo'</li>'; 
                        $count++;
                    }
                }
            }
            ?>
        </ul>
    </div>
    <section align="center"><header>FEATURED STORES</header></section>
    <div class="display_auto">
        <div class="display_content" >
            <?php
            $fd = fopen('stores.csv','r');
            $count = 0;
            while($i = fgetcsv($fd)){
                if($i[4] == 'TRUE'){
                    if($count < 5){
                        echo'<a href="./newstore1.html">';
                        echo'<img src="./image/logo-store1.jpg"  alt="Computer Tech" id="f1">';
                        echo'<p>';
                        printf("%s", $i[1]);
                        echo'</p>';
                        echo'</a>';
                        $count++;
                    }
                }
            }
            ?>
        </div>
    </div>
    <section align="center"><header>FEATURED PRODUCTS</header></section>
    <div class="display_auto">
        <div class="display_content" >
        <?php
            $fp = fopen('products.csv', 'r');
            $check = 1;
            $count = 0;
            while ($i = fgetcsv($fp)){
                if($i[5] == 'TRUE'){
                    if($count < 5){
                        if($check == 1 ){
                            echo'<a href="./product.html"><img src="./image/store-product/cat5-product2.jpg"  alt="product jpg" id="p1">';
                            echo'<p>';
                            printf("%s", $i[1]);
                            echo'</p>';
                            echo'</a>';
                            $check++;
                            }
                        else{
                            echo'<a href="./product2.html"><img src="./image/store-product/cat4-product4.jpg"  alt="product jpg" id="p2">';
                            echo'<p>';
                            printf("%s", $i[1]);
                            echo'</p>';
                            echo'</a>';
                            $check = 1;
                            } 
                    $count++;
                    }
                }
            }
            ?>        </div>
    </div>
</main>

<div id="consentPopup" class="hidden">
    <p>This site uses cookies to improve the user experience. By clicking
    here you accept cookies placed by our site.</p> <a id="accept" href="#">Learn More</a>
    <button onclick="consent()">I Consent</button>
</div>

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
<script src="./Assist/scroll-auto.js"></script>
</body>
</html>
<script src="./Assist/app.js"></script>

