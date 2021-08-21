<?php 

if (isset($_POST['submit'])) {
    if (isset($_POST['name']) && isset($_POST['username']) &&
        isset($_POST['gender']) && isset($_POST['email']) &&
        isset($_POST['number']) && isset($_POST['password'])&& 
		isset($_POST['cpassword'])&& isset($_POST['dob'])) {
			
        $name = $_POST['name'];
        $username = $_POST['username'];
		$gender = $_POST['gender'];
		 $email = $_POST['email'];
		 $number = $_POST['number'];
        $password = $_POST['password'];
		$cpassword = $_POST['cpassword'];
        $dob = $_POST['dob'];
        


$host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "wt_sum21_c_final";//connection with sql file.

        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
		//echo "connect";
		
		 if ($conn->connect_error) {
            die('Could not connect to the database.'); // if there is any error then show error
        }
        else {
            $Select = "SELECT email FROM registration WHERE email = ? LIMIT 1"; // if email are same then data is not submit successfully.
            $Insert = "INSERT INTO registration(name, username,  gender,  email, number, password,cpassword, dob) values(?, ?, ?, ?, ?, ?, ?, ?)";

            $stmt = $conn->prepare($Select);
            $stmt->bind_param("s", $email); // it mantion to the email limit 1,,,, s=String
            $stmt->execute();
            $stmt->bind_result($resultEmail);
            $stmt->store_result();// retriving a data from a colume only email
            $stmt->fetch();
            $rnum = $stmt->num_rows; // how many row are selected

            if ($rnum == 0) {
                $stmt->close();

                $stmt = $conn->prepare($Insert);
                $stmt->bind_param("ssssisss",$name, $username,$gender,  $email,$number,$password,$cpassword, $dob);
                if ($stmt->execute()) {
                    echo "New record inserted sucessfully.";
					header("location: ../pages/login.php");
                }
                else {
                    echo $stmt->error;
                }
            }
            else {
                echo "Someone already registers using this email.";
            }
            $stmt->close();
            $conn->close();
        }
    }
    else {
        //echo "All field are required."; //if all file are not empty then required.
       // die();
	   header("location: ../pages/login.php");
    }
}
else {
    echo "Submit button is not set";
}