<?php

$Servername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "instagram";

$conn = mysqli_connect($Servername, $dbUsername, $dbPassword, $dbName);

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_errno());
};