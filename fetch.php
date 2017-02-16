<?php
$con=mysqli_connect("localhost","root","","demo");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM users");

echo "<center><table border='1'>
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>Email</th>
<th>Gender</th>
<th>Education</th>
<th>Skills</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['firstname'] . "</td>";
echo "<td>" . $row['lastname'] . "</td>";
echo "<td>" . $row['email'] . "</td>";
echo "<td>" . $row['gender'] . "</td>";
echo "<td>" . $row['education'] . "</td>";
echo "<td>" . $row['skills'] . "</td>";
echo "</tr>";
}
echo "</table></center>";

mysqli_close($con);
?>