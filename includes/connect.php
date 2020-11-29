<?php
$server = 'localhost';
$username = 'root';
$password = 'root';
$database = 'blog';

$db = mysqli_connect($server, $username, $password, $database);


mysqli_query($db, "SET NAMES 'utf8'");
?>