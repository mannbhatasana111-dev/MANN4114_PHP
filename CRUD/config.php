<?php
session_start();

$mysqli = new mysqli("localhost", "root", "", "employees");

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
?>
