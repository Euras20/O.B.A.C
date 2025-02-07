<?php
//session_start(); // Start the session

session_unset(); // Clear session data
session_destroy(); // Destroy session

include("connection.php");

if (isset($_POST['next'])) {
    // Retrieve and sanitize input data
    $firstname = htmlentities($_POST['firstname']);
    $lastname = htmlentities($_POST['lastname']);
    $address = htmlentities($_POST['address']);
    $bp = htmlentities($_POST['bp']);
    $ifu = htmlentities($_POST['ifu']);
    $profession = htmlentities($_POST['profession']);
    $gender = htmlentities($_POST['Gender']); // Ensure case matches the form field name
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $tel = htmlentities($_POST['tel']);
    $password = htmlentities($_POST['password']);
    $repeatpassword = htmlentities($_POST['repeatpassword']);
    $bank = htmlentities($_POST['bank']);
    $country = htmlentities($_POST['country']);

    // Validate required fields
    if (empty($firstname) || empty($lastname) || strlen($password) < 8 || $password !== $repeatpassword) {
        echo "<script>alert('Please fill in all required fields correctly!')</script>";
        echo "<script>window.history.back();</script>";
        exit();
    }

    // Check if email already exists
    $check_email = "SELECT * FROM clients WHERE email=?";
    $stmt = mysqli_prepare($con, $check_email);
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);

    if (mysqli_stmt_num_rows($stmt) > 0) {
        echo "<script>alert('Email already exists, please try again!')</script>";
        echo "<script>window.history.back();</script>";
        exit();
    }

    mysqli_stmt_close($stmt);

    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Restart session to store data
    session_start();
    
    // Store data in session
    $_SESSION['firstname'] = $firstname;
    $_SESSION['lastname'] = $lastname;
    $_SESSION['address'] = $address;
    $_SESSION['bp'] = $bp;
    $_SESSION['ifu'] = $ifu;
    $_SESSION['profession'] = $profession;
    $_SESSION['gender'] = $gender;
    $_SESSION['email'] = $email;
    $_SESSION['tel'] = $tel;
    $_SESSION['password'] = $hashed_password;
    $_SESSION['bank'] = $bank;
    $_SESSION['country'] = $country;

    // Redirect to next step
    header('Location: signup2.php');
    exit();
}
?>
