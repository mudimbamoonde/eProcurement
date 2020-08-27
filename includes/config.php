<?php 

$dsn = "mysql:host=localhost;dbname=revenue";
$username = "root";
$pass = "";
try {
    $con = new PDO($dsn, $username, $pass);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    session_start();
} catch (Exception $e) {
    print "Error Connecting to Database";
}

