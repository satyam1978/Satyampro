<?php
include 'connect_hire.php'; // same connection file as before

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name         = $_POST['name'];
    $email        = md5($_POST['email']);
    $countryCode  = $_POST['countryCode'];
    $phone        = md5($_POST['phone']);
    $projectType  = $_POST['projectType'];
    $budget       = $_POST['budget'];
    $deadline     = $_POST['deadline'];
    $communication= $_POST['communication'];
    $details      = $_POST['details'];
    $terms        = isset($_POST['terms']) ? 1 : 0;
    $privacy      = isset($_POST['privacy']) ? 1 : 0;

    $sql = "INSERT INTO hire_requests 
    (name, email, countryCode, phone, projectType, budget, deadline, communication, details, terms, privacy)
    VALUES 
    ('$name', '$email', '$countryCode', '$phone', '$projectType', '$budget', '$deadline', '$communication', '$details', '$terms', '$privacy')";

    if ($conn->query($sql) === TRUE) {
        // ✅ Redirect to success page
        header("Location: success.html");
        exit();
    } else {
        echo "❌ Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
?>
