<?php
$citizenId = $_POST['citizen-id'];
$firstName = $_POST['first-name'];
$lastName = $_POST['last-name'];
$gender = $_POST['gender'];
$age = $_POST['age'];
$address = $_POST['address'];
$province = $_POST['province'];
$country = $_POST['country'];
$postalCode = $_POST['postal-code'];
$phoneNumber = $_POST['phone-number'];
$email = $_POST['email'];
$username = $_POST['username'];
$birthdate = $_POST['birthdate'];

$file = fopen("data.txt", "a");
fwrite($file, "$citizenId, $firstName, $lastName, $gender, $age, $address, $province, $country, $postalCode, $phoneNumber, $email, $username, $birthdate\n");
fclose($file);

?>