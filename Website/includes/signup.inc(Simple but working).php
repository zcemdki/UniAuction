<?php

/* Checks if the submit button is pressed*/

    include_once 'dbh.inc.php';

/*Using the escape string to stop SQL Injection and get data from form*/
$first = mysqli_real_escape_string($conn, $_POST['first']);
$last = mysqli_real_escape_string($conn, $_POST['last']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$uid = mysqli_real_escape_string($conn, $_POST['uid']);
$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);


                    /*Hashing the password in the data base*/
                    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

                    /*insert the user into the data base*/
                    $sql = "INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd)
                    VALUES ('$first', '$last', '$email', '$uid' ,'$hashedPwd');";
                    mysqli_query($conn, $sql);

                    header('Location: ../signup.php?signup=success');
                    exit();
?>