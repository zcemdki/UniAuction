<?php

session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
    exit;
}

include "includes_config.php";

if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$sqlget = "SELECT * FROM cart WHERE userId = '" . $_SESSION['account_id'] . "'";
$sqldata = mysqli_query($link, $sqlget) or die("Error: " . mysqli_error($link));

$itemArray = array();
while ($row = mysqli_fetch_array($sqldata)) {
    $temp = array();
    $temp['id'] = $row['id'];
    $temp['userId'] = $row['userId'];
    $temp['itemId'] = $row['itemId'];
    array_push($itemArray, $temp);
}

for ($i = 0; $i < sizeof($itemArray); $i++) {
    $sqltemp = array();
    $sqltemp[$i] = $itemArray[$i]['itemId'];
}
?>