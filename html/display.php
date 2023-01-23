

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
                <li><li><a href="newpage.php" >LOG OUT</a></li></li>
            </ul>
        </nav>


        <table class="table" border="5">
<thead >
  <tr>

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
$query="select ud.*,uf.name from user_form uf,user_data ud  where uf.id=ud.stuid";
$result=mysqli_query($connect,$query);
while($row=mysqli_fetch_assoc($result))
{
    ?>
    <tr>
    <td><?php echo $row['name']?></td>
        <td><?php echo $row['me']?></td>
        <td><?php echo $row['cn']?></td>
        <td><?php echo $row['dbms']?></td>
        <td><?php echo $row['atc']?></td>
        <td><?php echo $row['adp']?></td>
        <td><?php echo $row['unix']?></td>
        
        <br>
    </tr>
    <?php
}
?>
</tbody>


<table class="table" border="5">

<thead >
  <tr>
    <th scope="col">NAME&nbsp;</th>
    <th scope="col">ME1&nbsp;&nbsp;&nbsp;&nbsp;</th>
    <th scope="col">CN1&nbsp;&nbsp;&nbsp;&nbsp;</th>
    <th scope="col">DBMS1&nbsp;</th>
    <th scope="col">ATC1&nbsp;&nbsp;&nbsp;&nbsp;</th>
    <th scope="col">ADP1&nbsp;&nbsp;&nbsp;&nbsp;</th>
    <th scope="col">UNIX1&nbsp;&nbsp;</th>
  </tr>
</thead>
  
  <tbody>
<?php
$query1="select ud1.*,uf.name from user_form uf,user_data1 ud1  where uf.id=ud1.stuid1";
$result=mysqli_query($connect,$query1);
while($row=mysqli_fetch_assoc($result))
{
    ?>
    <tr>
    
    <td><?php echo $row['name']?></td>
        <td><?php echo $row['me1']?></td>
        <td><?php echo $row['cn1']?></td>
        <td><?php echo $row['dbms1']?></td>
        <td><?php echo $row['atc1']?></td>
        <td><?php echo $row['adp1']?></td>
        <td><?php echo $row['unix1']?></td>
        
        <br>
    </tr>
    <?php
}
?></tbody>




<table class="table" border="5">
<thead >
  <tr>
    <th scope="col">NAME&nbsp;</th>
    <th scope="col">ME2&nbsp;&nbsp;&nbsp;&nbsp;</th>
    <th scope="col">CN2&nbsp;&nbsp;&nbsp;&nbsp;</th>
    <th scope="col">DBMS2&nbsp;</th>
    <th scope="col">ATC2&nbsp;&nbsp;&nbsp;&nbsp;</th>
    <th scope="col">ADP2&nbsp;&nbsp;&nbsp;&nbsp;</th>
    <th scope="col">UNIX2&nbsp;&nbsp;</th>
  </tr>
</thead>
  
  <tbody>

<?php
$query2="select ud2.*,uf.name from user_form uf,user_data2 ud2  where uf.id=ud2.stuid2";
$result=mysqli_query($connect,$query2);
while($row=mysqli_fetch_assoc($result))
{
    ?>
    <tr>
    <td><?php echo $row['name']?></td>
        <td><?php echo $row['me2']?></td>
        <td><?php echo $row['cn2']?></td>
        <td><?php echo $row['dbms2']?></td>
        <td><?php echo $row['atc2']?></td>
        <td><?php echo $row['adp2']?></td>
        <td><?php echo $row['unix2']?></td>
        
        <br>
    </tr>
    <?php
}
?>
<tbody>
</body>
</html>


