

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
$query="select ud.*,uf.name from user_form uf,user_data ud where uf.id=ud.stuid  ";
$result=mysqli_query($connect,$query);
while($row=mysqli_fetch_assoc($result))
{
    ?>
    <tr>
        <d><?php echo $row['me']?></d>
        <d><?php echo $row['cn']?></d>
        <d><?php echo $row['dbms']?></d>
        <d><?php echo $row['atc']?></d>
        <d><?php echo $row['adp']?></d>
        <d><?php echo $row['unix']?></d><br>
    </tr>
    <?php
}
?>

</body>
</html>