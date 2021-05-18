<?php
    session_start();
    //take input from registration from
    $registered_user = fopen(user.csv, 'w');
    //$id = $_POST[""];
    //fwrite($registered_user, $id);
    $email = $_POST["mail"];
    fwrite($registered_user, $email);
    $phone = $_POST["phone"];
    fwrite($registered_user, $phone);
    $pswd = $_POST["pswd"];
    fwrite($registered_user, $pswd);
    $name_first = $_POST["name_first"];
    fwrite($registered_user, $name_first);
    $name_last = $_POST["name_last"];
    fwrite($registered_user, $name_last);
    $address = $_POST["address"];
    fwrite($registered_user, $address);
    $city = $_POST["city"];
    fwrite($registered_user, $city);
    $zip = $_POST["zip"];
    fwrite($registered_user, $zip);
    $country = $_POST["country"];
    fwrite($registered_user, $country);

    fwrite($registered_user, $user);
    $pswd = password_hash('password', PASSWORD_DEFAULT);
    fwrite($admin_credentials, $pswd);
    fclose($admin_credentials);
    echo 'You have been successfully registered';

?>
