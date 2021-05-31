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
            <li><a href="order.php">ORDERS</a></li>
            <li><a href="contacts.php">CONTACTS</a></li>
            <li><a href="faqs.php">FAQS</a></li>
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
            <li><a class="active" href="index.php">HOME</a></li>
        </ul>
    </nav>
    </div>
</header>

<main>
    <section align="center"><header>NEW STORES</header></section>
    <div class="scroll_auto">
        <ul class="scroll_content">
        <?php
            //Working on id
            session_start();
            require 'stores_function.php';
            $stores = read_all_stores();

            //Function use to sort
            function cmp_date_store($s1, $s2) {
                return strtotime($s2['created_time']) - strtotime($s1['created_time']);
              }

            //Sort base on created-date
            usort($stores, 'cmp_date_store');
            
            //Display the the stores base on the sort order and get the store's ID
            $count = 0;
            foreach ($stores as $s){ 
                if ($count >= 10) {
                    break;
                }
                $id = $s['id']; //Get the store's ID            
                echo'<li>';
                echo"<a href='newstore1.php?store=$id'>";
                echo'<img src="./image/logo-store1.jpg" alt="Computer Tech" id="s1"></a>';
                echo'<div>';
                echo'<p>';
                printf("%s", $s['name']); //Display the name of the suitable store
                echo'</p>';
                echo'</div>';
                echo'</li>'; 
                $count++;
            }
            ?>
        </ul>
    </div>

    <section align="center"><header>NEW PRODUCTS</header></section>
    <div class="scroll_auto">
        <ul class="scroll_content1">
        <?php
        //Working on ID
        require 'product_functions.php';
        $products = read_all_products();

        //Sort function
            function cmp_date_product($p1, $p2) {
                return strtotime($p2['created_time']) - strtotime($p1['created_time']);
              }

            usort($products, 'cmp_date_product');//Sort base on created_time

            $check = 1;//Element use to change the picture
            $count = 0;//Count to create the number of element
            foreach ($products as $p){
                if($count < 10){
                    $id = $p['id'];
                    echo'<li>';
                    if($check == 1 )//Picture for product 1
                    {
                        echo"<a href='./product.php?product=$id'>";
                        echo'<img src="./image/store-product/cat5-product2.jpg"  alt="product jpg" id="p1"></a>';
                        $check++;
                        }
                    else //Picture for product 2
                    {
                        echo"<a href='./product2.php?product=$id'>";
                        echo'<img src="./image/store-product/cat4-product4.jpg"  alt="product jpg" id="p2"></a>';
                        $check = 1;
                        } 
                    echo'<div>';
                    echo'<p>';
                    printf("%s", $p['name']);//Display the name of the suitable product
                    echo'</p>';
                    echo'</div>';
                    echo'</li>'; 
                    $count++;//Make count value increase 1 per loop
                }
            }
            ?>
        </ul>
    </div>

    <section align="center"><header>FEATURED STORES</header></section>
    <div class="display_auto">
        <div class="display_content" >
            <?php

            $count = 0;//Count to create the number of element

            //Loop for create 10 featured stores
            foreach ($stores as $s){
                if($s['featured'] == 'TRUE')//Only show the 'TRUE' fetured store
                {
                    if($count < 10)//Only show 10 featured stores
                    {
                        $id = $s['id']; //Get the value from array
                        echo"<a href='./newstore1.php?store=$id'>";//Show id on URL
                        echo'<img src="./image/logo-store1.jpg"  alt="Computer Tech" id="f1">';
                        echo'<p>';
                        printf("%s", $s['name']);//Display the name of the suitable product
                        echo'</p>';
                        echo'</a>';
                        $count++; //Make count value increase 1 per loop
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

            $check = 1;//Element use to change the picture
            $count = 0;//Count to create the number of element

            foreach ($products as $p){
                if($p['featured_in_mall'] == 'TRUE')//Only show the 'TRUE' fetured product
                {
                    if($count < 10)//Only show 10 featured stores
                    {
                        $id = $p['id'];//Get the value from array
                        if($check == 1 ){
                            echo"<a href='./product.php?product=$id'>";//Show id on URL
                            echo'<img src="./image/store-product/cat5-product2.jpg"  alt="product jpg" id="p1">';
                            echo'<p>';
                            printf("%s", $p['name']);//Display the name of the suitable product
                            echo'</p>';
                            echo'</a>';
                            $check++;
                            }
                        else{
                            echo"<a href='./product2.php?product=$id'>";
                            echo'<img src="./image/store-product/cat4-product4.jpg"  alt="product jpg" id="p2">';
                            echo'<p>';
                            printf("%s", $p['name']);//Display the name of the suitable product
                            echo'</p>';
                            echo'</a>';
                            $check = 1;
                            } 
                    $count++;//Make count value increase 1 per loop
                    }
                }
            }
            ?>        
        </div>
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
                <li><a href="privacy.php">Privacy Policy</a></li>
                <li><a href="tos.php">Terms of Service</a></li>
                <li><a href="copyright.php">Copyright</a></li>
            </ul>
        </nav>
    </div>
</footer>
<script src="./Assist/scroll-auto.js"></script>
</body>
</html>
<script src="./Assist/app.js"></script>

