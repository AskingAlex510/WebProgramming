<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Privacy policies</title>
    <link rel="stylesheet" href="navigation.css" type="text/css"/>
    <link rel="stylesheet" href="./Assist/botnav_pages.css" type="text/css">
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
            <li><a href="contacts.php">CONTACTS</a></li>
            <li><a href="faqs.php">FAQS</a></li>
            <li class="dropdown">
                <a class="dropbutton">BROWSE</a>
                <div class="drop-content">
                    <a href="browse_name.php">Browse Stores by Names</a>
                    <a href="browse_cat.php">Browse Stores by Category </a>
                </div>
            </li>
            <li><a href="login.php">MY ACCOUNT</a></li>
            <li><a href="fees.php">FEES</a></li>
            <li><a href="aboutus.php">ABOUT US</a></li>
            <li><a href="index.php">HOME</a></li>
        </ul>
    </nav>
    </div>
</header>

<main>
    <header>
        <h1>PRIVACY POLICY</h1>
    </header>
    <section>
        <p>Pellentesque efficitur vestibulum sapien id pretium. Sed condimentum elementum risus, in feugiat est convallis id. Proin lacinia erat sit amet ligula auctor, ac dignissim nulla elementum. Suspendisse potenti. Proin eget nibh id metus volutpat auctor. Donec vulputate ornare malesuada. Fusce aliquet turpis tellus, sed consectetur nulla porttitor non. Duis porttitor in lacus porttitor sodales. Mauris auctor nisl tortor, ornare pulvinar augue ultricies non. Ut sapien lorem, euismod non hendrerit sed, pulvinar a risus. Nulla molestie risus eget quam dictum, feugiat ullamcorper leo egestas. Pellentesque laoreet velit ex. Etiam vestibulum metus at est dictum, at sollicitudin nulla volutpat. Aliquam nec finibus quam, quis imperdiet mi. Quisque dictum imperdiet imperdiet.</p>
    </section>
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