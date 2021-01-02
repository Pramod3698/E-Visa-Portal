<?php 

$dbServername = "localhost:3606";
$dbUsername = "root";
$dbPassword = "";
$dbName = "evisa";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

if(!$conn) {
    die("Connection Failed: ".mysqli_connect_error());
}