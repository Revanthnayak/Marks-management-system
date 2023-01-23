<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/ranker.css">
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
                <li><li><a href="newpage.php" >LOG OUT</a></li></li>
            </ul>
        </nav>



        <table class="table" border="5">
<thead >
  <tr>
  <th scope="col">NAME&nbsp;</th>
    <th scope="col">ME TOPPERS&nbsp;</th>
    <th scope="col">AVERAGE&nbsp;</th>
  </tr>
</thead>
    <TBODY>
    <?php 
$connect=mysqli_connect("localhost","root","","user_db") or die("connection failed");
$query="SELECT uf.name,stuid,avg((me+me1+me2)/3) as totalme,avg((cn+cn1+cn2)/3) as totalcn,avg((dbms+dbms1+dbms2)/3) as totaldbms,avg((atc+atc1+atc2)/3) as totalatc,avg((adp+adp1+adp2)/3) as totaladp,avg((unix+unix1+unix2)/3) as totalunix from user_form uf,user_data,user_data1,user_data2 WHERE stuid=stuid1 AND stuid1=stuid2 and uf.id=stuid and uf.id=stuid1 and uf.id=stuid2 group by (stuid) order by totalme desc";
$result=mysqli_query($connect,$query);
while($row=mysqli_fetch_assoc($result))
{
    ?>
    <tr><Td><?php echo $row['stuid']?></Td>
    <Td><?php echo $row['name']?></Td>
    <Td><?php echo $row['totalme']?></Td>
        
        
        <br>
    </tr>
    <?php
}
?>
</TBODY>
        </table>

<br>

<table class="table" border="5">
<thead >
  <tr>
  <th scope="col">NAME&nbsp;</th>
    <th scope="col">CN TOPPERS&nbsp;</th>
    <th scope="col">AVERAGE&nbsp;</th>
  </tr>
</thead>
    <TBODY>
    <?php 
$connect=mysqli_connect("localhost","root","","user_db") or die("connection failed");
$query="SELECT uf.name,stuid,avg((ME+me1+me2)/3) as totalme,avg((cn+cn1+cn2)/3) as totalcn,avg((dbms+dbms1+dbms2)/3) as totaldbms,avg((atc+atc1+atc2)/3) as totalatc,avg((adp+adp1+adp2)/3) as totaladp,avg((unix+unix1+unix2)/3) as totalunix from user_form uf,user_data,user_data1,user_data2 WHERE stuid=stuid1 AND stuid1=stuid2 and uf.id=stuid and uf.id=stuid1 and uf.id=stuid2 group by (stuid) order by totalcn desc";
$result=mysqli_query($connect,$query);
while($row=mysqli_fetch_assoc($result))
{
    ?>
    <tr><Td><?php echo $row['stuid']?></Td>
    <Td><?php echo $row['name']?></Td>
    <Td><?php echo $row['totalcn']?></Td>
        
        
        <br>
    </tr>
    <?php
}
?>
</TBODY>
        </table>

<br>
<table class="table" border="5">
<thead >
  <tr>
  <th scope="col">NAME&nbsp;</th>
    <th scope="col">DBMS TOPPERS&nbsp;</th>
    <th scope="col">AVERAGE&nbsp;</th>
  </tr>
</thead>
    <TBODY>
    <?php 
$connect=mysqli_connect("localhost","root","","user_db") or die("connection failed");
$query="SELECT uf.name,stuid,avg((me+me1+me2)/3) as totalme,avg((cn+cn1+cn2)/3) as totalcn,avg((dbms+dbms1+dbms2)/3) as totaldbms,avg((atc+atc1+atc2)/3) as totalatc,avg((adp+adp1+adp2)/3) as totaladp,avg((unix+unix1+unix2)/3) as totalunix from user_form uf,user_data,user_data1,user_data2 WHERE stuid=stuid1 AND stuid1=stuid2 and uf.id=stuid and uf.id=stuid1 and uf.id=stuid2 group by (stuid) order by totaldbms desc";
$result=mysqli_query($connect,$query);
while($row=mysqli_fetch_assoc($result))
{
    ?>
    <tr><Td><?php echo $row['stuid']?></Td>
    <Td><?php echo $row['name']?></Td>
    <Td><?php echo $row['totaldbms']?></Td>
        
        
        <br>
    </tr>
    <?php
}
?>
</TBODY>
        </table>

<br>
<table class="table" border="5">
<thead >
  <tr>
  <th scope="col">NAME&nbsp;</th>
    <th scope="col">ATC TOPPERS&nbsp;</th>
    <th scope="col">AVERAGE&nbsp;</th>
  </tr>
</thead>
    <TBODY>
    <?php 
$connect=mysqli_connect("localhost","root","","user_db") or die("connection failed");
$query="SELECT uf.name,stuid,avg((me+me1+me2)/3) as totalme,avg((cn+cn1+cn2)/3) as totalcn,avg((dbms+dbms1+dbms2)/3) as totaldbms,avg((atc+atc1+atc2)/3) as totalatc,avg((adp+adp1+adp2)/3) as totaladp,avg((unix+unix1+unix2)/3) as totalunix from user_form uf,user_data,user_data1,user_data2 WHERE stuid=stuid1 AND stuid1=stuid2 and uf.id=stuid and uf.id=stuid1 and uf.id=stuid2 group by (stuid) order by totalatc desc";
$result=mysqli_query($connect,$query);
while($row=mysqli_fetch_assoc($result))
{
    ?>
    <tr><Td><?php echo $row['stuid']?></Td>
    <Td><?php echo $row['name']?></Td>
    <Td><?php echo $row['totalatc']?></Td>
        
        
        <br>
    </tr>
    <?php
}
?>
</TBODY>
        </table>

<br>
<table class="table" border="5">
<thead >
  <tr>
  <th scope="col">NAME&nbsp;</th>
    <th scope="col">ADP TOPPERS&nbsp;</th>
    <th scope="col">AVERAGE&nbsp;</th>
  </tr>
</thead>
    <TBODY>
    <?php 
$connect=mysqli_connect("localhost","root","","user_db") or die("connection failed");
$query="SELECT uf.name,stuid,avg((me+me1+me2)/3) as totalme,avg((cn+cn1+cn2)/3) as totalcn,avg((dbms+dbms1+dbms2)/3) as totaldbms,avg((atc+atc1+atc2)/3) as totalatc,avg((adp+adp1+adp2)/3) as totaladp,avg((unix+unix1+unix2)/3) as totalunix from user_form uf,user_data,user_data1,user_data2 WHERE stuid=stuid1 AND stuid1=stuid2 and uf.id=stuid and uf.id=stuid1 and uf.id=stuid2 group by (stuid) order by totaladp desc";
$result=mysqli_query($connect,$query);
while($row=mysqli_fetch_assoc($result))
{
    ?>
    <tr><Td><?php echo $row['stuid']?></Td>
    <Td><?php echo $row['name']?></Td>
    <Td><?php echo $row['totaladp']?></Td>
        
        
        <br>
    </tr>
    <?php
}
?>
</TBODY>
        </table>

<br>
<table class="table" border="5">
<thead >
  <tr>
  <th scope="col">NAME&nbsp;</th>
    <th scope="col">UNIX TOPPERS&nbsp;</th>
    <th scope="col">AVERAGE&nbsp;</th>
  </tr>
</thead>
    <TBODY>
    <?php 
$connect=mysqli_connect("localhost","root","","user_db") or die("connection failed");
$query="SELECT uf.name,stuid,avg((me+me1+me2)/3) as totalme,avg((cn+cn1+cn2)/3) as totalcn,avg((dbms+dbms1+dbms2)/3) as totaldbms,avg((atc+atc1+atc2)/3) as totalatc,avg((adp+adp1+adp2)/3) as totaladp,avg((unix+unix1+unix2)/3) as totalunix from user_form uf,user_data,user_data1,user_data2 WHERE stuid=stuid1 AND stuid1=stuid2 and uf.id=stuid and uf.id=stuid1 and uf.id=stuid2 group by (stuid) order by totalunix desc";
$result=mysqli_query($connect,$query);
while($row=mysqli_fetch_assoc($result))
{
    ?>
    <tr><Td><?php echo $row['stuid']?></Td>
    <Td><?php echo $row['name']?></Td>
    <Td><?php echo $row['totalunix']?></Td>
        
        
        <br>
    </tr>
    <?php
}
?>
</TBODY>
        </table>

<br>



