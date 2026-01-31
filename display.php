<?php
include 'db.php';

// Get category from URL as integer
$category = isset($_GET['category']) ? intval($_GET['category']) : 0;

// Base SQL query
$sql = "SELECT * FROM products WHERE product_status='1'";

// Add category filter if selected
if ($category > 0) {
    $sql .= " AND category = $category";
}

// Order by newest
$sql .= " ORDER BY created_at DESC";

$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category Products</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="login.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="index.php">ClothStore</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mainNavbar">
      <ul class="navbar-nav ">
        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="catagories.php">Categories</a></li>
        <li class="nav-item"><a class="nav-link" href="Add_Product.php">Add Products</a></li>
        <li class="nav-item"><a class="nav-link" href="records.php">Records</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container mt-5">
    <h4 class="mb-4">
        Category: 
        <?php 
        if ($category == 10) echo "Dresses";
        elseif ($category == 1) echo "Shoes";
        elseif ($category == 2) echo "T-shirt";
        // Add other categories here
        else echo "All";
        ?>
    </h4>

    <div class="row">
        <?php if (mysqli_num_rows($result) > 0): ?>
            <?php while ($row = mysqli_fetch_assoc($result)): ?>
                <div class="col-12 col-md-4 col-lg-3 mb-4">
                    <div class="card h-100 shadow-sm">
                        <img src="uploads/<?php echo $row['image']; ?>" 
                             class="card-img-top" style="height:250px; object-fit:cover;">
                        <div class="card-body text-center">
                            <h6 class="card-title"><?php echo $row['product_name']; ?></h6>
                            <p class="text-muted mb-2">$<?php echo $row['selling_price']; ?></p>
                            <a href="sell.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-primary">Sell</a>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php else: ?>
            <p>No clothes found in this category.</p>
        <?php endif; ?>
    </div>
</div>

<script src="js/bootstrap.js"></script>
</body>
</html>
