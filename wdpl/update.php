<?php
//$stid=$_GET['stid'];
include("../control/cnfig.php");
$sql="SELECT * FROM stdinfo WHERE stid=123";
$result=mysqli_query($myconn,$sql);
echo'<table border="2px"> 
<tr><th> student Id </th>
<th> student Name </th>
<th> student Username </th>
<th> student password </th>
<th> Action </th></tr>';
while($row=mysqli_fetch_array($result))
{
$stid=$row['stid'];
$name=$row['name'];
$uname=$row['uname'];
$pass=$row['password'];
echo '<tr><td><input type="text" value="'.$stid.'"/></td>
<td><input type="text" value="'.$name.'"/></td>
<td><input type="text" value="'.$uname.'"/></td>
<td><input type="text" value="'.$pass.'"/></td>
<form id="" method="" action="";><input type="submit" value="Update data" style="color:green;"/>

</form>
</td>
</tr>
';
}
echo '</table>';
?>