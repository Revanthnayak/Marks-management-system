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


<?php

@include 'config.php';

if(isset($_POST['submit1'])){
    $stuid1 = mysqli_real_escape_string($conn, $_POST['stuid1']);
    $me1 = mysqli_real_escape_string($conn, $_POST['me1']);
    $cn1 = mysqli_real_escape_string($conn, $_POST['cn1']);
    $dbms1 = mysqli_real_escape_string($conn, $_POST['dbms1']);
    $atc1 = mysqli_real_escape_string($conn, $_POST['atc1']);
    $adp1 = mysqli_real_escape_string($conn, $_POST['adp1']);
    $unix1 = mysqli_real_escape_string($conn, $_POST['unix1']);
    $insert = "INSERT INTO user_data1(stuid1,me1,cn1,dbms1,atc1,adp1,unix1) VALUES('$stuid1','$me1','$cn1','$dbms1','$atc1','$adp1','$unix1')";
    mysqli_query($conn, $insert);
    header('location:display.php');
};
?>

<?php

@include 'config.php';

if(isset($_POST['submit2'])){
    $stuid2 = mysqli_real_escape_string($conn, $_POST['stuid2']);
    $me2 = mysqli_real_escape_string($conn, $_POST['me2']);
    $cn2 = mysqli_real_escape_string($conn, $_POST['cn2']);
    $dbms2 = mysqli_real_escape_string($conn, $_POST['dbms2']);
    $atc2 = mysqli_real_escape_string($conn, $_POST['atc2']);
    $adp2 = mysqli_real_escape_string($conn, $_POST['adp2']);
    $unix2 = mysqli_real_escape_string($conn, $_POST['unix2']);
    $insert = "INSERT INTO user_data2(stuid2,me2,cn2,dbms2,atc2,adp2,unix2) VALUES('$stuid2','$me2','$cn2','$dbms2','$atc2','$adp2','$unix2')";
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
<p>CIE 1</p>
<form action="" method="post">
    
<p>ENTER YOUR ID</p>
<input type="text" name="stuid" required placeholder="id">
<p>ENTER YOUR ME MARKS</p>
    <input type="text" name="me" required placeholder="me marks">
    <p>ENTER YOUR CN MARKS</p>
   <input type="text" name="cn" required placeholder="cn marks">
   <p>ENTER YOUR DBMS MARKS</p>
   <input type="text" name="dbms" required placeholder="dbms marks">
   <p>ENTER YOUR ATC MARKS</p>
   <input type="text" name="atc" required placeholder="atc marks">
   <p>ENTER YOUR ADP MARKS</p>
   <input type="text" name="adp" required placeholder="adp marks">
   <p>ENTER YOUR UNIX MARKS</p>
  <input type="text" name="unix" required placeholder="unix marks">
   <input type="submit" name="submit" value="submit" class="form-btn">
   
</form>
</div>


<div class="form-container2">
<p>CIE 2</p>
<form action="" method="post">
    
<p>ENTER YOUR ID</p>
<input type="text" name="stuid1" required placeholder="id">
<p>ENTER YOUR ME MARKS</p>
    <input type="text" name="me1" required placeholder="me marks">
    <p>ENTER YOUR CN MARKS</p>
   <input type="text" name="cn1" required placeholder="cn marks">
   <p>ENTER YOUR DBMS MARKS</p>
   <input type="text" name="dbms1" required placeholder="dbms marks">
   <p>ENTER YOUR ATC MARKS</p>
   <input type="text" name="atc1" required placeholder="atc marks">
   <p>ENTER YOUR ADP MARKS</p>
   <input type="text" name="adp1" required placeholder="adp marks">
   <p>ENTER YOUR UNIX MARKS</p>
  <input type="text" name="unix1" required placeholder="unix marks">
   <input type="submit" name="submit1" value="submit1" class="form-btn">
   
</form>
</div>


<div class="form-container3">
<p>CIE 3</p>
<form action="" method="post">
    
<p>ENTER YOUR ID</p>
<input type="text" name="stuid2" required placeholder="id">
<p>ENTER YOUR ME MARKS</p>
    <input type="text" name="me2" required placeholder="me marks">
    <p>ENTER YOUR CN MARKS</p>
   <input type="text" name="cn2" required placeholder="cn marks">
   <p>ENTER YOUR DBMS MARKS</p>
   <input type="text" name="dbms2" required placeholder="dbms marks">
   <p>ENTER YOUR ATC MARKS</p>
   <input type="text" name="atc2" required placeholder="atc marks">
   <p>ENTER YOUR ADP MARKS</p>
   <input type="text" name="adp2" required placeholder="adp marks">
   <p>ENTER YOUR UNIX MARKS</p>
  <input type="text" name="unix2" required placeholder="unix marks">
   <input type="submit" name="submit2" value="submit2" class="form-btn">
   
</form>
</div>



</body>
</html>