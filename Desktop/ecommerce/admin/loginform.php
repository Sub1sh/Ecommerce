<?php
session_start();
require_once '../connection.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    
    $username = $_POST['username'];
    $pwd = $_POST['pwd'];

    $sql = "SELECT * FROM user WHERE username=? AND password=?";
    $loginStmt = $con->prepare($sql);
    $loginStmt->execute([$username,$pwd]);

    $loginUser = $loginStmt->fetch(PDO::FETCH_ASSOC);

    if ($loginUser){
        $_SESSION['user_login'] = true;
        echo "Correct Login";
    }
    else{
        echo "Invalid Username or Password";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login</title>
<link rel="stylesheet" href="../css/bootstrap.css">
</head>

<body>

<div class="container mt-5">

<form action="" method="POST">

<div class="row mb-3">
<div class="col-4">
<label for="username">Username</label>
</div>

<div class="col-8">
<input type="text" name="username" id="username" class="form-control">
</div>
</div>


<div class="row mb-3">
<div class="col-4">
<label for="pwd">Password</label>
</div>

<div class="col-8">
<input type="password" name="pwd" id="pwd" class="form-control">
</div>
</div>


<div class="row">
<div class="col-12">
<button class="btn btn-secondary" type="submit">Login</button>
</div>
</div>

</form>

</div>

</body>
</html>