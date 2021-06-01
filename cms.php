<!DOCTYPE html>
<?php
//save changed text contents as cookie.
// if(isset($_POST["submit-cpy"])) {
//     $cookie_cpy="copyright";
//     $cookie_cpy_value= $_POST["text-input-copyright"];
//     setcookie($cookie_cpy, $cookie_cpy_value, time()+(60*60*24*7), "/");
// }

// if(isset($_POST["submit-tos"])) {
//     $cookie_tos="TOS";
//     $cookie_tos_value= $_POST["text-input-tos"];
//     setcookie($cookie_tos, $cookie_tos_value, time()+(60*60*24*7), "/");
// }

// if(isset($_POST["submit-privacy"])) {
//     $cookie_privacy="privacy";
//     $cookie_privacy_value= $_POST["text-input-privacy"];
//     setcookie($cookie_privacy, $cookie_privacy_value, time()+(60*60*24*7), "/");
// }

// loggedin for the admin.
// if (isset($_POST['act'])){

//     if (isset($_POST['password']) && $_POST['password'] == 'password') {
//         $_SESSION['loggedin'] = true;
//         header('location: product.php');
// }   else {
//     $error = "invalid credentials";
//     }
// }

// if (isset($error)){
//     echo "<p>$error</p>";
// }
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="navigation.css" type="text/css"/>
    <link rel="stylesheet" href="cms.css" type="text/css"/>
</head>
<body>
    <div id="Header-desc">
        <h1>DASHBOARD</h1>
        <h3>For the administrator to manage and modify informations</h3>
    </div>

    <!-- form to change text contents -->
    <form action="copyright.php" method="post">
    <div class="mod-field">
        <h3>Copyrights</h3>
        <textarea class="text-input" name="text-input-copyright" rows="4" cols="50">
        </textarea> 
    </div>
    <div class="content-submit">
        <input type="submit" name="submit-cpy"/>
    </div>
    
    </form>

    <form action="tos.php" method="post">
    <div class="mod-field">
        <h3>ToS</h3>
        <textarea class="text-input" name="text-input-tos" rows="4" cols="50">
        </textarea> 
    </div>
    <div class="content-submit">
        <input type="submit" name="submit-tos"/>
    </div>
    </form>

    <form action="privacy.php" method="post">
    <div class="mod-field">
        <h3>Copyrights</h3>
        <textarea class="text-input" name="text-input-privacy" rows="4" cols="50">
        </textarea> 
    </div>
    <div class="content-submit">
        <input type="submit" name="submit-privacy"/>
    </div>
    </form>

    <div class="content-submit">
        <h3>Member's images</h3>
        <form enctype="multipart/form-data" method="post" action="aboutus.php">
            <h4>Alexander Joseph Shaw</h4>
            <input type="file" name="alex_profile_image">
            <input type="submit" name="alex-ava" value="Upload">

            <h4>La Uyen Nhi</h4>
            <input type="file" name="nhi-profile_image">
            <input type="submit" name="nhi-ava" value="Upload">

            <h4>Tran Hau Duc</h4>
            <input type="file" name="duc-profile_image">
            <input type="submit" name="duc-ava" value="Upload">

            <h4>Nguyen Nhat Quang</h4>
            <input type="file" name="quang-profile_image">
            <input type="submit" name="quang-ava" value="Upload">
        </form>
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
</body>
</html>