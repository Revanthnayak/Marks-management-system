

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/display.css">
    <title>Document</title>
</head>
<body>
<nav class="navbar">
            <div class="logo">
                 
            </div>
            <ul>
                <li><a href="../index.php">HOME</a></li>
                <LI><A HREF="about.html">ABOUT</A></LI>
                <li><a href="#">SERVICES</a></li>
                <li><li><a href="../index.php" >Log out</a></li></li>
            </ul>
        </nav>
        <table border="5">
    <tr>
        <th>name</th>
        <th>me</th>
        <th>cn</th>
        <th>dbms</th>
        <th>atc</th>
        <th>adp</th>
        <th>unix</th>
    </tr>
    </table>
    <?php 
$connect=mysqli_connect("localhost","root","","user_db") or die("connection failed");
$query="select ud.*,uf.name from user_form uf,user_data ud  where uf.id=ud.stuid";
$result=mysqli_query($connect,$query);
while($row=mysqli_fetch_assoc($result))
{
    ?>
    <tr>
    <d><?php echo $row['name']?></d>
        <d><?php echo $row['me']?></d>
        <d><?php echo $row['cn']?></d>
        <d><?php echo $row['dbms']?></d>
        &nbsp;&nbsp;<d><?php echo $row['atc']?></d>
        <d><?php echo $row['adp']?></d>
        <d><?php echo $row['unix']?></d>
        
        <br>
    </tr>
    <?php
}
?>
<table border="5">
   <br><br> <tr><th>name</th>
        <th>me1</th>
        <th>$cn1</th>
        <th>dbms1</th>
        <th>atc1</th>
        <th>adp1</th>
        <th>unix1</th>
    </tr>
    </table>
<?php
$query1="select ud1.*,uf.name from user_form uf,user_data1 ud1  where uf.id=ud1.stuid1";
$result=mysqli_query($connect,$query1);
while($row=mysqli_fetch_assoc($result))
{
    ?>
    <tr>
    <d><d><?php echo $row['name']?></d>
        <d><?php echo $row['me1']?></d>
        <d><?php echo $row['cn1']?></d>
        <d><?php echo $row['dbms1']?></d>
        <d><?php echo $row['atc1']?></d>
        <d><?php echo $row['adp1']?></d>
        <d><?php echo $row['unix1']?></d>
        
        <br>
    </tr>
    <?php
}
?>
<table border="5">
    <br><br><tr><th>name</th>
        <th>me2</th>
        <th>cn2</th>
        <th>dbms2</th>
        <th>atc2</th>
        <th>adp2</th>
        <th>unix2</th>
    </tr>
    </table>

<?php
$query2="select ud2.*,uf.name from user_form uf,user_data2 ud2  where uf.id=ud2.stuid2";
$result=mysqli_query($connect,$query2);
while($row=mysqli_fetch_assoc($result))
{
    ?>
    <tr>
    <d><d><?php echo $row['name']?></d>
        <d><?php echo $row['me2']?></d>
        <d><?php echo $row['cn2']?></d>
        <d><?php echo $row['dbms2']?></d>
        <d><?php echo $row['atc2']?></d>
        <d><?php echo $row['adp2']?></d>
        <d><?php echo $row['unix2']?></d>
        
        <br>
    </tr>
    <?php
}
?>
</body>
</html>