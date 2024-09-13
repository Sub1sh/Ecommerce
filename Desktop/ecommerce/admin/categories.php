<?php
session_start();
require_one"../logincheck.php";

$stmt=$con->prepare("SELECT*FROM catagories");
$stmt->execute();
$catagories=$stmt->fetchAll(PDO::FETCH_ASSOC);
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
    <div class="main">
    <h2>Categories</h2>
    <div class="card">
        <div class="card-header">
        catagory listing
        <a href="add-catagory.php" class="btn btn-primary btn-sm">Add New</a>
</div>
<div class="card-body">
    <table class="table table-border">
        <thead>
            <tr>
                <th>ID</th>
                <th>name</th>
                <th>status</th>
                <th>action</th>
</tr>
</thead>
<tbody>
    <?php
    foreach($catagories as $catagory){
        ?>
    
    <tr>
        <td><?php echo $catagory['id']; ?></td>
        <td><?php echo $catagory['name']; ?></td>
        <td><?php echo $catagory['status']==1? 'Active':'Inactive'; ?></td>
        <td>
            edit | delete
        </td>
</tr>
<?php
    }
    ?>
    </tbody>
</div>

<div class="footer border-top">
    copyright@ swastik_ecommerce
</div>
</div>
</div>
</body>
</html>