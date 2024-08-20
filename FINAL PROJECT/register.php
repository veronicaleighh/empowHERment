<?php 

include "connect.php";

if (isset($_POST['submit'])) {

  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $mobile_number = $_POST['mobile_number'];

  $sql = "INSERT INTO `customers` (`first_name`,`last_name`,`username`, `email`, `password`,`mobile_number`) VALUES ('$first_name','$last_name','$username','$email','$password','$mobile_number')";

  if ($conn->query($sql) === TRUE) {
    echo "Registered successfully.";
	echo '<script> window.location.href = "homepage.php" </script>';    
	
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> empowHERment: Beauty, Health and Wellness </title>
    <link rel="stylesheet" href="registerstyle.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" type="image/x-icon" href="img/favicon2.png">
</head>

<body>
    <header>
    <div class = "logo"> <a href="homepage.php"><img src="img/empowherment.png"></a> </div>    
        <label for="menu-bar" class='bx bx-menu'></label>
        
        <nav class="navbar">
            <a href="homepage.php"> Home </a>
            <a href="Beauty.php"> Beauty </a>
            <a href="Health_Wellness.php"> Health and Wellness </a>
            <a href="#products"> Products </a>
            <a href="AboutUs.php"> About Us </a>
            <a href="registration.php"> Register </a>
        
        </div>

        </nav>
        </nav>

    </header>

   <body>
		<div class="container"> 
			<div class="card">
				<div class="inner-box">
					<div class="login">
				
					<h2> REGISTER </h2>
					
					<form method="post">
					
						<input type="text" class="input-box" placeholder="First Name" name="first_name" required>
						<input type="text" class="input-box" placeholder="Last Name" name="last_name" required>
						<input type="text" class="input-box" placeholder="Username" name="username" required>
						<input type="text" class="input-box" placeholder="Email Address" name="email" required>
						<input type="password" class="input-box" placeholder="Password" name="password" required>
						<input type="text" class="input-box" placeholder="Mobile Number" name="mobile_number" required>
					
					<input type="submit" class= "submit-btn" name="submit"> Register </input>
				
					</form>

					</div>
				</div>
			</div>
		</div>
   </body>

   <style> 
   @import url('https://fonts.googleapis.com/css2?family=Great+Vibes&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,900;1,300&display=swap');

	body {
		background-image: url("bggg.jpg");  
		background-repeat: no-repeat; 
		background-attachment: fixed; 
		background-size: cover;
	}
	</style>

 </html>