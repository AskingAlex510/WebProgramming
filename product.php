<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Product</title>
    <link rel="stylesheet" href="navigation.css" type="text/css"/>
    <link rel="stylesheet" href="./Assist/product.css">
    <link rel="stylesheet" href="./Assist/app.css" type="text/css">
    <link rel="stylesheet" href="./Assist/icon.css" type="text/css"/>
</head>
<body onpageshow="popup()">
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
            <li><a href="account.php">MY ACCOUNT</a></li>
            <li><a href="fees.php">FEES</a></li>
            <li><a href="aboutus.php">ABOUT US</a></li>
            <li><a href="index.php">HOME</a></li>
         </ul>
     </nav>
</div>
</header>

<main>
    <div class="product-detail">
    <?php
                session_start();
                require 'product_functions.php';

                $id = $_GET['product'];

                $product = get_product($id);
 
        echo'<h1>';
        printf("%s", $product['name']);
        echo'</h1>';
        echo'<div class="image-infor">';
            echo'<div class="manage-image">';
                
                echo'<img class="main-image" src="./image/store-product/cat5-product2.jpg" alt="Laptop gaming Acer Aspire 7 A715 42G R4ST">';
                echo'<div class="show-more-image">';
                    echo'<img src="./image/store-product/cat1-product1-pic2.png" alt="">';
                    echo'<img src="./image/store-product/cat1-product1-pic3.png" alt="">';
                    echo'<img src="./image/store-product/cat1-product1-pic4.png" alt="">';
                    echo'<img src="./image/store-product/cat1-product1-pic5.png" alt="">';
                echo'</div>';
            echo'</div>';
            echo'<ul>';
                echo'<li><h3> Manufacturer : Acer</h3></li>';
                echo'<li><h3> Guarantee : 12 month</h3></li>';
                echo'<li><h3> Price : ';
                printf("%s", $product['price']);
                echo' USD</h3></li>';
                echo'<li><h3> Detailed evaluation : </h3></li>';
                echo'<ol>';
                    echo'<li><h4>BEST LAPTOP GAMING COMPLEX</h4></li>';
                    echo"<p>Acer Aspire 7 2020 A715 42G R4ST with integrated NVIDIA GTX1650 4 GB GDDR6 graphics card launched in 2020, is the best gaming laptop in the segment. Not only that, this version also brings a new neat and sexy design. Aspire 7 2020 is equipped with the most powerful cooling system in the segment, inheriting technology from Acer's more advanced models, with top-notch configuration, allowing users to play games while working at any time.</p>";
                    echo'<li><h4>ULTIMATE GAME EXPERIENCE DESIGN</h4></li>';
                    echo'<p>The system of two radiator fans, 3 full-size copper pipes, and a large-size heatsink helps the Acer Aspire 7 A715 2020 optimize the heat dissipation capacity. The solid design hinge is less shaking when playing, capable of opening 180 degrees to better protect the machine.</p>';
                    echo'<li><h4>3S1 WARRANTY SERVICES</h4></li>';
                    echo"<p>3S1 is Acer's quick warranty for gamers. Aspire 7 enjoy superfast 3S1 Warranty: fast warranty, within 3 days including Saturday and Sunday, more than 3 days 1 for 1 new product with equal or higher value.</p>";
                echo'</ol>';
                echo'<div class="buy-add">';
                    echo'<button class="buy"><a href="">BUY NOW</a></button>';
                    echo'<button class="add" onClick="Addedtocart()">ADD</button>';
                echo'</div>';
            echo'</ul>';
        echo'</div>';
        ?>

    </div>
    
    <div class="technical-parameters">
        <h2>Technical parameters:</h2>
        <table>
            <tr>
                <th>CPU</th>
                <td>AMD Ryzen 5 – 5500U</td>
            </tr>
            <tr>
                <th>RAM</th>
                <td>8GB DDR4 (2x SO-DIMM socket, up to 32GB SDRAM)</td>
            </tr>
            <tr>
                <th>Hard Drive</th>
                <td>256GB PCIe® NVMe™ M.2 SSD</td>
            </tr>
            <tr>
                <th>Graphics card</th>
                <td>NVIDIA GeForce GTX 1650 4GB GDDR6</td>
            </tr>
            <tr>
                <th>Screen</th>
                <td>15.6" FHD (1920 x 1080) IPS, Anti-Glare, 60Hz</td>
            </tr>
            <tr>
                <th>Connector</th>
                <td><ul style="list-style-type: none;">
                    <li>1x USB 3.0</li>
                    <li>1x USB Type C</li>
                    <li>2x USB 2.0</li>
                    <li>1x HDMI</li>
                    <li>1x RJ45</li>
                </ul></td>
            </tr>
            <tr>
                <th>Optical drive</th>
                <td>None</td>
            </tr>
            <tr>
                <th>Audio</th>
                <td>True Harmony; Dolby® Audio Premium</td>
            </tr>
            <tr>
                <th>Read the memory card</th>
                <td>None</td>
            </tr>
            <tr>
                <th>LAN standard</th>
                <td>10/100/1000/Gigabits Base T</td>
            </tr>
            <tr>
                <th>WIFI standard</th>
                <td>Wi-Fi 6(Gig+)(802.11ax) (2x2)</td>
            </tr>
            <tr>
                <th>Bluetooth</th>
                <td>v5.0</td>
            </tr>
            <tr>
                <th>Webcam</th>
                <td>HD Webcam</td>
            </tr>
            <tr>
                <th>Operating system</th>
                <td>Windows 10 Home</td>
            </tr>
            <tr>
                <th>Battery</th>
                <td>4 Cell 48Whr</td>
            </tr>
            <tr>
                <th>Weight</th>
                <td>2.1 kg</td>
            </tr>
            <tr>
                <th>Color</th>
                <td>Black, with keyboard light</td>
            </tr>
            <tr>
                <th>Size</th>
                <td>363.4 x 254.5 x 23.25 (mm)</td>
            </tr>
        </table>
    </div>

    <div class="recommended-product">
        <div class="name-tag">
            <h2>Recommended Products:</h2>
        </div>

        <div class="image-tags">
            <div class="set-collum">
                <a href="./product.php"><img src="./image/store-product/cat1-product2.png" alt=""></a>
                <a href="./product.php"><h5>Laptop gaming Acer Nitro 5 AN515 44 R9JM</h5></a>
            </div>
            <div class="set-collum">
                <a href="./product.php"><img src="./image/store-product/cat1-product3.png" alt=""></a>
                <a href="./product.php"><h5>Laptop ASUS TUF Gaming F15 FX506LH HN002T</h5></a>
            </div>
            <div class="set-collum">
                <a href="./product.php"><img src="./image/store-product/cat1-product4.jpg" alt=""></a>
                <a href="./product.php"><h5>Laptop gaming Acer Nitro 5 AN515 55 5923</h5></a>
            </div>
            <div class="set-collum">
                <a href="./product.php"><img src="./image/store-product/cat1-product5.png" alt=""></a>
                <a href="./product.php"><h5>Laptop Gaming MSI GF63 Thin 10SC 014VN</h5></a>
            </div>
            <div class="set-collum">
                <a href="./product.php"><img src="./image/store-product/cat1-product6.jpg" alt=""></a>
                <a href="./product.php"><h5>Laptop Gaming Asus ROG Strix G G512 IAL013T</h5></a>
            </div>
        </div>
    </div>
</main>

<div id="botnav">
    <nav>
        <ul>
            <li><a href="privacy.php">Privacy Policy</a></li>
            <li><a href="tos.php">Terms of Service</a></li>
            <li><a href="copyright.php">Copyright</a></li>
        </ul>
    </nav>
</div>
<div id="consentPopup" class="hidden">
    <p>This site uses cookies to improve the user experience. By clicking
        here you accept cookies placed by our site.</p> <a id="accept" href="#">Learn More</a>
    <button onclick="consent()">I Consent</button>
</div>
</body>
</html>
<script src="./Assist/app.js"></script>
<script src="cart.js"></script>
