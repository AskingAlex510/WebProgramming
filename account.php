<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Account</title>
    <link rel="stylesheet" href="navigation.css" type="text/css"/>
    <link rel="stylesheet" href="./Assist/icon.css" type="text/css"/>
    <link rel="stylesheet" href="./Assist/fee.css" type="text/css"/>
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
            <li><a href="faqs.php">FAQS</a></li>
            <li class="dropdown">
                <a class="dropbutton">BROWSE</a>
                <div class="drop-content">
                    <a href="browse_name.php">Browse Stores by Names</a>
                    <a href="browse_cat.php">Browse Stores by Category </a>
                </div>
            </li>
            <li><a class="active" onclick="loggedStatus()">MY ACCOUNT</a></li>
            <li><a href="fees.php">FEES</a></li>
            <li><a href="aboutus.php">ABOUT US</a></li>
            <li><a href="index.php">HOME</a></li>
        </ul>
    </nav>
    </div>
</header>

<main>
    <style>


        #profile_picture {
            float: right;
            width: 30%;
            margin: 20px;
            /* padding: 50px */
        }

        #info {
            float:left;
            width: 40%;
            margin: 30px;
        }

        #logout {
            clear:both;
            color:rgb(0, 90, 150);
            float: right;
            width: 30%;
            font-size: 24px;
            margin-left:20px;
            margin-top: 10px;
        }

        #logbutton:hover {
            color: red;
            text-decoration: underline;
        }
    </style>

    <h1 align="center">ACCOUNT DETAIL</h1>
    <div id="profile_picture">
    <h2>Profile Picture</h2><br>
    <img src="./image/default_pic.jpg" alt="Users Profile Picture">
    <!-- image soursed  and used for educational purposes: 
    https://thepeakid.com/peak-coeur-dalene/personal-training/default-profile-picture/ -->
    </div>
    <div align="center" id="info">
        <h2>User's info</h2><br>
        <h3>Full Name:</h3> 
        <p>Username</p><br>
        <h3>E-Mail Address:</h3>
        <p id = "logMail"></p><br>
        <h3>Phone Number:</h3>
        <p>000.000-0000</p><br>
    </div>
    <div id="logout">
       <a id="logbutton" onclick="logout()" ><h4>Logout</h4></a>
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
<script>
    document.getElementById("logMail").innerHTML = localStorage.getItem("log-mail");
    function logout() {
        localStorage.removeItem("log-mail");
        window.location = "login.php";
    }
</script>