<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Admin Log-in Page </title>
</head>

<body>
    <div class="container"> 
    <img src="images/empowherment.png">
        <div class="content">
            <h2> Admin Log-in </h2>
            <a href="login.php" class="btn"> Log-in </a>
            <a href="addadmin.php" class="btn"> Register as Admin </a>
        </div>
    </div>
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

.container .content {
    width: 300px;
    height: 250px;
    background: #303030;
    border-radius: 10px;
    box-shadow: 10px 10px 15px rgba(0,0,0,0.05);
    text-align: center;
}

.container .content h2 {
    font-size: 30px;
    padding: 15px 0;
    margin-top: 20px;
    color: #fff;
}

.container .content .btn {
    display: inline-block;
    padding: 10px 15px;
    font-size: 15px;
    background: #ef67b6;
    color: #fff;
    margin:0 5px;
    margin-top: 30px;
    border-radius: 4px;
}

.container .content .btn:hover {
    background: #fff;
    color: #ef67b6;
}

</style>