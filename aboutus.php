<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About us</title>
    <link rel="stylesheet" href="navigation.css" type="text/css"/>
    <link rel="stylesheet" href="./Assist/aboutUS.css">
    <link rel="stylesheet" href="./Assist/icon.css" type="text/css"/>
    <link rel="stylesheet" href="./Assist/app.css" type="text/css">
</head>

<body  onpageshow="popup()">
>
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
            <li><a onclick="loggedStatus()">MY ACCOUNT</a></li>
            <li><a href="fees.php">FEES</a></li>
            <li><a class="active" href="aboutus.php">ABOUT US</a></li>
            <li><a href="index.php">HOME</a></li>
        </ul>
    </nav>
    </div>
</header>

<main>
    <header>
        <h1>MEET THE TEAM</h1>
    </header>
    <section>
        <div class="about-us">
            <div class="deco-infor">

                <div class="set-row">
                    <img id="memberava1" src="./image/avata-member3.jpg" alt="" style="width:200px;height:200px">
                    <div class="name-infor">
                        <h4>Alexander Joseph Shaw</h4>
                        <ul>
                            <li><strong>Student ID: </strong>3836584</li>
                            <li><strong>Discord: </strong>AskingAlex510#1145</li>
                            <li><strong>University: </strong>RMIT</li>
                        </ul>
                    </div>
                </div>

                <div id="modalwin1" class="modal">
                    <div class="modal-content">
                        <img src="./image/avata-member3.jpg" alt="" style="height:500px">
                        <ul>
                            <li><strong>Full name: </strong>Alexander Joseph Shaw</li>
                            <li><strong>Student ID: </strong>3836584</li>
                            <li><strong>Specialty: </strong>Project Management</li>
                            <li><strong>Brief description: </strong>Information Technology student with experience in Python, Java, SQL, HTML, Javascript, and PHP.</li>
                        </ul>
                    </div>
                </div>

                <div class="set-row">
                    <img id="memberava2" src="./image/avata-member4.jpg" alt="" style="width:200px;height:200px">
                    <div class="name-infor">
                        <h4>La Uyen Nhi</h4>
                        <ul>
                            <li><strong>Student ID: </strong>3878435</li>
                            <li><strong>Discord: </strong>JDPaster#9335</li>
                            <li><strong>University: </strong>RMIT</li>
                        </ul>
                    </div>
                </div>

                <div id="modalwin2" class="modal">
                    <div class="modal-content">
                        <img src="./image/avata-member4.jpg" alt="" style="height:500px">
                        <ul>
                            <li><strong>Full name: </strong>La Uyen Nhi</li>
                            <li><strong>Student ID: </strong>3878435</li>
                            <li><strong>Specialty: </strong>Designer</li>
                            <li><strong>Brief description: </strong>Starter Information Technology student at RMIT University with basic knowledge of Web Programming, Python and SQL.</li>
                        </ul>
                    </div>
                </div>

                <div class="set-row">
                    <img id="memberava3" src="./image/avata-member2.png" alt="" style="width:200px;height:200px">
                    <div class="name-infor">
                        <h4>Tran Hau Duc</h4>
                        <ul>
                            <li><strong>Student ID: </strong>3877327</li>
                            <li><strong>University: </strong>RMIT</li>
                            <li><strong>Bachelor: </strong> BP162</li>
                        </ul>
                    </div>
                </div>

                <div id="modalwin3" class="modal">
                    <div class="modal-content">
                        <img src="./image/avata-member2.png" alt="" style="height:500px">
                        <ul>
                            <li><strong>Full name: </strong>Tran Hau Duc</li>
                            <li><strong>Student ID: </strong>3877327</li>
                            <li><strong>Specialty: </strong>Coder</li>
                            <li><strong>Brief description: </strong>RMIT University student with basic knowledge of HTML, CSS, Javascript, Python and SQL</li>
                        </ul>
                    </div>
                </div>

                <div class="set-row">
                    <img id="memberava4" src="./image/avata-member.jpg" alt="" style="width:200px;height:200px">
                    <div class="name-infor">
                        <h4>Nguyen Nhat Quang</h4>
                        <ul>
                            <li><strong>Student ID: </strong>3863937</li>
                            <li><strong>University: </strong>RMIT</li>
                        </ul>
                    </div>
                </div>

                <div id="modalwin4" class="modal">
                    <div class="modal-content">
                        <img src="./image/avata-member.jpg" alt="" style="height:500px">
                        <ul>
                            <li><strong>Full name: </strong>Nguyen Nhat Quang</li>
                            <li><strong>Student ID: </strong>3863937</li>
                            <li><strong>Specialty: </strong></li>
                            <li><strong>Brief description: </strong></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
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
<script src="./Assist/aboutus.js"></script>
<script src="./Assist/app.js"></script>