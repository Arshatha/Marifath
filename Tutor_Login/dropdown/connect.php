<?php
$connection = mysqli_connect('localhost', 'arshatha1997', 'arshsql1997');
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'tutor_login');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}