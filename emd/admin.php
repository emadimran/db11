<?php

$con=mysqli_connect("localhost","root","","emad");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM product ");



while($row = mysqli_fetch_array($result))
{

echo $row ['Serial'];	
echo $row ['id'];	
echo $row ['name'];	
echo $row ['type'];
echo $row ['company'];
echo $row ['price'];			
}
mysqli_close($con);

?>
<br>
<br>
<?php

$con=mysqli_connect("localhost","root","","emad");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM User ");



while($row = mysqli_fetch_array($result))
{
echo
"<tr>
<th>Name </th>
<th>id </th>
</tr>";
echo "<td>" .$row ['Name'] . "<td>";
echo "<td>" .$row ['id'] . "<td>";	


mysqli_close($con);
}
?>