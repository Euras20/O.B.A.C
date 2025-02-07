<?php
session_start();

include("connection.php");

// Check if session variables are set
if (
    !isset($_SESSION['firstname']) ||
    !isset($_SESSION['lastname']) ||
    !isset($_SESSION['address']) ||
    !isset($_SESSION['bp']) ||
    !isset($_SESSION['ifu']) ||
    !isset($_SESSION['profession']) ||
    !isset($_SESSION['gender']) ||
    !isset($_SESSION['email']) ||
    !isset($_SESSION['tel']) ||
    !isset($_SESSION['password']) ||
    !isset($_SESSION['bank']) ||
    !isset($_SESSION['country']) ||
    !isset($_SESSION['account_type']) ||
    !isset($_SESSION['id_verification']) ||
    !isset($_SESSION['Identity_number'])
) {
    //echo "<script>alert('Session variables are not set. Please go back to the previous steps.'); window.history.back();</script>";
   // exit();
}

$firstname = $_SESSION['firstname'];
$lastname = $_SESSION['lastname'];
$address = $_SESSION['address'];
$bp = $_SESSION['bp'];
$ifu = $_SESSION['ifu'];
$profession = $_SESSION['profession'];
$gender = $_SESSION['gender'];
$email = $_SESSION['email'];
$tel = $_SESSION['tel'];
$password = $_SESSION['password'];
$bank = $_SESSION['bank'];
$country = $_SESSION['country'];
$id_verification = $_SESSION['id_verification'];
$Identity_number = $_SESSION['Identity_number'];
$account_type = $_SESSION['account_type'];

// Insert data into the database
$insert = "INSERT INTO clients (firstname, lastname, address, bp, ifu, profession, gender, email, tel, password, bank, country, id_verification, Identity_number, account_type) 
           VALUES ('$firstname', '$lastname', '$address', '$bp', '$ifu', '$profession', '$gender', '$email', '$tel', '$password', '$bank', '$country', '$id_verification', '$Identity_number', '$account_type')";

$query = mysqli_query($con, $insert);

if ($query) {
    echo "<script>alert('Signup complete!'); window.open('success.php', '_self');</script>";
} else {
    echo "<script>alert('Error occurred during final signup, please try again!'); window.history.back();</script>";
}
?>
