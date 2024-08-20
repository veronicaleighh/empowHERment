<?php

include "connect.php";

if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "INSERT INTO `admininfo` (`name`, `email`, `username`,`password`) VALUES ('$name', '$email', '$username', '$password')";

    $result = $conn->query($sql);

    if ($result == TRUE) {

        echo "<script> alert('Admin Account Successfully Created'); </script>";
        echo "<script type='text/javascript'>document.location='adminpanel.php'</script>";

    } else {

        echo "Error: " . $sql . "<br>" . $conn->error;

    }

    $conn->close();

}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Add Admin Account</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

<div class="container"> 
    <img src="images/empowherment.png">
        <div class="form-container">
            <h2> Register </h2>

	<form method="post">
            <div class="input-text">
                <input type="name" placeholder="Name" name="name" value="" required>
                <span></span>
                <label>Name</label>
            </div>

            <div class="input-text">
                <input type="email" placeholder="E-mail" name="email" value="" required>
                <span></span>
                <label>E-mail</label>
            </div>

			<div class="input-text">
                <input type="username" placeholder="Username" name="username" value="" required>
                <span></span>
                <label>Username</label>
            </div>

			<div class="input-text">
                <input type="password" placeholder="Password" name="password" value="" required>
                <span></span>
                <label>Password</label>
            </div>

                <input type="submit" name="submit" value="Submit" class="btn">
                <a href="adminpanel.php" class="back"> Back </a>
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

.container {
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 15px;
    padding-bottom: 50px;
}

.container img {
    width: 500px;
    height: 100px;
    margin-right: 100px;
}

.container .form-container {
    width: 400px;
    height: 500px;
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
  margin: 25px 0;
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
  top: -8px;
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
    margin-top: 20px;
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

input[type="password"],
[type="name"],
[type="username"],
[type="email"] {
    color: #fff;
}

</style>

</html>