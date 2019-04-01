<?php

// Initialize the session
session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
    exit;
}

include "includes_config.php";

$search_item = $_POST['item'] ?? '1';
if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$sqlget = "SELECT * FROM item_information WHERE item_name LIKE '%" . $search_item . "%'";
$sqldata = mysqli_query($link, $sqlget) or die("Error: " . mysqli_error($link));

$itemArray = array();
while ($row = mysqli_fetch_array($sqldata)) {
    $temp = array();
    $temp['account_id'] = $row['account_id'];
    $temp['id'] = $row['item_id'];
    $temp['category'] = $row['category'];
    $temp['name'] = $row['item_name'];
    $temp['price'] = $row['price'];
    $temp['item_condition'] = $row['item_condition'];
    $temp['description'] = $row['description'];
    $temp['dir'] = $row['item_url'];
    array_push($itemArray, $temp);
}

?>