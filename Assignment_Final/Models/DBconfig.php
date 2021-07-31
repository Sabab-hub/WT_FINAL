<?php
 $servername="localhost";
 $username="root";
 $password="";
 $dbname="assignment";


 function execute($query){
     global $servername,$username,$password,$dbname;
     $conn=mysqli_connect($servername,$username,$password,$dbname);
     if ($conn){
         if (mysqli_query($conn,$query)){
             return true;
         }
         else{
             return mysqli_error($conn);
         }
     }
 }
 function get($query){
    global $servername, $username,$password, $dbname;
    $conn=mysqli_connect($servername,$username,$password, $dbname);
    $data=array();
    if ($conn){
        $result=mysqli_query($conn,$query);
        while($row=mysqli_fetch_assoc($result)){
            $data[]=$row;
        }
    }
    return $data;
}
//$servername = "localhost";
//$username = "root";
//$password = "";
//$dbname = "assignment";

//$conn = mysqli_connect($servername, $username, $password, $dbname);
//if(isset($_POST['submit']))
//{
//if(!empty($_POST['Name']) && !empty($_POST['Email']) && !empty($_POST['User name']) && !empty($_POST['Password']) && !empty($_POST['Confirm password']))
//{
	//$name = $_POST['Name'];
	//$email = $_POST['Email'];
	//$uname = $_POST['User name'];
	//$pass = $_POST['Password'];
	//$conpass = $_POST['Confirm password'];
	
	//$query = "Insert into form(Name, Email, User name, Password, Confirm password) values('$name', '$email', '$uname', '$pass', '$conpass')";
	//$run = mysqli_query($conn, $query) or die(mysqli_error());
	
	//if($run){
		//echo "Submitted";
	//}
	//else {
		//echo "Not Submitted";
	//}
	//}
//}

?>