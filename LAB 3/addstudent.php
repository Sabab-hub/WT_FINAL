<?php include 'controllers/StudentController.php';
?>
<!--addproduct starts -->
	<div class="center">
		<h5 class="text-danger"><?php echo $err_db;?></h5>
		<form action="" method="post" class="form-horizontal form-material">
			<div class="form-group">
				<h4 class="text">Name:</h4> 
				<input type="text" name="name" class="form-control">
			</div>
			<div class="form-group">
				<h4 class="text">ID:</h4> 
				<input type="text" name="name" class="form-control">
			</div>
			<div class="form-group">
				<h4 class="text">DOB</h4> 
				<input type="text" name="name" class="form-control">
			</div>
			<div class="form-group">
				<h4 class="text">CGPA:</h4> 
				<input type="text" name="name" class="form-control">
			</div>
			<div class="form-group">
				<h4 class="text">Credits:</h4> 
				<input type="text" name="name" class="form-control">
			</div>
			
			<div class="form-group text-center">
				
				<input type="submit" name="add_Student" class="btn btn-success" value="Add Student" class="form-control">
			</div>
		</form>
	</div>