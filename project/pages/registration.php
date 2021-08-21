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

  if (empty($_POST["password"])) {
    $passwordErr = "Password is required";
  } else {
    $password = run_code($_POST["password"]);
  }


 if (empty($_POST["copassword"])) {
    $confirmpassErr = "confirmpass is required";
  } else {
    $confirmpass = run_code($_POST["cpassword"]);
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

if (empty($_POST["dob"])) {
    $bdErr = "DOB is required";
  } else {
    $bd = run_code($_POST["dob"]);
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
<html >
<head>
	<title>REGISTRATION</title>
	 <link rel="stylesheet" type="text/css" href="../design/d1.css">
</head>
<body>


	<div class="css3">
	<fieldset class="table3" >
		<legend style="color: #800000;"><b>REGISTRATION</b></legend>
		<form action="../controller/db_conn.php" method="POST">
			<br/>
			
				<p style="color: #800000;"> Name : </p>  <span class="error"> *<?php echo $nameErr;?></span>
					<input name="name" type="text" value="<?php echo $name;?>" > 
					
			<p style="color: #800000;"> UserName : </p><span class="error"> *<?php echo $usernameErr;?></span><br>
					<input name="username" type="text" value="<?php echo $username;?>">
					
            <p style="color: #800000;">  Email :</p> <span class="error"> *<?php echo $emailErr;?></span>
				
						<input name="email" type="text" value="<?php echo $email;?>" >
					
	        <p style="color: #800000;">  Number :</p> <span class="error"> *<?php echo $phoneErr;?></span>
					<input name="number" type="text" value="<?php echo $phone;?>">
						

		    <p style="color: #800000;">  Gender : </p> <span class="error"> *<?php echo $genderErr;?></span>	 
									<input name="gender" type="radio" value="M"  >Male
									<input name="gender" type="radio" value="F">Female
									<input name="gender" type="radio" value="O" >Other

				  

				  <br> <br>
				<p style="color: #800000;">  DOB : </p><span class="error"> *<?php echo $bdErr;?></span>
				  <input name="dob" type="date" size="1" value="<?php echo $bd;?>" ><br>


			<p style="color: #800000;">	Password : </p> <span class="error"> *<?php echo $passwordErr;?></span>
				<input name="password" type="password" value="<?php echo $password;?>" >
				
				<p style="color: #800000;">Confirm Password :</p> <span class="error"> *<?php echo $confirmpassErr;?></span>

					<input name="cpassword" type="password" value="<?php echo $confirmpass;?>" >
			
		
		
			<div id="b1" > <button type="submit" name= "submit" value="Submit" >Submit</button></div>
			<div id="b2" > <button type="reset">Reset</button></div>		

		</form>

	</fieldset>
</div>
</body>
</html>
