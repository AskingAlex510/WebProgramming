<?php
$id = $_GET['store'];//Get URL id
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Computer Tech</title>
    <link rel="stylesheet" href="./Assist/store1.css">
    <link rel="stylesheet" href="./Assist/app.css" type="text/css">
</head>
<body onpageshow="popup()">

    <!--START HEADER-->
    <header>
        <div class="logo-store">
            <a href="./newstore1.php"><img src="./image/logo-store1.jpg" alt="Computer Tech"></a>
        </div>

        <div class="search-bar">
            <form action="#" method="get">
                <input type="text" type="submit" placeholder="Search" name="search">
            </form>
        </div>

    </header>
    <!--END HEADER-->

    <!--START NAV-->
    <nav>
        <div class="nav-for-store">
            <div class="nav-button">
                <a href="index.php">Home Page</a>
            </div>
            <div class="nav-button">
                <a href="./aboutus.php">About Us</a>
            </div>
            <div class="nav-button">
                <a href="./contacts.php">Contacts Us</a>
            </div>
            <div class="dropdown-menu">
                <?php
                    echo"<a class='nav-button' href='#?store=$id'>";
                    echo'Product</a>';
                ?>
                <div class="dropdown-content">
                    <a href="#">Browse Products by Category</a>
                    <div class="category-product">
                            <a href="./pro1_laptop_gaming.php">Laptop Gaming</a>
                            <a href="./pro2_pc_gaming.php">PC Gaming</a>
                            <a href="./pro3_monitors.php">Monitors</a>
                            <a href="./pro4_keyboard.php">Keyboard</a>
                            <a href="./pro5_console.php">Console</a>
                    </div>
                </div>
                <div class="category-time">
                    <a  href="#">Browse Products by Created Time</a>
                    <div class="category-product-time">
                        <?php
                            echo"<a href='./pro_new.php?store=$id'>";
                            echo'Newest First</a>';
                            echo"<a href='./pro_old.php?store=$id'>";
                            echo'Oldest First</a>';
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!--END NAV-->

        <!--START ASIDE LEFT AND RIGHT-->
        <aside class="left">
           <p></p>
        </aside>
        <aside class="right">
            <p></p>
        </aside>
        <!--END ASIDE LEFT AND RIGHT-->

        <main class="main">
        <!--START MAIN BODY-->
            <section class="product">
                <header>NEW PRODUCTS</header>
                <div class="main-layout">
            <?php
            session_start();
            require 'product_functions.php';

            $product = read_all_products();
            $check = 0;//Element use to change the picture
            $count = 0;//Count to create the number of element

            //Sort function base on created_time
            function cmp_date_store($s1, $s2) {
            return strtotime($s2['created_time']) - strtotime($s1['created_time']);
            }

            //Sort
            usort($product, 'cmp_date_store');
            
            //Display correct new product base on sort order and id
            foreach ($product as $p){
                if($p['store_id'] == $id)//Id check
                { 
                    if ($count < 5) {
                        $idp = $p['id'];//Get id product 
                        if($check == 0){  
                            echo'<div class="product-store">';          
                            echo"<a href='./product.php>?product=$idp'>";
                            echo'<img class="image-product" src="./image/store-product/cat5-product2.jpg" alt=""></a>';//Picture for product 1
                            $check++;
                        }
                        else{
                            echo'<div class="product-store">';          
                            echo"<a href='./product.php?product=$idp'>";
                            echo'<img class="image-product" src="./image/store-product/cat4-product4.jpg" alt=""></a>';//Picture for product 2
                            $check = 0;
                        }
                        echo"<a href='./product.php?product =$idp'>";
                        echo'<h3 class="name-product">';
                        printf("%s", $p['name']); //Display name of product
                        echo'</h3></a>';
                        echo'<p class="price-product"><Strong>Price: </Strong>'; 
                        printf("%s", $p['price']);//Display price of product
                        echo' USD</p>'; 
                        printf("%s", $p['created_time']);//Display created time of product
                        echo'</div>';
                        $count++;//Make count value increase 1 per loop
                    }
                }
            }
            ?>
</div>
</section>

            <section class="product">
                <header>FEATURED PRODUCTS</header>
                <div class="main-layout">
                <?php
            $check = 0;//Element use to change the picture
            $count = 0;//Count to create the number of element

            //Display correct featured product base on id and featured 'TRUE'
            foreach ($product as $p){
                if($p['store_id'] == $id)//Id check
                { 
                    if ($p['featured_in_store'] == 'TRUE') {
                        $idp = $p['id'];//Get id product 
                        if($check == 0){  
                            echo'<div class="product-store">';          
                            echo"<a href='./product.php>?product=$idp'>";
                            echo'<img class="image-product" src="./image/store-product/cat5-product2.jpg" alt=""></a>';//Picture for product 1
                            $check++;
                        }
                        else{
                            echo'<div class="product-store">';          
                            echo"<a href='./product.php?product=$idp'>";
                            echo'<img class="image-product" src="./image/store-product/cat4-product4.jpg" alt=""></a>';//Picture for product 2
                            $check = 0;
                        }
                        echo"<a href='./product.php?product=$idp'>";
                        echo'<h3 class="name-product">';
                        printf("%s", $p['name']); //Display name of product
                        echo'</h3></a>';
                        echo'<p class="price-product"><Strong>Price: </Strong>'; 
                        printf("%s", $p['price']);//Display price of product
                        echo' USD</p>'; 
                        printf("%s", $p['created_time']);//Display created time of product
                        echo'</div>';
                        $count++;//Make count value increase 1 per loop
                    }
                }
            }
            ?>
                </div>
            </section>
        </main>
        <!--END MAIN BODY-->

        <!--START WITH FOOTER-->
    <footer>
        <nav class="bot-nav">
                <section><a href="privacy.php">Privacy Policy</a></section>
                <section><a href="tos.php">Terms of Service</a></section>
                <section><a href="copyright.php">Copyright</a></section>
        </nav>
    </footer>
    <div id="consentPopup" class="hidden">
        <p>This site uses cookies to improve the user experience. By clicking
            here you accept cookies placed by our site.</p> <a id="accept" href="#">Learn More</a>
        <button onclick="consent()">I Consent</button>
    </div>
</body>
</html>
<script src="./Assist/app.js"></script>
