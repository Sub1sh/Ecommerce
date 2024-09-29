<?php
session_start();
require_once '../connection.php'
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $username = $_POST['username'];
    $pwd = $_POST['pwd'];
    $sql="SELECT*FROM user WHERE username='$username'AND password='$pwd'";
    $loginStmt=$con->prepare($sql);
$loginStmt->execute();
$loginUser=$loginStmt->fetch(PDO::FETCH_ASSOC);
if ($loginUser){
    $_SESSION['user_login']=true;
}
    if ($username === 'shyam123' && $pwd === '98989898'){
        echo 'correct login'
    }
}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
</head>
<body>
    <div class="container">
        <form action="">
            <div class="row">
                <div class="col-4">
                    <label for="username">Username</label>
                </div>
                <div class="col-8">
                    <input type="text" name = "username" id = "username" >
                </div>
            </div>

            <div class="row">
                <div class="col-4">
                    <label for="pwd">Password</label>
                </div>
                <div class="col-8">
                    <input type="password" name = "pwd" id = "pwd">
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <button class = "btn btn-secondary" type = "Submit">Login</button>
                </div>
            </div>
           
        </form>
    </div>
</body>
</html>
