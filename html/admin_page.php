<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/admin_page.css">
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
    <th scope="col">ME1&nbsp;&nbsp;&nbsp;&nbsp;</th>
    <th scope="col">CN1&nbsp;&nbsp;&nbsp;&nbsp;</th>
    <th scope="col">DBMS1&nbsp;</th>
    <th scope="col">ATC1&nbsp;&nbsp;&nbsp;&nbsp;</th>
    <th scope="col">ADP1&nbsp;&nbsp;&nbsp;&nbsp;</th>
    <th scope="col">UNIX1&nbsp;&nbsp;</th>
    <th scope="col">ME2&nbsp;&nbsp;&nbsp;&nbsp;</th>
    <th scope="col">CN2&nbsp;&nbsp;&nbsp;&nbsp;</th>
    <th scope="col">DBMS2&nbsp;</th>
    <th scope="col">ATC2&nbsp;&nbsp;&nbsp;&nbsp;</th>
    <th scope="col">ADP2&nbsp;&nbsp;&nbsp;&nbsp;</th>
    <th scope="col">UNIX2&nbsp;&nbsp;</th>
    <th scope="col">AVERAGE ME&nbsp;&nbsp;&nbsp;&nbsp;</th>
    <th scope="col">AVERAGE CN&nbsp;&nbsp;&nbsp;&nbsp;</th>
    <th scope="col">AVERAGE DBMS&nbsp;</th>
    <th scope="col">AVERAGE ATC&nbsp;&nbsp;&nbsp;&nbsp;</th>
    <th scope="col">AVERAGE ADP&nbsp;&nbsp;&nbsp;&nbsp;</th>
    <th scope="col">AVERAGE UNIX&nbsp;&nbsp;</th>
  </tr>
</thead>

<tbody>
    <?php 
$connect=mysqli_connect("localhost","root","","user_db") or die("connection failed");
$query="Write query here";
$result=mysqli_query($connect,$query);
while($row=mysqli_fetch_assoc($result))
{
    ?>
    <tr>
    <td><?php echo $row['stuid']?></td>
        <td><?php echo $row['me']?></td>
        <td><?php echo $row['cn']?></td>
        <td><?php echo $row['dbms']?></td>
        <td><?php echo $row['atc']?></td>
        <td><?php echo $row['adp']?></td>
        <td><?php echo $row['unix']?></td>
        <td><?php echo $row['me1']?></td>
        <td><?php echo $row['cn1']?></td>
        <td><?php echo $row['dbms1']?></td>
        <td><?php echo $row['atc1']?></td>
        <td><?php echo $row['adp1']?></td>
        <td><?php echo $row['unix1']?></td>
        <td><?php echo $row['me2']?></td>
        <td><?php echo $row['cn2']?></td>
        <td><?php echo $row['dbms2']?></td>
        <td><?php echo $row['atc2']?></td>
        <td><?php echo $row['adp2']?></td>
        <td><?php echo $row['unix2']?></td>
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