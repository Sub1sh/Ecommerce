<?php
// session_start();

// if(!isset($_SESSION['user_login'])){
//     header("Location: loginform.php?error=You are not logged in, please login first.");
//     die;
// }

// require_once "../connection.php";

require_once "./logincheck.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrative panal</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
</head>
<body>
    <div class="container">
    
    <p class="text-right">
        Hello <?php echo $_SESSION['username'];?> !
     <a onclick="return confirm('Are you sure to logout?');" href="logout.php">Log
    </p>
    <?php require_once("./menus.php");?>
    <div class="main" style="height:300px">
    <h2>welcome to administrative panal of swastik ecommerce</h2>
</div>

<div class="footer border-top">
    copyright@ swastik_ecommerce
</div>
</div>
</div>
</body>
</html>