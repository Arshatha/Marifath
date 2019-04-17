<?php

session_start();

$host = "localhost"; /* Host name */
$user = "arshatha1997"; /* User */
$password = "arshsql1997"; /* Password */
$dbname = "tutor_login"; /* Database name */

$con = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$con) {
 die("Connection failed: " . mysqli_connect_error());
}