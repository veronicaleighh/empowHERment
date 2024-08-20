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
	echo '<script> window.location.href = "homepage.html" </script>';    
	
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
    <link rel="stylesheet" href="registration.css">
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
            <a href="register.php"> Register </a>
        
        </div>

        </nav>
        </nav>

    </header>
 
    <!-- container div -->
    <div class="container">
 
        <!-- login-register -->
        <div class="slider"></div>
        <div class="btn">
            <button class="login">Login</button>
            <button class="signup">Register</button>
        </div>
 
        <!-- Form -->
        <div class="form-section">

             <!-- login form -->
            <div class="login-box">

                <form method="post">

                    <input type="text" class="name ele" name="username1" placeholder="Username" required>
                    <input type="password" class="password ele" name="password" placeholder="Password" required>
                    <a href="homepage.html" class="clkbtn"> Login </a>

                </form>
            </div>
 
            <!-- signup form -->
            <div class="signup-box">

                <form method="post">

                    <input type="text" class="name ele" name="first_name" placeholder="First Name" required>
                    <input type="text" class="name ele" name="last_name" placeholder="Last Name" required>
                    <input type="text" class="name ele" name="username" placeholder="Preferred Username" required>
                    <input type="email" class="email ele" name="email" placeholder="Email Address" required>
                    <input type="password" class="password ele" name="password" placeholder="Password" required>
                    <input type="text" class="number ele" name="mobile_number" placeholder="Mobile Number" required>
                    <input type="submit" class="clkbtn" name="submit" value="Register" style="text-align: center" placeholder="Register" required>

                </form>
            </div>
        </div>

    <script src="registration.js"></script>
</body>
 
</html>