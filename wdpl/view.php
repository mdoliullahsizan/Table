
<?php
include("../control/cnfig.php");
$sql="SELECT * FROM stdinfo";
$result=mysqli_query($myconn,$sql);
echo'<table border="2px"> 
<tr><th> student Id </th>
<th> student Name </th>
<th> student Username </th>
<th> student password </th></tr>';
while($row=mysqli_fetch_array($result))
{
$stid=$row['stid'];
$name=$row['name'];
$uname=$row['uname'];
$pass=$row['password'];
echo '<tr><td>'.$stid.'</td>
<td>'.$name.'</td>
<td>'.$uname.'</td>
<td>'.$pass.'</td>
</tr>
';
}
echo '</table>';
?>

