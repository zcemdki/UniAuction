<?php
    //Starts the session so that session data is kept while on website//
    session_start();
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <!--Load the CSS file, Icons and making the page responsive-->
    <head>
        <link rel="shortcut icon" href="Images/Untitled.ico">
        <title>Homepage</title>
        <meta charset="UTF-8">
        <meta name="description" content="Describe the website HERE">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Dominic Kielbasinski-Podlaszewski">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    
    <body>
            <header>
                <nav id="navbar">
                    <div class="wrapper-home">
                            <ul id="mainmenu">
                                <li> <a href="index.php"><img src="Images/Untitled.ico" alt="homelogo" class="home-logo"> </a></li>
                                <li> <a href="index.php" class="interactive-menu"> HOME</a></li>
                                <li> <a href="" class="interactive-menu"> PLACEHOLDER1</a>
                                <li> <a href="" class="interactive-menu"> PLACEHOLDER2</a></li>
                                <li> <a href="contact.php" class="interactive-menu"> CONTACT</a></li>
                            </ul>
                            <div class="login">
                                <?php 
                                    //Creates logout button when logged in//
                                    if(isset($_SESSION['u_id']))
                                    {
                                        echo '<form action="includes/logout.inc.php" method="POST">
                                                  <button type="submit" name="submit">Logout
                                                  </button>
                                              </form>';
                                    }
                                    else
                                    {
                                        //Leaves input boxes for user to input login information//
                                        echo '<form action="includes/login.inc.php" method="POST">
                                                  <input type="text" name="uid" placeholder="Username/Email">
                                                  <input type="password" name="pwd" placeholder="Password">
                                                  <button type="submit" name="submit">Login</button>
                                              </form>
                                              <a href="signup.php">Sign up </a>';
                                    }
                                ?>
                            </div>
                    </div>
                </nav> 
            </header>