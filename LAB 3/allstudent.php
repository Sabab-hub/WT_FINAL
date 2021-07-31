<?php include 'controllers/StudentController.php';
	$students = getAllStudents();
?>
<!--All Categories starts -->

<div class="center">
	<h3 class="text">All students</h3>
	<table class="table table-striped">
		<thead>
			<th>Name</th>
			<th>ID</th>
			<th>DOB</th>
			<th>Credits</th>
			<th>CGPA</th>
			<th>Dept_id</th>
			
		</thead>
		<tbody>
			<?php
				$i = 1;
				foreach($students as $s){
					echo "<tr>";
						echo "<td>$i</td>";
						echo "<td>".$s["name"]."</td>";
						echo "<td>".$s["id"]."</td>";
						echo "<td>".$s["dob"]."</td>";
						echo "<td>".$s["credit"]."</td>";
						echo "<td>".$s["cgpa"]."</td>";
						echo "<td>".$s["deptid"]."</td>";
						echo '<td><a href="editstudent.php?id='.$s["id"].'" class="btn btn-success">Edit</a></td>';
						echo '<td><a class="btn btn-danger">Delete</td>';
					echo "</tr>";
					$i++;
				}
			?>
			
		</tbody>
	</table>
</div>