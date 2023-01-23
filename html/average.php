<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/display.css">
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
                <li><li><a href="newpage.php" >Log out</a></li></li>
            </ul>
        </nav>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">ME</th>
      <th scope="col">CN</th>
      <th scope="col">DBMS</th>
      <th scope="col">ATC</th>
      <th scope="col">ADP</th>
      <th scope="col">UNIX</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <d></d>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2"></td>
      <td></td>
    </tr>
  </tbody>
</table>
    <?php 
$connect=mysqli_connect("localhost","root","","user_db") or die("connection failed");
$query="SELECT stuid,me,me1,me2,cn,cn1,cn2,dbms,dbms1,dbms2,atc,atc1,atc2,adp,adp1,adp2,unix,unix1,unix2,avg((me+me1+me2)/3) as totalme,avg((cn+cn1+cn2)/3) as totalcn,avg((dbms+dbms1+dbms2)/3) as totaldbms,avg((atc+atc1+atc2)/3) as totalatc,avg((adp+adp1+adp2)/3) as totaladp,avg((unix+unix1+unix2)/3) as totalunix from user_data,user_data1,user_data2 WHERE stuid=stuid1 AND stuid1=stuid2 group by (stuid) ";
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