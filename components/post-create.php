<?php

include_once 'dbh.inc.php';

$title = $_POST['title'];
$text = $_POST['text'];

$sql = "INSERT INTO posts (posttitle, posttext) VALUES (?, ?);";
$stmt = mysqli_stmt_init($conn);

if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ../signup.php?error=stmtfailed");
    exit();
}

mysqli_stmt_bind_param($stmt, 'ss', $title, $text);
mysqli_stmt_execute($stmt);

header("location: ../index.php?created");