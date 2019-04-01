<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define("DBSERVER","localhost");
define("DBUSER","CWuser");
define("DBPASSWORD","basics");
define("DBNAME","uniauction");
define("DBPORT",3306);

/* Attempt to connect to MySQL database */
$link = mysqli_connect(DBSERVER, DBUSER, DBPASSWORD, DBNAME,DBPORT);

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>