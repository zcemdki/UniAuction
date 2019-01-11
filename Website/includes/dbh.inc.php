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
	//Linking the database to the website//
	$dbServername = "localhost";
	$dbUsername = "root";
	$dbPassword = "";
	$dbName = "loginsystem";

	$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
?>
