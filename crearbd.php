<?php
$host = "localhost";
$user = "a24danrobmar_projecte0"; 
$pass = "#KN1G9U4+g77z0u}";     
$db   = "a24danrobmar_projecte0";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connexió fallida: " . $conn->connect_error);   
}

$conn->set_charset("utf8");
?>