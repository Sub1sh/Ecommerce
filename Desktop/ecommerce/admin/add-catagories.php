<?php
session_start();
require_once "../logincheck.php";

$stmt=$con->prepare("SELECT * FROM categories");
$stmt->execute();
$categories=$stmt->fetchAll(PDO::FETCH_ASSOC);
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
Hello <?php echo $_SESSION['username'];?> !
<a onclick="return confirm('Are you sure to logout?');" href="logout.php">Logout</a>
</p>

<?php require_once("./menus.php");?>

<div class="main">

<h2>Categories</h2>

<div class="card">

<div class="card-header">
Category Listing
<a href="add-category.php" class="btn btn-primary btn-sm">Add New</a>
</div>

<div class="card-body">

<form action="" method="POST">

<div class="form-group">
<label for="name">Name:</label>
<input type="text" class="form-control" name="name" id="name">
</div>

<div class="form-group">
<label for="status">Status</label>
<select class="form-control" name="status">
<option value="1">Active</option>
<option value="0">Inactive</option>
</select>
</div>

<button type="submit" class="btn btn-primary">Submit</button>

</form>

</div>

</div>

<div class="footer border-top">
copyright @ swastik_ecommerce
</div>

</div>

</div>

</body>
</html>