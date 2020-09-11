<?php 

$dsn = "mysql:host=localhost;dbname=chilenj2_revenue";
$username = "chilenj2_root";
$pass = "S@muel9judah";
try {
    $con = new PDO($dsn, $username, $pass);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    session_start();
} catch (Exception $e) {
    print "Error Connecting to Database";
}

