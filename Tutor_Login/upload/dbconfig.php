<?php
//Database credentials
$dbHost     = 'localhost';
$dbUsername = 'arshatha1997';
$dbPassword = 'arshsql1997';
$dbName     = 'Options';

//Connect and select the database
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>