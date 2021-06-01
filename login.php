<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>login</title>
    <link rel="stylesheet" href="navigation.css" type="text/css"/>
    <link rel="stylesheet" href="./Assist/icon.css" type="text/css"/>
    <link rel="stylesheet" href="./Assist/register.css" type="text/css"/>
    <link rel="stylesheet" href="./Assist/app.css" type="text/css">
</head>

<body onpageshow="popup()">

<header>
    <div class="logo-home">
        <a href="index.html"><img src="./image/mall-logo.jpg" alt="shopping cart creative"></a>
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
                    <a href="browse_name.php">Browse Stores by Names</a>
                    <a href="browse_cat.php">Browse Stores by Category </a>
                </div>
            </li>
            <li><a href="login.html">MY ACCOUNT</a></li>
            <li><a href="fees.html">FEES</a></li>
            <li><a href="aboutus.html">ABOUT US</a></li>
            <li><a href="index.html">HOME</a></li>
        </ul>
    </nav>
    </div>
</header>

<main>
    <header>
        <h1>LOG IN</h1>
    </header>
    <section>
        <form id="login" action="login.php">
            <label for="mail">E-Mail:</label><br>
            <input type="email" id="mail"><br>
            <label for="pswd">Password:</label><br>
            <input type="password" id="pswd"><br>
            <button type="reset" form="login" value="reset" >Clear</button>
            <button type="Submit" form="login" value="submit" onclick="login()">Submit</button><br>
            <a href="forgot.html">Forgot Password</a><br>
            <a href="register.html">Register</a><br>
        </form>
    </section>
</main>

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
<div id="consentPopup" class="hidden">
    <p>This site uses cookies to improve the user experience. By clicking
        here you accept cookies placed by our site.</p> <a id="accept" href="#">Learn More</a>
    <button onclick="consent()">I Consent</button>
</div>
</body>
</html>
<script src="./Assist/app.js"></script>
<script src="./Assist/login.js"></script>

<?php
    //session_start();
    //if (isset($_POST['act'])) {
        //if(isset($_POST['password']) && $_POST['password'] == 'p4ssw0rd') {
            //$_SESSION['loggedin'] = true;
          //  header('locate: add_product.php');
        //} else {
        //    $error = 'Invalid username/password';
      //  }
    //}
    //if (isset($error)){
      //  echo '<p>$error</p>';
    //}

//suppress error reporting 
	error_reporting(E_ERROR | E_PARSE);

// take user input as array
$email = $_POST['mail'];
$password = $_POST['pswd'];
$creds = array('mail' => $_POST['mail'],
		  'pswd' => $_POST['pswd']
		  );
//check credentials against list  
$check = function($email, $password) use ($creds) {
	foreach($creds as $cred)
		if($cred[10] == $email && $cred[12] == $password)
		echo ("User Exists");	
		return true;
	
	echo ("User does not exist");
	return false;
	};

$check($email, $password);


// get list of registered users as array
function get_creds($file) {
	$path = fopen($file, 'r');
	while ($line = fgetcsv($path)) {
		$lines[] = $line;
	}
	fclose($path);
	
	return $lines;
}

$creds = get_creds('user.csv')
?>
