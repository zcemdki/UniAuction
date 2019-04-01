<?php
// Initialize the session
session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
    exit;
}
require "includes_config.php";
$sqlget = "SELECT * FROM item_information WHERE account_id = '" . $_SESSION['account_id'] . "'";
$sqldata = mysqli_query($link, $sqlget) or die("Error: " . mysqli_error($link));
$item_id = array();
$item_name = array();
$category = array();
$price = array();
$color = array();
$description = array();
$item_condition = array();
$i = 1;

function get_options () {
    global $sqldata;
    global $i, $item_id, $item_name, $category, $price, $color, $description, $item_condition;
    while ($row = mysqli_fetch_array($sqldata)) {

        $item_id[$i] = $row['item_id'];
        $item_name[$i] = $row['item_name'];
        $category[$i] = $row['category'];
        $price[$i] = $row['price'];
        $color[$i] = $row['color'];
        $description[$i] = $row['description'];
        $item_condition[$i] = $row['item_condition'];
        $i++;
    }

    foreach($item_name as $value){
        echo "<option value='" . $value . "'>" . $value . "</option>";
    }

}

$item_id_input = $item_name_input = $category_input = $price_input = $color_input = $description_input = $item_condition_input = "";
$item_name_err = $category_err = $price_err = $color_err = $description_err = $item_condition_err = "";

// Processing form data when form is submitted
if(isset($_POST["enter"])){

    $item_id_input = trim($_POST['item_id']);

    if(empty(trim($_POST["item_name"]))){
        $item_name_err = "Please enter a item name.";
    } else{
        $item_name_input = trim($_POST["item_name"]);
    }

    if(empty(trim($_POST["category"]))){
        $category_err = "Please enter a category.";
    } else{
        $category_input = trim($_POST["category"]);
    }

    if(empty(trim($_POST["price"]))){
        $price_err = "Please enter a price.";
    } else{
        $price_input = trim($_POST["price"]);
    }

    // Validate password
    if(empty(trim($_POST["color"]))){
        $color_err = "Please enter a color.";
    } else{
        $color_input = trim($_POST["color"]);
    }

    // Validate confirm password
    if(empty(trim($_POST["description"]))){
        $description_err = "Please write a description of the item.";
    } else{
        $description_input = trim($_POST["description"]);
    }

    // Validate confirm password
    if(empty(trim($_POST["item_condition"]))){
        $item_condition_err = "Please indicate condition of item.";
    } else{
        $item_condition_input = trim($_POST["item_condition"]);
    }


    // Check input errors before inserting in database
    if(empty($item_name_err) && empty($category_err) && empty($price_err) && empty($color_err) && empty($description_err) && empty($item_condition_err)){

        // Prepare an insert statement
        $sql = "UPDATE item_information SET item_name=?, category=?, price=?, color=?, description=?, item_condition=? WHERE item_id=?";

        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssisssi",$param_item_name, $param_category, $param_price, $param_color, $param_description, $param_item_condition, $param_item_id);

            // Set parameters
            $param_item_id = $item_id_input;
            $param_item_name = $item_name_input;
            $param_category = $category_input;
            $param_price = $price_input;
            $param_color = $color_input;
            $param_description = $description_input;
            $param_item_condition = $item_condition_input;


            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                header("location: my_account.php");
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }

        // Close statement
        mysqli_stmt_close($stmt);
    }

    // Close connection
    mysqli_close($link);
}

// Processing form data when form is submitted
if(isset($_POST["delete_item"])){

    $item_id_input = trim($_POST['item_id']);

    // Prepare an insert statement

    $sql = "DELETE FROM item_information WHERE item_id=?";
    if($stmt = mysqli_prepare($link, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "i",$param_item_id);

        // Set parameters
        $param_item_id = $item_id_input;

        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            header("location: my_account.php");
        } else{
            echo "Something went wrong. Please try again later.";
        }
    }

    // Close statement
    mysqli_stmt_close($stmt);

    // Close connection
    mysqli_close($link);
}


?>