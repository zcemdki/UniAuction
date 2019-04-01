<?php
// Initialize the session
session_start();

if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
    exit;
}

function item_panels()
{

    require "includes_config.php";
    $sqlget = "SELECT * FROM item_information WHERE account_id = '" . $_SESSION['account_id'] . "'";
    $sqldata = mysqli_query($link, $sqlget) or die("Error: " . mysqli_error($link));
    $count = 0;
    $j = 0;

    while ($row = mysqli_fetch_array($sqldata)) {
        if ($count == 3) {
            echo "</div>";
            $count = 0;
        }

        if ($count == 0) {
            echo "<div class='row CW-item-row'>";
            echo "<div class='col-lg-1'>";
            echo "</div>";
        }

        echo "<div class=\"col-lg-3 panel panel-default CW-item-panel\">";
        echo "<div class=\"col-lg-5 panel-body\">";
        echo "<img src='" . $row['item_url'] . "' class='item_image2'>";
        echo "</div>";
        echo "<div class=\"col-lg-7 panel-body\">";
        echo "<p Class=\"CW-my-items\" name='item_" . ($j + 1) . "'>Item #: " . ($j + 1) . " " . $row['item_id'] . "</p>";
        echo "<p Class=\"CW-my-items\">" . $row['item_name'] . "</p>";
        echo "<p Class=\"CW-my-items\">" . $row['category'] . "</p>";
        echo "<p Class=\"CW-my-items\">" . $row['price'] . "</p>";
        echo "<p Class=\"CW-my-items\">" . $row['color'] . "</p>";
        echo "<p Class=\"CW-my-items\">" . $row['description'] . "</p>";
        echo "<p Class=\"CW-my-items\">" . $row['item_condition'] . "</p>";
        echo "</div>";
        echo "</div>";

        if ($count < 3) {
            $count++;
        }
        $j++;
    }

    echo "</div>";
    mysqli_close($link);
}
?>