<?php
		include 'header.php';
		include 'db.php';
		$sql = "select * from students";
		
		$result = mysqli_query($conn,$sql);
		echo "<table border='1'>";
			echo "<tr>
					<th>Sno</th>
					<th>Name</th>
					<th>Roll</th>
				  </tr>";
		while ($row = mysqli_fetch_assoc($result)){
			echo "<tr>";
				echo "<td>".$row["Sno"]."</td>";
				echo "<td>".$row["Name"]."</td>";
				echo "<td>".$row["Roll"]."</td>";
			echo "</tr>";
		}
		echo "</table>";
	
		include 'footer.php';
	
	
	
	
?>