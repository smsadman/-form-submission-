
  
<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
</head>
<body>
	<h1>Registration Form</h1>
	
	<form action="submit.php" method="POST" autocomplete="on" novalidate>
		
       <fieldset>
	       <legend> Basic Information:</legend>
		<label for="fname">First Name:</label>
		<input type="text" id="fname" name="fname">

		<br><br>

		<label for="lname">Last Name:</label>
		<input type="text" id="lname" name="lname">

		<br><br>
		
		
         <label for="gender">Gender:</label>  <br>
		<input type="radio" id="male" name="gender" value="male">
		<label for="male">Male</label>
		<br>
		<input type="radio" id="female" name="gender" value="female">
		<label for="female">Female</label>
		<br>
		<input type="radio" id="other" name="gender" value="other">
		<label for="other">Other</label>
		<br>

		<br><br>
         <label for="fname">DoB:</label>
		<input type="date" id="date" name="date">
		<br>
		
		
		<label for="city">Religion:</label>
		<select id="city"><!-- multiple -->
			<option value="dhaka">muslim</option>
			<option value="rajshahi">hindus</option>
			<option value="chattagram">boddis</option>
		</select>
		<br><br>

		</fieldset>
       <br><br>
     
	 
	 <fieldset> 
	    <legend> Contact Information:</legend>
		<label for="pname">Present Address:</label>
		<input type="textarea" id="textarea" name="texrarea">
  <br>
       <label for="pname">Permanent Address:</label>
		<input type="textarea" id="textarea" name="texrarea">

		<br><br>
		
		<label for="email">Email:</label>
		<input type="email" id="email" name="email">

 <br>
        <label for="phone">Phone:</label>
		<input type="phone" id="phone" name="phone">

  <br> <br>
  <label for="link">Link:</label>
		<input type="link" id="link" name="link">
      </fieldset>
		<input type="submit" value="Submit">
	</form>
</body>
</html>
© 2021 GitHub, Inc.
Terms
Privacy
Security
Status
Docs
Contact GitHub
Pricing
API
Training
Blog
About
