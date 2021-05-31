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
                <a class="nav-button" href="#">Product</a>
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
                        <a href="./pro_new.php">Newest First</a>
                        <a href="./pro_old.php">Oldest First</a>
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

             <!--START MAIN BODY-->
             <section class="product">
                 <header>Category: Keyboard</header>
                 <div class="main-layout">
                     <div class="product-store">
                         <a href="./product.php"><img class="image-product" src="./image/store-product/cat4-product1.jpg" alt=""></a>
                         <a href="./product.php"><h3 class="name-product"> Gaming DareU LK145 USB</h3></a>
                         <p class="price-product"><Strong>Price:</Strong> 340,000 VND</p>
                         <p><Strong>Update:</Strong> 12/03/2021</p>
                     </div>
                     <div class="product-store">
                         <a href="./product.php"><img class="image-product" src="./image/store-product/cat4-product2.jpg" alt=""></a>
                         <a href="./product.php"><h3 class="name-product">Fuhlen G87L</h3></a>
                         <p class="price-product"><Strong>Price:</Strong> 440,000 VND</p>
                         <p><Strong>Update:</Strong> 13/04/2021</p>
                     </div>
                     <div class="product-store">
                         <a href="./product.php"><img class="image-product" src="./image/store-product/cat4-product3.jpg" alt=""></a>
                         <a href="./product.php"><h3 class="name-product">Rapoo V500 Alloy</h3></a>
                         <p class="price-product"><Strong>Price:</Strong> 450,000 VND</p>
                         <p><Strong>Update:</Strong> 28/02/2021</p>
                     </div>
                     <div class="product-store">
                         <a href="./product.php"><img class="image-product" src="./image/store-product/cat4-product4.jpg" alt=""></a>
                         <a href="./product.php"><h3 class="name-product">Gaming DAREU EK87 - Black (Multi-LED)</h3></a>
                         <p class="price-product"><Strong>Price:</Strong> 499,000 VND</p>
                         <p><Strong>Update:</Strong> 13/04/2021</p>
                     </div>
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
