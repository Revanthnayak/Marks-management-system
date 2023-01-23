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
    <th>stuid</th>
        <th>me toppers</th>

        
    </tr>
    </table>
    <?php 
$connect=mysqli_connect("localhost","root","","user_db") or die("connection failed");
$query="SELECT uf.name,stuid,avg((me+me1+me2)/3) as totalme,avg((cn+cn1+cn2)/3) as totalcn,avg((dbms+dbms1+dbms2)/3) as totaldbms,avg((atc+atc1+atc2)/3) as totalatc,avg((adp+adp1+adp2)/3) as totaladp,avg((unix+unix1+unix2)/3) as totalunix from user_form uf,user_data,user_data1,user_data2 WHERE stuid=stuid1 AND stuid1=stuid2 and uf.id=stuid and uf.id=stuid1 and uf.id=stuid2 group by (stuid) order by totalme desc";
$result=mysqli_query($connect,$query);
while($row=mysqli_fetch_assoc($result))
{
    ?>
    <tr><d><?php echo $row['stuid']?></d>
    <d><?php echo $row['name']?></d>
        <d><?php echo $row['totalme']?></d>
        
        
        <br>
    </tr>
    <?php
}
?>
<br>
<?php 
$connect=mysqli_connect("localhost","root","","user_db") or die("connection failed");
$query="SELECT stuid,avg((me+me1+me2)/3) as totalme,avg((cn+cn1+cn2)/3) as totalcn,avg((dbms+dbms1+dbms2)/3) as totaldbms,avg((atc+atc1+atc2)/3) as totalatc,avg((adp+adp1+adp2)/3) as totaladp,avg((unix+unix1+unix2)/3) as totalunix from user_form,user_data,user_data1,user_data2 WHERE stuid=stuid1 AND stuid1=stuid2 group by (stuid) order by totalcn desc";
$result=mysqli_query($connect,$query);
while($row=mysqli_fetch_assoc($result))
{
    ?>
    <tr><d><?php echo $row['stuid']?></d>
        <d><?php echo $row['totalcn']?></d>
        
        
        <br>
    </tr>
    <?php
}
?>

<br>
<?php 
$connect=mysqli_connect("localhost","root","","user_db") or die("connection failed");
$query="SELECT uf.name,stuid,avg((me+me1+me2)/3) as totalme,avg((cn+cn1+cn2)/3) as totalcn,avg((dbms+dbms1+dbms2)/3) as totaldbms,avg((atc+atc1+atc2)/3) as totalatc,avg((adp+adp1+adp2)/3) as totaladp,avg((unix+unix1+unix2)/3) as totalunix from user_form uf,user_data,user_data1,user_data2 WHERE stuid=stuid1 AND stuid1=stuid2 and uf.id=stuid and uf.id=stuid1 and uf.id=stuid2 group by (stuid) order by totaldbms desc";
$result=mysqli_query($connect,$query);
while($row=mysqli_fetch_assoc($result))
{
    ?>
    <tr><d><?php echo $row['stuid']?></d>
    <d><?php echo $row['name']?></d>
        <d><?php echo $row['totaldbms']?></d>
        
        
        <br>
    </tr>
    <?php
}
?>
<br>