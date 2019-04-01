<?php
// Include config file
require "includes_config.php";

// Define variables and initialize with empty values
$first_name = $last_name = $email = $university = $password = $confirm_password = "";
$first_name_err = $last_name_err = $email_err = $university_err = $password_err = $confirm_password_err = "";

$verified = 0;
$verificationCode = generateRandomString();

function generateRandomString($length = 5)
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty(trim($_POST["fname"]))) {
        $first_name_err = "Please enter a first name.";
    } else {
        $first_name = trim($_POST["fname"]);
    }

    if (empty(trim($_POST["lname"]))) {
        $last_name_err = "Please enter a first name.";
    } else {
        $last_name = trim($_POST["lname"]);
    }

    // Validate email
    if (empty(trim($_POST["email"]))) {
        $email_err = "Please enter a email.";
    } else {
        // Prepare a select statement
        $sql = "SELECT account_id FROM user_list WHERE email = ?";

        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_email);

            // Set parameters
            $param_email = trim($_POST["email"]);

            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                /* store result */
                mysqli_stmt_store_result($stmt);

                if (mysqli_stmt_num_rows($stmt) == 1) {
                    $email_err = "This email is already taken.";
                } else {
                    $email = trim($_POST["email"]);
                }
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }
        }

        // Close statement
        mysqli_stmt_close($stmt);
    }

    if (empty(trim($_POST["university"]))) {
        $university_err = "Please enter a university.";
    } else {
        $university = trim($_POST["university"]);
    }

    // Validate password
    if (empty(trim($_POST["password"]))) {
        $password_err = "Please enter a password.";
    } elseif (strlen(trim($_POST["password"])) < 6) {
        $password_err = "Password must have at least 6 characters.";
    } else {
        $password = trim($_POST["password"]);
    }

    // Validate confirm password
    if (empty(trim($_POST["confirm_password"]))) {
        $confirm_password_err = "Please confirm password.";
    } else {
        $confirm_password = trim($_POST["confirm_password"]);
        if (empty($password_err) && ($password != $confirm_password)) {
            $confirm_password_err = "Password did not match.";
        }
    }

    // Check input errors before inserting in database
    if (empty($first_name_err) && empty($last_name_err) && empty($email_err) && empty($university_err) && empty($password_err) && empty($confirm_password_err) && empty($confirm_password_err)) {

        // Prepare an insert statement
        $sql = "INSERT INTO user_list (first_name, last_name, email, password, university, verified, verificationCode) VALUES (?, ?, ?, ?, ?, ?, ?)";

        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sssssis", $param_first_name, $param_last_name, $param_email, $param_password, $param_university, $param_verified, $param_verificationCode);

            // Set parameters
            $param_first_name = $first_name;
            $param_last_name = $last_name;
            $param_email = $email;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            $param_university = $university;
            $param_verified = $verified;
            $param_verificationCode = $verificationCode;

            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                // Redirect to login page
                header("location: login.php");
            } else {
                echo "Something went wrong. Please try again later.";
            }
        }

        // Close statement
        mysqli_stmt_close($stmt);
    }
    include_once('includes_mailer.php');
    // Close connection
    mysqli_close($link);
}
?>