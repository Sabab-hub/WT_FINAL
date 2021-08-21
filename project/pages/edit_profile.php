<?php

$nameErr = $emailErr = $genderErr = $usernameErr = $passwordErr = $phoneErr = $confirmpassErr = $bdErr =  "";
$name = $email = $gender = $username = $password = $phone = $confirmpass = $bd = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = run_code($_POST["name"]);
  }
  
if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = run_code($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
    
  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = run_code($_POST["gender"]);
  }

  if (empty($_POST["username"])) {
    $usernameErr = "Username is required";
  } else {
    $username = run_code($_POST["username"]);
  }

   if (empty($_POST["number"])) {
    $phoneErr = "Phone Number is required";
  } else {
    $phone = run_code($_POST["number"]);
    if (is_numeric($phone)) {
$phone= "";
}
else {
$phoneErr = " You did not enter numbers only. Please enter only numbers.(on number)";
}
  }



 if (empty($_POST["DOB"])) {
    $bdErr = "DOB is required";
  } else {
    $bd = run_code($_POST["DOB"]);
  }

}

  function run_code($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>







<!DOCTYPE html>
<html>
<head>
	<title>homepage</title>
	<link rel="stylesheet" type="text/css" href="../design/d1.css">
</head>
<body>
	<div class="css4">
     <form method="POST"  class="table4">
		<br/>
		<table border ='1'   border="2" width="80%" >
			<tr>
				<td>
				<a href="homepage.php"><img src="../img/CLOUDFUNDING.PNG" alt="Logo"></a>
				</td>
				<td align="right" >
					 <a href = "homepage.php" name="username" ></a>
			</td>
			</tr>
			<tr>		
				<td>
				<b style="color: #800000;">Donator</b>
				<hr>
					<ul>
						<a href="homepage.php"><li>Home Page</li></a>
                    <a href="profile.php"><li>View Profile</li></a>
                    <a href="edit_profile.php"><li>Edit Profile</li></a>
					<a href="check_data.php"><li>Check data</li></a>
					<a href="donor.php"><li>Donor</li></a>
					<a href="idea.php"><li>Comsumer request</li></a>
					<a href="member.php"><li>Membership</li></a>
					<a href="help_center.php"><li>Help Center</li></a>
                    <a href="security_system.php"><li>Security System</li></a>
					<a href="Comment.php"><li>Comment</li></a>
                    <a href="login.php"><li>Logout</li></a>
                    <a href="del.php"><li>Delet Account</li></a>
					</ul>
				</td>
				<td width=80%> 
					<fieldset>
						<legend style="color: #800000;"><b>EDIT PROFILE</b></legend>
						<table>
                            <tr>
								<td style="color: #800000;">Name</td>
								<td style="color: #800000;">:</td>
								<td><input name="name" type="text" value="<?php echo $name;?>" ><span class="error"  > * <?php echo $nameErr;?></span></td>
							</tr>		
							
							<tr>
								<td style="color: #800000;">Email</td>
								<td style="color: #800000;">:</td>
								<td><input name="email" type="email" value="<?php echo $email;?>" ><span class="error" > * <?php echo $emailErr;?></span></td>
						       
							</tr>						
							 <tr>
								<td style="color: #800000;">Number</td>
								<td style="color: #800000;">:</td>
								<td><input name="number" type="text" value="<?php echo $phone;?>" ><span class="error" > * <?php echo $phoneErr;?></span></td>
							</tr>
							<tr>
								<td style="color: #800000;">Gender</td>
								<td style="color: #800000;">:</td>
								<td>	 
									<input name="gender" type="radio" >Male
									<input name="gender" type="radio" >Female
									<input name="gender" type="radio" >Other
								
								<span class="error"> * <?php echo $genderErr;?></span></td>
							</tr>
							
							<tr>
								<td style="color: #800000;">Date of Birth</td>
								<td style="color: #800000;">:</td>
								<td>	   
									    <input name="DOB" type="Date" size="1" value="<?php echo $bd;?>">
								<span class="error"> * <?php echo $bdErr;?></span></td>
							</tr>
					
							
						</table>	
						<hr/>
						
					<div id="b1" align="Center" > <button type="submit" name= "submit" value="Submit">Submit</button></div>
					
				</fieldset>
				</tr>			
            
			</table>
				
    </form>	
    </div>	
</body>
</html
