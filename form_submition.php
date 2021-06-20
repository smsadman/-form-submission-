[12:50 PM] MIR MD. KAWSUR
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title> Form Submition  </title>
</head>
<body>
<h1>  Form Submition </h1> <?php
define("filepath", "data.txt"); $firstName = $lastName = "";
$firstNameErr = $lastNameErr = "";
$successfulMessage = $errorMessage = "";
$presentAddress = "";
$permanentAddress="";
$emailAddress = $phone ="";
$link = "";

$uname = "";
$password = "";

$flag = false; if($_SERVER['REQUEST_METHOD'] === "POST") {
$firstName = $_POST['firstname'];
$lastName = $_POST['lastname'];
$presentAddress =$_POST['presentaddress'];
$permanentAddress = $_POST['permanentaddress'];
$emailAddress =$_POST['emailAddress'];
$phone = $_POST['phone'];
$link = $_POST['link'];
$uname =$_POST['uname'];
$password = $_POST['password'];

 if(empty($firstName)) {
$firstNameErr = "First name can not be empty!";
$flag = true;
}
if(empty($lastName)) {
$lastNameErr = "Last name can not be empty!";
$flag = true;
}
if(empty($presentAddress)) {
$presentAddErr = "Present address can not be empty!";
$flag = true;
}

if(empty($permanentAddErr)) {
$permanentAddErr = "Permanent  address can not be empty!";
$flag = true;
}



if(empty($emailErr)) {
$emailErr = " Email  address can not be empty!";
$flag = true;
}


if(empty($phoneErr)) {
$phoneErr = " Phone  number  can not be empty!";
$flag = true;
}


if(empty($linkErr)) {
$linkErr = " Link can not be empty!";
$flag = true;
}

if(empty($uname)) {
$unameErr = " uname  can not be empty!";
$flag = true;
}

if(empty($password)) {
$passwordErr = " password can not be empty!";
$flag = true;
}

if(!$flag) {
$firstName = test_input($firstName);
$lastName = test_input($lastName);
$presentAddress =test_($presentAddress);
$permanentAddress =test_($permanentAddress);
$emailAddress = test_($emailAddress);
$phone = test_($phone);
$link = test_($link);
$uname = test_($uname);
$password = test_($password);
$data = $firstName . "," . $lastName . "," . $presentAddress . "," . $permanentAddress . "," . $emailAddress .  "," . $phone . "," . $link . "," . $uname . "," . $password;

$result1 = write($data);
if($result1) {
$successfulMessage = "Successfully saved.";
}
else {
$errorMessage = "Error while saving.";
}
}
} function write($content) {
$resource = fopen(filepath, "a");
$fw = fwrite($resource, $content . "\n");
fclose($resource);
return $fw;
} function test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}
?>



 <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
 <fieldset>
	       <legend> Basic Information:</legend>
<label for="firstname">First Name <span style="color: red;">*</span>: </label>
<input type="text" name="firstname" id="firstname">
<span style="color: red;"><?php echo $firstNameErr; ?></span>
<br><br> <label for="lastname">Last Name <span style="color: red;">*</span>: </label>
<input type="text" name="lastname" id="lastname">
<span style="color: red;"><?php echo $lastNameErr; ?></span>
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
<br> <br>
<fieldset>
    <legend> Contact Information::</legend>
<label for="paddress"> Present Address  <span style="color: red;">*</span>: </label>
<input type="text" name="pname" id="">
<span style="color: red;"><?php echo $presentAddErr; ?></span>
<br><br> <label for="paddress">Permanent Address <span style="color: red;">*</span>: </label>
<input type="text" name="paddress" id="">
<span style="color: red;"><?php echo $permanentAddErr; ?></span>
<br>
<label for="email"> Email Address  <span style="color: red;">*</span>: </label>
<input type="text" name="email" id="">
<span style="color: red;"><?php echo $emailErr; ?></span>
<br><br> <label for="phone">Phone <span style="color: red;">*</span>: </label>
<input type="text" name="phone" id="">
<span style="color: red;"><?php echo $phoneErr; ?></span>

<br><br> <label for="link"> Link <span style="color: red;">*</span>: </label>
<input type="text" name="link" id="">
<span style="color: red;"><?php echo $linkErr; ?></span>
</fieldset>
<br > 
<fieldset>
	       <legend> Account Information:</legend>
<label for="uname"> User Name  <span style="color: red;">*</span>: </label>
<input type="text" name="uname" id="uname">
<span style="color: red;"><?php echo $unameErr; ?></span>
<br><br> <label for="password"> Password  <span style="color: red;">*</span>: </label>
<input type="text" name="password" id="password">
<span style="color: red;"><?php echo $passwordErr; ?></span>
<br><br>
</fieldset>

<br><br> <input type="submit" name="submit" value="Register">
</form> <br> <span style="color: green;"><?php echo $successfulMessage; ?></span>
<span style="color: red;"><?php echo $errorMessage; ?></span> <?php $fileData = read();

$fileDataExplode = explode("\n", $fileData); echo "<ol>";
for($i = 0; $i < count($fileDataExplode) - 1; $i++) {
echo "<li>" . $fileDataExplode[$i] . "</li>";
}
echo "</ol>"; function read() {
$resource = fopen(filepath, "r");
$fz = filesize(filepath);
$fr = "";
if($fz > 0) {
$fr = fread($resource, $fz);
}
fclose($resource);
return $fr;
}
?>
</body>
</html>

