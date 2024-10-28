<?php
session_start();
require_once "../logincheck.php";

// Check if $con is defined; it might require including a file that establishes the database connection
// Assuming $con is your PDO connection object

$stmt = $con->prepare("SELECT * FROM categories"); // corrected "catagories" to "categories"
$stmt->execute();
$categories = $stmt->fetchAll(PDO::FETCH_ASSOC);
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
            Hello <?php echo htmlspecialchars($_SESSION['username']); ?> !
            <a onclick="return confirm('Are you sure you want to logout?');" href="logout.php">Logout</a>
        </p>
        
        <?php require_once("./menus.php"); ?>
        
        <div class="main">
            <h2>Categories</h2>
            
            <div class="card">
                <div class="card-header">
                    Category Listing
                    <a href="add-category.php" class="btn btn-primary btn-sm">Add New</a>
                </div>
                
                <div class="card-body">
                    <form action="/action_page.php">
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                        <div class="form-group">
                            <label for="pwd">Password:</label>
                            <input type="password" class="form-control" id="pwd" name="pwd">
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" name="remember"> Remember me</label>
                        </div>
                        <button type="submit" class="btn btn-default">Submit</button>
                    </form>

                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Category Name</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($categories as $category): ?>
                                <tr>
                                    <td><?php echo htmlspecialchars($category['id']); ?></td>
                                    <td><?php echo htmlspecialchars($category['name']); ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="footer border-top text-center mt-4">
                &copy; <?php echo date("Y"); ?> swastik_ecommerce
            </div>
        </div>
    </div>
</body>
</html>
