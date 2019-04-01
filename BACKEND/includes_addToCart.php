<?php

session_start();
include "includes_config.php";

if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$id = $_POST['id'];
$userId = $_SESSION['account_id'];

$sql = "INSERT INTO cart (userId, itemId) VALUES (?, ?)";
if ($stmt = mysqli_prepare($link, $sql)) {
    mysqli_stmt_bind_param($stmt, "ii", $userId, $id);
    if (mysqli_stmt_execute($stmt)) {
        return true;
    } else {
        return false;
    }
}
?>