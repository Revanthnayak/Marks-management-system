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
                <li><li><a href="newpage.php" >Log out</a></li></li>
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
        <th>me1</th>
        <th>cn1</th>
        <th>dbms1</th>
        <th>atc1</th>
        <th>adp1</th>
        <th>unix1</th>
        <th>me2</th>
        <th>cn2</th>
        <th>dbms2</th>
        <th>atc2</th>
        <th>adp2</th>
        <th>unix2</th>
        <th>totalme</th>
        <th>totalcn</th>
        <th>totaldbms</th>
        <th>totalatc</th>
        <th>totaladp</th>
        <th>totalunix</th>

        
    </tr>
    </table>
    <?php 
$connect=mysqli_connect("localhost","root","","user_db") or die("connection failed");
$query="select * from combined_table group by(stuid) order by (stuid)";
$result=mysqli_query($connect,$query);
while($row=mysqli_fetch_assoc($result))
{
    ?>
    <tr>
        <d><?php echo $row['totalme']?></d>
        <d><?php echo $row['totalcn']?></d>
        <d><?php echo $row['totaldbms']?></d>
        <d><?php echo $row['totalatc']?></d>
        <d><?php echo $row['totaladp']?></d>
        <d><?php echo $row['totalunix']?></d>
        
        <br>
    </tr>
    <?php
}
?>