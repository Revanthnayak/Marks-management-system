<?php

@include 'config.php';

if(isset($_POST['submit'])){
    $stuid = mysqli_real_escape_string($conn, $_POST['stuid']);
   $me = mysqli_real_escape_string($conn, $_POST['me']);
   $cn = mysqli_real_escape_string($conn, $_POST['cn']);
   $dbms = mysqli_real_escape_string($conn, $_POST['dbms']);
   $atc = mysqli_real_escape_string($conn, $_POST['atc']);
   $adp = mysqli_real_escape_string($conn, $_POST['adp']);
   $unix = mysqli_real_escape_string($conn, $_POST['unix']);

   $insert = "INSERT INTO user_data(stuid,me,cn,dbms,atc,adp,unix) VALUES('$stuid','$me','$cn','$dbms','$atc','$adp','$unix')";
         mysqli_query($conn, $insert);
         header('location:display.php');
};
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/markspage.css">
    <title>Document</title>
</head>
<body>
<nav class="navbar">
            <div class="logo">
                 
            </div>
            <ul>
                <li><a href="../index.php">HOME</a></li>
                <LI><A HREF="https://www.rvitm.edu.in/about/">ABOUT</A></LI>
                <li><a href="#">SERVICES</a></li>
            </ul>
        </nav>

        <div class="form-container1">

<form action="" method="post">
<input type="text" name="stuid" required placeholder="enter your id">
   <input type="text" name="me" required placeholder="enter your me marks">
   <input type="text" name="cn" required placeholder="enter your cn marks">
   <input type="text" name="dbms" required placeholder="enter your dbms marks">
   <input type="text" name="atc" required placeholder="enter your atc marks">
   <input type="text" name="adp" required placeholder="enter your adp marks">
   <input type="text" name="unix" required placeholder="enter your unix marks">
   
   <input type="submit" name="submit" value="submit" class="form-btn">
   
</form>
</body>
</html>