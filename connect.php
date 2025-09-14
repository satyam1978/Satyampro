<?php
$servername = "sql209.infinityfree.com";   // usually localhost
$username   = "if0_39919029";        // your phpMyAdmin username
$password   = "BqpVpqfU6q9";            // your phpMyAdmin password
$dbname     = "if0_39919029_myformdb";    // your database name

$conn = new mysqli("sql209.infinityfree.com", "if0_39919029", "BqpVpqfU6q9", "if0_39919029_myformdb");

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
