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
$query="  ";
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