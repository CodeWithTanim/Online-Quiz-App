<?php
$con = new mysqli('localhost:3306', 'root', '', 'exam');

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
?>
