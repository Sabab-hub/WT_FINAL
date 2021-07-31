<?
include 'Models/dbconfig.php';

if(isset($_POST["signup"])){
function insertUser($name, $email, $uname, $pass, $conpass)
    {
        $query="insert into users values ('$name', $email, '$uname', '$pass', '$conpass')";
        return execute($query);
    }

    function authenticateUser($email,$pass){
        $query="select * where User name='$uname' and Password='$pass'";
        $rs=get($query);
        if(count($rs)>0){
            return true;
        }
        return false;
    }
}
?>