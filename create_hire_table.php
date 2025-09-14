<?php
$servername = "sql209.infinityfree.com";   // usually localhost
$username   = "if0_39919029";        // phpMyAdmin username
$password   = "if0_39919029";            // phpMyAdmin password
$dbname     = "if0_39919029_myhiredb";    // database name

$conn = new mysqli("sql209.infinityfree.com", "if0_39919029", "if0_39919029", "if0_39919029_myhiredb");

if ($conn->connect_error) {
    die("❌ Connection failed: " . $conn->connect_error);
}

$sql = "CREATE TABLE IF NOT EXISTS hire_requests (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(150),
  email VARCHAR(150),
  countryCode VARCHAR(10),
  phone VARCHAR(20),
  projectType VARCHAR(100),
  budget VARCHAR(50),
  deadline DATE,
  communication VARCHAR(50),
  details TEXT,
  terms TINYINT(1),
  privacy TINYINT(1),
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "✅ Table 'hire_requests' created successfully!";
} else {
    echo "❌ Error creating table: " . $conn->error;
}

$conn->close();
?>
