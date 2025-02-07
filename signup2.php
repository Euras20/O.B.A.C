<!DOCTYPE >
<html lang="eng">
<head>
      <meta http-equiv="refresh" content="600">
      <meta charset="utf-8">
      <meta name="authorname" content="Euras Thg">
      <meta name="viewport" content="width=device=100,initial-scale=1.0">
<title>SIGN UP2</title>
</head>
<link rel="stylesheet" href="css/signup2.css">
<body>
  <div class="container" style="background-image: url(images/pikaso_texttoimage_people-smiling-in-front-of-a-bank\ \(1\).jpeg);">
    <div class="Nav-bar">
        <nav>
            <a href="index.php">HOME</a>
            <a href="">ABOUT US</a>
            <a href="help.html">HELP</a>
            <Button><a href="signup.php">SIGN UP</a></Button>
          </nav>
          <img src="images/large__1_-removebg-preview.png" alt="">
          <h2>OBAC</h2>
    </div>
    <div class="Form">
     <!-- signup2.html -->
<form action="signup2_client.php" method="post" enctype="multipart/form-data" style=" margin-right: -100px;">
        <table >
            <tr>
                <td>
                  <label for="">Select a Doc:</label><br>
                  <select name="ID" style="width:150px;" required>
                    <option disabled="">Select a Doc</option>
                    <option>National ID</option>
                    <option>Passport</option>
                    <option>Driver Licence</option>
                 </select>
                </td>
                <td>
                    <label for="">ID Number:</label>
                    <input type="text" name="bp" placeholder="e.g 1998361244" style="width:150px;" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="">ID Verification:</label>
                    <input type="file" name="personal_verification" accept="image/*">
                    <marquee style="font-size:20px; color:azure;" behavior="" direction="">Upload the document selected above picture</marquee>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="">Choose a type of account:</label>
                    <p>Saving Account</p>
                    <input type="checkbox" name="account_type[]" value="Saving Account" style=" margin-left: -2%;">
                    <br>
                    <p>Checking Account</p>
                    <input type="checkbox" name="account_type[]" value="Checking Account" style=" margin-left: -2%;">
                </td>
            </tr>
        </table>
    <a href="signup.php">Back</a>
    <button type="submit" name="next" style="color: black; text-decoration: none; font-weight: bolder; font-style: normal; font-size: medium; background-attachment: fixed; background-color: #20CBA7;
    padding: 10px;">Next</button>
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