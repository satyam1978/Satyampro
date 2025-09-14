<?php
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName   = $_POST['firstName'];
    $surname     = $_POST['surname'];
    $email       = md5($_POST['email']);
    $countryCode = $_POST['countryCode'];
    $phone       = md5($_POST['phone']);
    $idType      = $_POST['idType'];
    $idNumber    = md5($_POST['idNumber']);
    $country     = $_POST['country'];
    $state       = $_POST['state'];
    $city        = $_POST['city'];
    $landmark    = $_POST['landmark'];
    $gender      = $_POST['gender'];
    $dob         = md5($_POST['dob']);
    $businessName= $_POST['businessName'];
    $website     = $_POST['website'];
    $instaUrl    = md5($_POST['instaUrl']);
    $fbUrl       = md5($_POST['fbUrl']);
    $twitterUrl  = md5($_POST['twitterUrl']);
    $linkedinUrl = md5($_POST['linkedinUrl']);
    $reason      = $_POST['reason'];
    $terms       = isset($_POST['terms']) ? 1 : 0;
    $privacy     = isset($_POST['privacy']) ? 1 : 0;

    $sql = "INSERT INTO users 
    (firstName, surname, email, countryCode, phone, idType, idNumber, country, state, city, landmark, gender, dob, businessName, website, instaUrl, fbUrl, twitterUrl, linkedinUrl, reason, terms, privacy)
    VALUES 
    ('$firstName', '$surname', '$email', '$countryCode', '$phone', '$idType', '$idNumber', '$country', '$state', '$city', '$landmark', '$gender', '$dob', '$businessName', '$website', '$instaUrl', '$fbUrl', '$twitterUrl', '$linkedinUrl', '$reason', '$terms', '$privacy')";

    if ($conn->query($sql) === TRUE) {
        //  Redirect to success page
        header("Location: success.html");
        exit();
    } else {
        echo "❌ Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
?>
