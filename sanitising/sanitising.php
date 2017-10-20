<?php
if(isset($_REQUEST["email"])){
    $email = filter_var($_REQUEST["email"], FILTER_SANITIZE_EMAIL);
    $email=substr($email,0,50);// no longer than 50.
    echo "EMAIL: ".$email."<br>";

    $url = filter_var($_REQUEST['url'], FILTER_SANITIZE_ENCODED);
    echo "URL: ".$url."<br>";

}
?>