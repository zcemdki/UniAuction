<?php
session_start();
include "includes_config.php";

function generateRandomString7($length = 7)
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

If (isset($_POST['checkout'])) {
    $orderCode = generateRandomString7();
    $sqlget3 = "SELECT * FROM cart WHERE userId = '" . $_SESSION['account_id'] . "'";
    $sqldata3 = mysqli_query($link, $sqlget3) or die("Error: " . mysqli_error($link));

    $itemArray = array();
    while ($row = mysqli_fetch_array($sqldata3)) {
        $temp = array();
        $temp['id'] = $row['id'];
        $temp['userId'] = $row['userId'];
        $temp['itemId'] = $row['itemId'];
        //$sqlget4 = "INSERT INTO transaction_history (account_id, item_id) VALUES (" . $_SESSION['account_id'] . ", " . $row['itemId'] . ")";
        //$sqldata4 = mysqli_query($link, $sqlget4) or die("Error: " . mysqli_error($link));
        array_push($itemArray, $temp);
    }


    for ($i = 0; $i < sizeof($itemArray); $i++) {
        $sqlget4 = "INSERT INTO transaction_history (order_code, account_id, item_id, transaction_date, transaction_time) VALUES ('" . $orderCode . "', " . $_SESSION['account_id'] . ", " . $itemArray[$i]['itemId'] . ", CURDATE(), CURTIME())";
        $sqldata4 = mysqli_query($link, $sqlget4) or die("Error: " . mysqli_error($link));
    }

    $sqlget5 = "DELETE FROM cart WHERE userId = '" . $_SESSION['account_id'] . "'";
    $sqldata5 = mysqli_query($link, $sqlget5) or die("Error: " . mysqli_error($link));

}
