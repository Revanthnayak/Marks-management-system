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
$query="SELECT stuid,me,me1,me2,cn,cn1,cn2,dbms,dbms1,dbms2,atc,atc1,atc2,adp,adp1,adp2,unix,unix1,unix2,sum(me+me1+me2) as totalme,sum(cn+cn1+cn2) as totalcn,sum(dbms+dbms1+dbms2) as totaldbms,sum(atc+atc1+atc2) as totalatc,sum(adp+adp1+adp2) as totaladp,sum(unix+unix1+unix2) as totalunix from user_data,user_data1,user_data2 WHERE stuid=stuid1 AND stuid1=stuid2 group by (stuid) ";
$result=mysqli_query($connect,$query);
while($row=mysqli_fetch_assoc($result))
{
    ?>
    <tr>
    <d><?php echo $row['stuid']?></d>
        <d><?php echo $row['me']?></d>
        <d><?php echo $row['cn']?></d>
        <d><?php echo $row['dbms']?></d>
        <d><?php echo $row['atc']?></d>
        <d><?php echo $row['adp']?></d>
        <d><?php echo $row['unix']?></d>
        <d><?php echo $row['me1']?></d>
        <d><?php echo $row['cn1']?></d>
        <d><?php echo $row['dbms1']?></d>
        <d><?php echo $row['atc1']?></d>
        <d><?php echo $row['adp1']?></d>
        <d><?php echo $row['unix1']?></d>
        <d><?php echo $row['me2']?></d>
        <d><?php echo $row['cn2']?></d>
        <d><?php echo $row['dbms2']?></d>
        <d><?php echo $row['atc2']?></d>
        <d><?php echo $row['adp2']?></d>
        <d><?php echo $row['unix2']?></d>
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