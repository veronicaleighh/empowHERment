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

    $result = $conn->query($sql);

    if ($result == TRUE) {

        echo "<script> alert('Customer Account Successfully Created'); </script>";
        echo "<script type='text/javascript'>document.location='customertable.php'</script>";

    } else {

        echo "Error: " . $sql . "<br>" . $conn->error;

    }

    $conn->close();

}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Add Customer Information</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

<div class="container"> 
        <div class="form-container">
            <h2> Add Customer Information </h2>

	    <form method="post">
            <div class="input-text">
                <input type="name" placeholder="First Name" name="first_name" value="" required>
                <span></span>
                <label>First Name</label>
            </div>

            <div class="input-text">
                <input type="name" placeholder="Last Name" name="last_name" value="" required>
                <span></span>
                <label>Last Name</label>
            </div>

			<div class="input-text">
                <input type="username" placeholder="Username" name="username" value="" required>
                <span></span>
                <label>Username</label>
            </div>

            <div class="input-text">
                <input type="email" placeholder="E-mail" name="email" value="" required>
                <span></span>
                <label>E-mail</label>
            </div>

			<div class="input-text">
                <input type="password" placeholder="Password" name="password" value="" required>
                <span></span>
                <label>Password</label>
            </div>

            <div class="input-text">
                <input type="text" placeholder="Mobile Number" name="mobile_number" value="" required>
                <span></span>
                <label>Mobile Number</label>
            </div>

                <input type="submit" name="submit" value="Submit" class="btn">
                <a href="customertable.php" class="back"> Back </a>
            </form>
	</form>
    </body>

    <style> 
@import url('https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,900;1,300&display=swap');

:root {
    --pink: #e61d93;
    --gradient:linear-gradient(90deg,#0000,var(--pink));
    --lightpink: #ef67b6;
    --pink1: #ff8fab;
    --box-shadow: 10px 13px 0px -2px rgba(239,103,182,0.75);
}

*{
    margin: 0;
    padding: 0;
    text-decoration: none;
    outline: none;
    border: none;
    box-sizing: border-box;
    scroll-behavior: smooth;
    font-family: 'Poppins', sans-serif;
}

body {
    background: url('background1.jpg');
    background-size: cover;
    background-position: center;
}

.container {
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 15px;
    padding-bottom: 40px;
}

.container .form-container {
    width: 600px;
    height: 600px;
    background: #303030;
    border-radius: 10px;
    box-shadow: 10px 10px 15px rgba(0,0,0,0.05);
    text-align: center;
}

.container .form-container form {
  padding: 0 40px;
  box-sizing: border-box;
}

.container .form-container h2 {
    font-size: 30px;
    padding: 15px 0;
    margin-top: 20px;
    color: #fff;
}

form .input-text{
  position: relative;
  border-bottom: 2px solid #adadad;
  margin: 20px 0;
}

.input-text input{
  width: 100%;
  padding: 0 5px;
  height: 40px;
  font-size: 16px;
  border: none;
  background: none;
  outline: none;
}

.input-text label {
  position: absolute;
  top: 50%;
  left: 5px;
  color: #fff;
  transform: translateY(-50%);
  font-size: 16px;
  pointer-events: none;
  transition: .5s;
}

.input-text span::before{
  content: '';
  position: absolute;
  top: 40px;
  left: 0;
  width: 0%;
  height: 2px;
  background: #f946ac;
  transition: .5s;
}

.input-text input:focus ~ label,
.input-text input:valid ~ label{
  top: -5px;
  color: #f946ac;
}

.input-text input:focus ~ span::before,
.input-text input:valid ~ span::before{
  width: 100%;
}

.password{
  margin: -5px 0 20px 5px;
  color: #fff;
  cursor: pointer;
}

.password:hover{
  text-decoration: underline;
  color: #fff;
}

.container .form-container .btn {
    display: inline-block;
    padding: 10px 15px;
    font-size: 15px;
    background: #ef67b6;
    color: #fff;
    margin:0 5px;
    margin-top: -10px;
    border-radius: 4px;
    cursor: pointer;
}

.container .form-container .btn:hover {
    background: #fff;
    color: #ef67b6;
}

.container .form-container .back {
    display: inline-block;
    padding: 10px 15px;
    font-size: 15px;
    background: #F44336;
    color: #fff;
    margin:0 5px;
    margin-top: 20px;
    border-radius: 4px;
}

.container .form-container .back:hover {
    background: #fff;
    color: #F44336;
}

input[type="name"],
[type="username"],
[type="email"],
[type="password"],
[type="text"] {
    color: #fff;
}



</style>


</html>
