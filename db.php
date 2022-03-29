<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "employee";

$mysqli = new mysqli($servername, $username,$password,$dbname);

if(!$mysqli){
    die("Connection failed: " . mysqli_connect_error());
}

?>