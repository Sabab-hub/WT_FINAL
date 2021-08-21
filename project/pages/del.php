<?php
 

if(isset($_POST['delete']))
{
    $servername= "localhost";
    $username= "root";
    $password = "";

    $db_name = "cloudfunding";
    
    // get id to delete
    $code = $_POST['code'];
    
    // connect to mysql
    $conn = mysqli_connect($servername, $username, $password, $db_name);
    
    // mysql delete query 
    $query = "DELETE FROM `register` WHERE `code` = $code";
    
    $result = mysqli_query($conn, $query);
    
    if($result)
    {
        echo 'Data Deleted';
    }else{
        echo 'Data Not Deleted';
    }
    mysqli_close($conn);
}

?>



<!DOCTYPE html>

<html>

    <head>

        <title>DELETE DATA </title>
		 <link rel="stylesheet" type="text/css" href="../design/d1.css">
    </head>

    <body>

        <form action="delete.php" method="post">
		<tr>
			<td>
                 <a href="homepage.php"><img src="../img/CLOUDFUNDING.PNG" alt="Logo"></a>
            </td>

            <td align="ceter"></td>
        </tr>
        <tr>
            <td>
                                 
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
                                             
            </td> 

            <br>
            <br>           

            ID TO DELETE:&nbsp;<input type="text" name="code" required>

            <input type="submit" name="delete" value="Clear Data">

        </form>

    </body>

</html>