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

<table class="table table-bordered">

<thead>
<tr>
<th>ID</th>
<th>Name</th>
<th>Status</th>
<th>Action</th>
</tr>
</thead>

<tbody>

<?php
foreach($categories as $category){
?>

<tr>
<td><?php echo $category['id']; ?></td>
<td><?php echo $category['name']; ?></td>
<td><?php echo $category['status']==1 ? 'Active':'Inactive'; ?></td>
<td>
edit | delete
</td>
</tr>

<?php
}
?>

</tbody>

</table>

</div>

</div>

<div class="footer border-top">
copyright @ swastik_ecommerce
</div>

</div>

</div>

</body>
</html>