<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $target_dir = "uploads/";
    
    // Upload ID verification file
    if (isset($_FILES["id_verification"])) {
        $id_verification = $target_dir . basename($_FILES["id_verification"]["name"]);
        if (move_uploaded_file($_FILES["id_verification"]["tmp_name"], $id_verification)) {
            $_SESSION['id_verification'] = $id_verification;
        } else {
            echo "Error uploading ID verification.";
        }
    }

    // Upload personal verification file
    if (isset($_FILES["personal_verification"])) {
        $personal_verification = $target_dir . basename($_FILES["personal_verification"]["name"]);
        if (move_uploaded_file($_FILES["personal_verification"]["tmp_name"], $personal_verification)) {
            $_SESSION['personal_verification'] = $personal_verification;
        } else {
            echo "Error uploading personal verification.";
        }
    }

    // Save account type in session
    $_SESSION['account_type'] = isset($_POST['account_type']) ? implode(', ', $_POST['account_type']) : '';

    // Redirect to next step
    echo "<script>window.open('signup3.php', '_self');</script>";
    exit();
}
?>
