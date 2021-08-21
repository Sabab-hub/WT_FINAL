<?php


$nameErr = $emailErr = $genderErr = $dobErr =  "";
$name = $email = $gender = $dob = "";

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
    <div class="css4">
	<form action="../controller/connmember.php" method="POST">
	<table border ='1' border="2" width="80%" class="table4" >
			 <tr>	
				<td>

                 <a href="homepage.php"><img src="../img/CLOUDFUNDING.PNG" alt="Logo"></a>



            </td>
       
            <td colspan='2'align="right">
			
                 <a href = "homepage.php" name="username" > </a>
            
        </td>
		</tr>
		
		<tr>		
			<td>
			<b  style="color:#800000; ">Donator</b>
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
        <table border="1" width=80% align="center">

        <tr>
            <th colspan="3">
                <h3 align="center"  style="color:#800000; ">Membership Form</h3>
            </th>
        </tr>
        <tr>
            <td>
                <p  style="color:#800000; ">Name :</p>
            </td>
            <td><input name="name" type="text" value="<?php echo $name;?>" ><span class="error"  > * <?php echo $nameErr;?></span></td>
            <td width = 40px></td>
        </tr>
        <tr>

        <td>
                <p  style="color:#800000; ">Email :</p>
            </td>
            <td><input name="email" type="email" value="<?php echo $email;?>" ><span class="error" > * <?php echo $emailErr;?></span></td>
			
			
            <td width = 40px></td>
        </tr>
        <tr>
         <td>
                <p  style="color:#800000; ">Gender :</p>
           </td>
           <td>
               <input type="radio" name="gender" value="M"> Male
                <input type="radio" name="gender" value="F"> Female
                <input type="radio" name="gender" value="O"> Other

                <span class="error"> * <?php echo $genderErr;?></span>

            </td>
            <td width = 40px></td>
        </tr>
        <tr>
            <td>
                <p  style="color:#800000; ">Date of Birth :</p>
            </td>
			
            <td>	   
								 <input name="dob" type="date" size="1" value="<?php echo $dob;?>" ><span class="error" >* <?php echo $dobErr;?></span>
								
              
        </td>
        
           
        <td width = 40px></td>
        </tr>        
     
	<tr height = 40px>    
	<td colspan="3" align="right">    
		<div id="b1" align="Center" > <button type="submit" name= "submit" value="Submit">Submit</button></div>
	</td>
            
	</tr>

	</table>
			
			
			
			</table>
				
    </form>		
    </div>
</body>
</html
