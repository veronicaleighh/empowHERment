<?php
	$conn = mysqli_connect('localhost','root','','newdb');
	if(mysqli_connect_error()){
		echo 'MySQL Error: ' . mysqli_connect_error();
		}
		else{
			$query = "UPDATE person SET age=36 WHERE first_name='Arlene';";
			$result = mysqli_query($conn,$query);
			if ($result)
			{
				echo 'Update of data completed.';
				}
				else{
					echo 'Update error!';
				}
		mysqli_close($conn);
	}
?>