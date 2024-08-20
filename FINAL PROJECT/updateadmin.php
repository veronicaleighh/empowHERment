<?php 

include "connect.php";

if (isset($_POST['update'])) {

    $admin_id = $_POST['id'];
    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "UPDATE admininfo SET name='$name', username='$username', email='$email', password='$password' WHERE admin_id='$admin_id'";


    $result = $conn->query($sql); 

    if ($result == TRUE) {

        echo "<script> alert('Admin Record Successfully Updated'); </script>";
        echo "<script type='text/javascript'>document.location='admintable.php'</script>";

    } else {

        echo "Error:" . $sql . "<br>" . $conn->error;

    }

} 

if (isset($_GET['admin_id'])) {

    $admin_id = $_GET['admin_id']; 

    $sql = "SELECT * FROM admininfo WHERE admin_id='$admin_id'";

    $result = $conn->query($sql); 

    if ($result->num_rows > 0) {        
        while ($row = $result->fetch_assoc()) {
            $admin_id = $row['admin_id'];
            $name = $row['name'];
            $username = $row['username'];
            $email = $row['email'];
            $password = $row['password'];
        } 
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Update Admin Information</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body> 
<div class="container"> 
        <div class="form-container">
            <h2> Update Admin Information </h2>

    <form method="post">
            <div class="input-text">
                <input type="name" placeholder="Name" name="name" value="<?php echo $name; ?>" required>
                <span></span>
                <label>Name</label>
            </div>

            <div class="input-text">
                <input type="username" placeholder="Username" name="username" value="<?php echo $username; ?>" required>
                <span></span>
                <label>Username</label>
            </div>

            <div class="input-text">
                <input type="email" placeholder="E-mail" name="email" value="<?php echo $email; ?>" required>
                <span></span>
                <label>E-mail</label>
            </div>

            <div class="input-text">
                <input type="password" placeholder="Password" name="password" value="<?php echo $password; ?>" required>
                <span></span>
                <label>Password</label>
            </div>

                <input type="hidden" name="id" value="<?php echo $admin_id; ?>">
                <input type="submit" name="update" value="Update" class="btn">
                <a href="admintable.php" class="back"> Back </a>
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
    padding-bottom: 50px;
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

input[type="password"],
[type="name"],
[type="username"],
[type="email"] {
    color: #fff;
}

</style>

</html>