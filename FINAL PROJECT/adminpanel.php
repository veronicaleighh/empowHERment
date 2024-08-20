<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Admin Dashboard </title>

</head>

<body> 
    <div class="container"> 
    <img src="images/empowherment.png">
        <div class="content">
            <h2> Admin Dashboard </h2>
            <a href="customertable.php" class="btn"> Customer Information </a>
            <a href="producttable.php" class="btn"> Product Information </a>
            <a href="admintable.php" class="btn"> Admin Information </a>
            <a href="addadmin.php" class="add"> Add Admin </a>
            <a href="adminlogin.php" class="logout"> Log-out </a></div>
        </div>
    </div>
</body>

<style>

@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap');

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
    padding: 20px;
}

.container img {
    width: 500px;
    height: 100px;
    margin-right: 100px;
}

.container .content {
    width: 400px;
    height: 450px;
    padding: 10px;
    background: #303030;
    border-radius: 10px;
    box-shadow: 10px 10px 15px rgba(0,0,0,0.05);
    text-align: center;
}

.container .content h2 {
    font-size: 30px;
    padding: 10px 0;
    margin-top: 10px;
    color: #fff;
}

.container .content .btn {
    display: block;
    padding: 12px;
    font-size: 18px;
    background: #ef67b6;
    color: #fff;
    margin:0 5px;
    margin-top: 18px;
    border-radius: 4px;
}

.container .content .btn:hover {
    background: #fff;
    color: #ef67b6;
}

.container .content .logout {
    display: block;
    padding: 12px;
    font-size: 18px;
    background: #F44336;
    color: #fff;
    margin:0 5px;
    margin-top: 18px;
    border-radius: 4px;
}

.container .content .logout:hover {
    background: #fff;
    color: #F44336;
}

.container .content .add {
    display: block;
    padding: 12px;
    font-size: 18px;
    background: #aa5d9e;
    color: #fff;
    margin:0 5px;
    margin-top: 18px;
    border-radius: 4px;
}

.container .content .add:hover {
    background: #fff;
    color: #aa5d9e;
}


</style>