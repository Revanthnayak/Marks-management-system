<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/Average.css">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

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
  <th scope="col">ID&nbsp;</th>
    <th scope="col">NAME&nbsp;</th>
    <th scope="col">ME&nbsp;&nbsp;&nbsp;&nbsp;</th>
    <th scope="col">CN&nbsp;&nbsp;&nbsp;&nbsp;</th>
    <th scope="col">DBMS&nbsp;</th>
    <th scope="col">ATC&nbsp;&nbsp;&nbsp;&nbsp;</th>
    <th scope="col">ADP&nbsp;&nbsp;&nbsp;&nbsp;</th>
    <th scope="col">UNIX&nbsp;&nbsp;</th>
  </tr>
</thead>

<tbody> 
    <?php 
$connect=mysqli_connect("localhost","root","","user_db") or die("connection failed");
$query="SELECT uf.name,stuid,avg((me+me1+me2)/3) as totalme,avg((cn+cn1+cn2)/3) as totalcn,avg((dbms+dbms1+dbms2)/3) as totaldbms,avg((atc+atc1+atc2)/3) as totalatc,avg((adp+adp1+adp2)/3) as totaladp,avg((unix+unix1+unix2)/3) as totalunix from user_form uf,user_data,user_data1,user_data2 WHERE stuid=stuid1 AND stuid1=stuid2 and uf.id=stuid and uf.id=stuid1 and uf.id=stuid2 group by (stuid) ";
$result=mysqli_query($connect,$query);
while($row=mysqli_fetch_assoc($result))
{
    ?>
    <tr>
    <td><?php echo $row['stuid']?></td>   
    <td><?php echo $row['name']?></td>  
        <td><?php echo $row['totalme']?></td>
        <td><?php echo $row['totalcn']?></td>
        <td><?php echo $row['totaldbms']?></td>
        <td><?php echo $row['totalatc']?></td>
        <td><?php echo $row['totaladp']?></td>
        <td><?php echo $row['totalunix']?></td>
        
        <br>
    </tr>
    <?php
}
?>
</tbody>
        </table>