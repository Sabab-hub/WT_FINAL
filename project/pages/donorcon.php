<?php

if(isset($_POST['submit']))
{
    $sname= "localhost";
	$unmae= "root";
	$password = "";
	$db_name = "wt_sum21_c_final";
    

    $ccard = $_POST['ccard'];
    $name = $_POST['name'];
	$amount = $_POST['amount'];
	$dob = $_POST['dob'];
	$gender = $_POST['gender'];
    
    $conn = mysqli_connect($sname, $unmae, $password, $db_name);
    
    $query = "INSERT INTO `donor`(`ccard`, `name`,`amount`,`dob`,`gender`) VALUES ('$ccard','$name','$amount','$dob','$gender')";
    
    $result = mysqli_query($conn,$query);
    

    if($result)
    {
        echo 'Data Inserted';
		//header("location: ../pages/donor.php");
    }
    
    else{
        echo 'Data Not Inserted';
    }
    
    mysqli_close($conn);
}

?>