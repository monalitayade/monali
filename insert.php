<?php

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="demo"; // Database name 
$tbl_name="users"; // Table name 

// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// Get values from form 
$name=$_POST['fname'];
$lastname=$_POST['lname'];
$mail=$_POST['email'];
$gen=$_POST['gender'];
$educ=$_POST['edu'];
$skill=$_POST['skills'];

// Insert data into mysql 
$sql="INSERT INTO $tbl_name(firstname, lastname, email, gender, education, skills)VALUES('$name', '$lastname', '$mail','$gen','$educ','$skill')";
$result=mysql_query($sql);

// if successfully insert data into database, displays message "Successful". 
if($result){
echo "Successful";
echo "<BR>";
echo "<a href='fetch.php'>Go to table</a>";
}

else {
echo "ERROR";
}
?> 

<?php 
// close connection 
mysql_close();
?>