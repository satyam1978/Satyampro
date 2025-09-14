<?php
$servername = "sql209.infinityfree.com";   // usually localhost
$username   = "if0_39919029";        // phpMyAdmin username
$password   = "BqpVpqfU6q9";            // phpMyAdmin password
$dbname     = "if0_39919029_myformdb";    // database name (make sure it exists)

// Create connection
$conn = new mysqli("sql209.infinityfree.com", "if0_39919029", "BqpVpqfU6q9", "if0_39919029_myformdb");

// Check connection
if ($conn->connect_error) {
    die("❌ Connection failed: " . $conn->connect_error);
}

// SQL to create table
$sql = "CREATE TABLE IF NOT EXISTS users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  firstName VARCHAR(100),
  surname VARCHAR(100),
  email VARCHAR(150),
  countryCode VARCHAR(10),
  phone VARCHAR(20),
  idType VARCHAR(50),
  idNumber VARCHAR(100),
  country VARCHAR(100),
  state VARCHAR(100),
  city VARCHAR(100),
  landmark VARCHAR(255),
  gender VARCHAR(10),
  dob DATE,
  businessName VARCHAR(150),
  website VARCHAR(200),
  instaUrl VARCHAR(200),
  fbUrl VARCHAR(200),
  twitterUrl VARCHAR(200),
  linkedinUrl VARCHAR(200),
  reason TEXT,
  terms TINYINT(1),
  privacy TINYINT(1),
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

// Execute query
if ($conn->query($sql) === TRUE) {
    echo "✅ Table 'users' created successfully!";
} else {
    echo "❌ Error creating table: " . $conn->error;
}

$conn->close();
?>
