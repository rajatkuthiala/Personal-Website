<?php
session_start();	//starting the session for the user

$dbhost = '127.0.0.1'; // allocating the host
$dbname = 'sys'; // assigning the database created for the project
$dbuser = 'root'; // username to access the database
$dbpass = 'Galaxys#4'; // password to access the database

$connection = mysqli_connect($dbhost, $dbuser, $dbpass) or die("MySQL Error: " . mysqli_error()); //connects the script to the database server using info from above
$db_select = mysqli_select_db($connection, $dbname) or die("MySQL Error: " . mysqli_error());	//selects the specific database to connect to that was defined above

?>
