<?php




$nameErr =  $genderErr = $amountErr = $ccardErr = $dobErr =  "";
$name = $gender= $amount = $ccard = $dob = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = run_code($_POST["name"]);
  }

    
  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = run_code($_POST["gender"]);
  }




   if (empty($_POST["ccard"])) {
    $ccardErr = "Card Number is required";
  } else {
    $ccard = run_code($_POST["ccard"]);
    if (is_numeric($ccard)) {
$ccard= "";
}
else {
$ccardErr = " You did not enter numbers only. Please enter only numbers.(on card)";
}
  }


     if (empty($_POST["amount"])) {
    $amountErr = "amount Number is required";
  } else {
    $amount = run_code($_POST["amount"]);
    if (is_numeric($amount)) {
$amount= "";
}
else {
$amountErr = " You did not enter numbers only. Please enter only numbers.(on amount)";
}
  }


 if (empty($_POST["dob"])) {
    $dobErr = "dob is required";
  } else {
    $dob = run_code($_POST["dob"]);
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
	<div class="css4" >
	<form  action="../controller/donorcon.php" method="POST" >
	<table border ='1' border="2" width="80%" class="table4" >
			 <tr>	
				<td>

                 <a href="homepage.php"><img src="../img/CLOUDFUNDING.PNG" alt="Logo"></a>



            </td>
       
            <td colspan='2'align="right">
			
                 <a href = "homepage.php" name="username" >
            
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
						<legend style="color: #800000;"><b>Donor</b></legend>
						<table>
						<tr>
								<td style="color: #800000;">Name</td>
								<td style="color: #800000;">:</td>
								<td><input name="name" type="text" value="<?php echo $name;?>"><span class="error"  >* <?php echo $nameErr;?></span></td>
							</tr>

							<td style="color: #800000;">Date of Birth</td>
								<td style="color: #800000;">:</td>
								<td>	   
								 <input name="dob" type="date" size="1" value="<?php echo $dob;?>" ><span class="error" >* <?php echo $dobErr;?></span>
								</td>
							</tr>
							<tr>
								<td style="color: #800000;">Gender</td>
								<td style="color: #800000;">:</td>
								<td>	 
									<input name="gender" type="radio" value="M">Male
									<input name="gender" type="radio" value="F">Female
									<input name="gender" type="radio" value="O">Other
								
								<span class="error" >* <?php echo $genderErr;?></span></td>
							</tr>
                            <tr>
								<td style="color: #800000;">Amount</td>
								<td style="color: #800000;">:</td>
								<td><input name="amount" type="text"  value="<?php echo $amount;?>"><span class="error">* <?php echo $amountErr;?></span></td>
							</tr>		
							
							<tr>
								<td style="color: #800000;">Credit Card Number</td>
								<td style="color: #800000;">:</td>
								<td><input name="ccard" type="text" value="<?php echo $ccard;?>"> <span class="error"  >* <?php echo $ccardErr;?></span></td>
							</tr>						
				
						</table>	
						<hr/>
						
					<div id="b1" align="Center" > <button type="submit" name= "submit" value="submit">Submit</button></div>
  
					
				</fieldset>
				</tr>


            
			</table>
				
    </form>	
</div>

</body>
</html
