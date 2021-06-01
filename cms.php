<!DOCTYPE html>
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
