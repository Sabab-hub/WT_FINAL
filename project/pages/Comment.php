<?php

$nameErr =  "";
$name  = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = run_code($_POST["name"]);
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
			<p style="color: #800000;"><b>Donator</b> </p>
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
			<td width=80% >
			
			<table >
			<h3 align="Center" style="color: #800000;">Post a Comment:</h3>
			<form action="" method="post"  >
				<p style="color: #800000;"> <b> Name : </b></p>
			<input type="text" name="name"  value="<?php echo $name;?>" ><span class="error"  > * <?php echo $nameErr;?></span><br>
				<p style="color: #800000;"> <b> Comment : </b></p><textarea  cols="30" name="Comment" ></textarea><br><br>
			<div id="b1" align="Center" > <button type="submit" name= "submit" value="Post Comment">Post Comment</button></div>
  

    </form>	
   <hr>
 <h3> <p style="color: #800000;"> All Comment</p></h3> 
  

    </table>	
			
			
			</table>
				
    </form>	

    </div>

</body>
</html
