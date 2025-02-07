<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="refresh" content="600">
    <meta charset="utf-8">
    <meta name="author" content="Euras Thg">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGN UP3</title>
    <link rel="stylesheet" href="css/signup2.css">
</head>
<body>
    <div class="container2" style="background-image: url(images/pikaso_texttoimage_people-smiling-in-front-of-a-bank\ \(1\).jpeg);">
        <div class="Nav-bar">
            <nav>
                <a href="index.php">HOME</a>
                <a href="">ABOUT US</a>
                <a href="help.php">HELP</a>
                <Button><a href="signup.php">SIGN UP</a></Button>
            </nav>
            <img src="images/large__1_-removebg-preview.png" alt="">
            <h2>OBAC</h2>
        </div>
        <div class="Form2">
            <form action="signup3_client.php" method="post">
                <p>First name: <span style="color:  #20CBA7"><?php echo $_SESSION['firstname']; ?></span></p>
                <p>Last Name: <span style="color:  #20CBA7;"><?php echo $_SESSION['lastname']; ?></span></p>
                <p>Address: <span style="color:  #20CBA7;"><?php echo $_SESSION['address']; ?></span></p>
                <p>BP: <span style="color:  #20CBA7;"><?php echo $_SESSION['bp']; ?></span></p>
                <p>IFU: <span style="color:  #20CBA7;"><?php echo $_SESSION['ifu']; ?></span></p>
                <p>Profession: <span style="color:  #20CBA7;"><?php echo $_SESSION['profession']; ?></span></p>
                <p>Gender: <span style="color: #20CBA7;"><?php echo $_SESSION['gender']; ?></span></p>
                <p>Email: <span style="color:  #20CBA7;"><?php echo $_SESSION['email']; ?></span></p>
                <p>Tel: <span style="color:  #20CBA7;"><?php echo $_SESSION['tel']; ?></span></p>
                <p>Country: <span style="color:  #20CBA7;"><?php echo $_SESSION['country']; ?></span></p>
                <p>Bank: <span style="color:  #20CBA7;"><?php echo $_SESSION['bank']; ?></span></p>
                <p>Account Type: <span style="color:  #20CBA7;"><?php echo $_SESSION['account_type']; ?></span></p>
                <center>
                 <button type="submit" style="margin-right:5000px;">Submit</button>
                </center>
            </form>
        </div>   
        <div class="Four">
            <img src="images/téléchargement-removebg-preview.png" alt="">
            <img src="images/artworks-000395912259-dbhmru-t500x500-removebg-preview.png" alt="">
            <img src="images/BOA-removebg-preview.png" alt="">
        <center>
            <a style="color: #20CBA7;" href="termsandcondition">Terms and Conditions</a>
            <p style="color: azure;">©Copyright 2024</p>
        </center>
        </div>
    </div>
</body>
</html>
