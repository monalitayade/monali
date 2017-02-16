<html>
<title></title>
<body>
	<h2>
    <center>Add User</center>
	</h2>
    <center>
    	<form name="form1" method="post" action="insert.php">
    	<h3>First Name:</h3>
    	<input type="text" name="fname">
    	<h3>Last Name:</h3>
    	<input type="text" name="lname"> 
    	<h3>Email:</h3>
    	<input type="text" name="email" >
    	<h3>Gender:</h3>
    	<input type="radio" name="gender" value="male"> Male
        <input type="radio" name="gender" value="female"> Female<br>
        <h3>Education:</h3>
        <select name="edu">
        <option value="be">BE</option>
  		<option value="bsc">BSc</option>
  		<option value="btech">BTech</option>
  		</select>
    	<h3>Skills:</h3>
    	<textarea name="skills"></textarea> <br>
    	<input type="submit" name="submit" value="submit">  
    </form>
    </center>
</body>
</html>