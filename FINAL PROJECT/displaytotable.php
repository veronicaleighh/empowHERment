<?php
	$conn = mysqli_connect('localhost','root','','newdb');
	if(mysqli_connect_error()){
		echo 'MySQL Error: ' . mysqli_connect_error();
	}
	else{
		$query = "SELECT * FROM person";
		$result = mysqli_query($conn,$query);
		if ($result)
		{ 
		echo "<table border='1'>
			<thead>
				<td>First Name</td>
				<td>Last Name</td>
				<td>Username</td>
				<td>Age</td>
				<td>Email Address</td>
				<td>Password</td>
				<td>Mobile Number</td>
			</thead>";
		while($row = mysqli_fetch_row($result)){
			echo "<tr>"; 
			echo "<td>$row[0]</td>";
			echo "<td>$row[1]</td>"; 
			echo "<td>$row[2]</td>";
			echo "<td>$row[3]</td>";
			echo "<td>$row[4]</td>";
			echo "<td>$row[5]</td>";
			echo "<td>$row[6]</td>";
			echo "</tr>";
			}
		}
	}
?>

