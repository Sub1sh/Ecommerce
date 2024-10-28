<?php
require_once "./logincheck.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrative Panel</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
</head>
<body>
    <div class="container">
    
        <p class="text-right">
            Hello <?php echo htmlspecialchars($_SESSION['username']); ?>!
            <a onclick="return confirm('Are you sure you want to logout?');" href="logout.php">Logout</a>
        </p>
        
        <?php require_once "./menus.php"; ?>
        
        <div class="main" style="height: 300px;">
            <h2>Welcome to the administrative panel of Swastik E-commerce</h2>
        </div>

        <div class="footer border-top text-center mt-4">
            &copy; <?php echo date("Y"); ?> Swastik E-commerce
        </div>
    </div>
</body>
</html>
