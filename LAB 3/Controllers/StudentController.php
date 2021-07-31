<?php
	require_once 'models/db_config.php';
	$err_db="";
	if(isset($_POST["add_student"])){
		//doing the validations
		$rs = insertStudent($_POST["name"]);
		if($rs === true){
			header("Location: allstudent.php");
		}
		$err_db = $rs;
	}
	elseif(isset($_POST["edit_student"])){
		//doing the validations
		$rs = editStudent($_POST["name"],$_POST["id"]);
		if($rs === true){
			header("Location: allstudent.php");
		}
		$err_db = $rs;
	}
	
	function insertStudent($name){
		$query = "insert into students values ('$name')";
		return execute($query);
		
	}
	function getAllStudents(){
		$query = "select * from ";
		$rs = get($query);
		return $rs;
	}
	function getStudent($id){
		$query = "select * from students where id=$id";
		$rs = get($query);
		return $rs[0];
	}
	function editStudent($name, $id){
		$query = "update students set name='$name' where id=$id";
		return execute($query);
		
	}
?>
© 2021 GitHub, Inc.