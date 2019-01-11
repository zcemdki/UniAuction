/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Author:  Dominic
 * Created: 30-Sep-2018
 */

<?php

/* Checks if the submit button is pressed*/
if(isset($_POST['submit']))
{
    include_once 'dbh.inc.php';

/*Using the escape string to stop SQL Injection and get data from form*/
$first = mysqli_real_escape_string($conn, $_POST['first']);
$last = mysqli_real_escape_string($conn, $_POST['last']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$uid = mysqli_real_escape_string($conn, $_POST['uid']);
$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);


/*Error handlers*/

	/*Check for empty fields*/
    if(empty($first) || empty($last) || empty($email) || empty($uid) || empty($pwd))
    {
            header('Location: ../signup.php?signup=empty');
            exit();
    }   
    else
    {
        /*Check if form input are valid*/
        if(!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last))
        {
            header('Location: ../signup.php?signup=invalid');
            exit();
        }      
        else
        {
            /*Check if email is valid*/
            if(!filter_var($email, FILTER_VALIDATE_EMAIL))
            {
                header('Location: ../signup.php?signup=email');
                exit();
            } 
            else
            {
                /*Checks the username to see if already in datatbase*/
                $sql = "SELECT * FROM users WHERE user_uid='$uid'";
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);

                if($resultCheck > 0)
                {
                    header('Location: ../signup.php?signup=usertaken');
                    exit();
                } 
                else
                {
                    /*Hashing the password in the data base*/
                    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

                    /*Insert the user information into the data base*/
                    $sql = "INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd)
                    VALUES ('$first', '$last', '$email', '$uid' ,'$hashedPwd');";
                    mysqli_query($conn, $sql);

                    /*Taking the user back to the signup page*/
                    header('Location: ../signup.php?signup=success');
                    exit();
                }
            }
        }
    }
}   
else
{
    header('Location: ../signup.php');
    exit();
}
?>