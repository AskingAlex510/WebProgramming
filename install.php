<html>
<body>
<form method="post" action="install.php">
    Admin Username <input type="text" name="user" required><br>
    Admin Password <input type="password" name="password" required><br>
	Re-type Admin Password <input type='password' name="re" required><br>
    <input type="submit" name="act" value="Enter">
</form>
</body>
</html>
<?php
$admin_credentials = fopen("ac.txt", 'w');
$user = $_POST["user"];
$pswd = $_POST["password"];
$re = $_POST["re"];
	if($pswd !== $re){
	echo "Passwords do not match";
	} else {
	fwrite($admin_credentials, $user);
	$pswd = password_hash('password', PASSWORD_DEFAULT);
	fwrite($admin_credentials, $pswd);
	fclose($admin_credentials);
	echo 'Admin credentials have been set sucessfully';
	}	
?>