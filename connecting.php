<?php
$hostName = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName ="użytkownicyserwera";
$connection = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);

if(!$connection){
    die("Wystąpił błąd łączenia");
}
?>