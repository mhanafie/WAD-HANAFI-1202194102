<?php
// $servername = "localhost:3307";
$servername = "localhost";
$username = "root";
$password = "";
$database = "modul3";

$CONNE = new mysqli($servername, $username, $password, $database);
$connect = mysqli_connect($servername, $username, $password, $database);

?>
