<?php
// Initialize the session
session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
    exit;
}

// Include config file
require "includes_config.php";


// Define variables and initialize with empty values
$item_name = $category = $price = $color = $description = $item_condition = $item_url = "";
$item_name_err = $category_err = $price_err = $color_err = $description_err = $item_condition_err = $item_url_err = "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

    if(empty(trim($_POST["item_name"]))){
        $item_name_err = "Please enter a item name.";
    } else{
        $item_name = trim($_POST["item_name"]);
    }

    if(empty(trim($_POST["category"]))){
        $category_err = "Please enter a category.";
    } else{
        $category = trim($_POST["category"]);
    }

    if(empty(trim($_POST["price"]))){
        $price_err = "Please enter a price.";
    } else{
        $price = trim($_POST["price"]);
    }

    // Validate password
    if(empty(trim($_POST["color"]))){
        $color_err = "Please enter a color.";
    } else{
        $color = trim($_POST["color"]);
    }

    // Validate confirm password
    if(empty(trim($_POST["description"]))){
        $description_err = "Please write a description of the item.";
    } else{
        $description = trim($_POST["description"]);
    }

    // Validate confirm password
    if(empty(trim($_POST["item_condition"]))){
        $item_condition_err = "Please indicate condition of item.";
    } else{
        $item_condition = trim($_POST["item_condition"]);
    }

    if(empty(basename($_FILES["fileToUpload"]["name"]))){
        $item_url_err = "Please upload image.";
    } else{
        require "includes_upload.php";
        $item_url = str_replace("C:/xampp/htdocs/UNIAUCTION_6/upload/","upload/",$target_file);
        $target_file =  $item_url;
    }


    // Check input errors before inserting in database
    if(empty($item_name_err) && empty($category_err) && empty($price_err) && empty($color_err) && empty($description_err) && empty($item_condition_err) && empty($item_url_err)){

        // Prepare an insert statement
        $sql = "INSERT INTO item_information (account_id, item_name, category, price, color, description, item_condition, item_url) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ississss", $param_account_id,  $param_item_name, $param_category, $param_price, $param_color, $param_description, $param_item_condition,$param_item_url);

            // Set parameters
            $param_account_id = $_SESSION['account_id'];
            $param_item_name = $item_name;
            $param_category = $category;
            $param_price = $price;
            $param_color = $color;
            $param_description = $description;
            $param_item_condition = $item_condition;
            $param_item_url= $target_file;


            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                header("location: my_account.php");
                exit;
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
?>