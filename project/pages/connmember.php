<?php

if(isset($_POST['submit']))
{
    $sname= "localhost";
	$unmae= "root";
	$password = "";
	$db_name = "wt_sum21_c_final";
    

    
    $name = $_POST['name'];
	$email = $_POST['email'];
	$gender = $_POST['gender'];
	$dob = $_POST['dob'];
    
    $conn = mysqli_connect($sname, $unmae, $password, $db_name);
    
    $query = "INSERT INTO `membership`(`name`,`email`,`gender`,`dob`) VALUES ('$name','$email','$gender','$dob')";
    
    $result = mysqli_query($conn,$query);
    

    if($result)
    {
        echo 'Data Inserted';
    }
    
    else{
        echo 'Data Not Inserted';
    }
    
    mysqli_close($conn);
}

?>

