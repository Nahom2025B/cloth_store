<?php
include 'db.php';

$search = $_GET['search'] ?? '';

$sql = "SELECT * FROM products WHERE 1"; 

if ($search != '') {
    
    $search_safe = mysqli_real_escape_string($conn, $search);
    $sql .= " AND product_name LIKE '%$search_safe%'";
}

$sql .= " ORDER BY created_at DESC LIMIT 12";

$result = mysqli_query($conn, $sql);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="catagories.php">Categories</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Add_Product.php">Add Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="record.php">Records</a>
        </li>
      </ul>

  
      <form class="d-flex ms-5" action="index.php" method="GET">

        <input class="form-control me-2" type="search" name="search" placeholder="Search products..." style="width: 300px;">
        <button class="btn btn-outline-light" type="submit">Search</button>
      </form>

    </div>
  </div>
</nav>
    <div class="container mt-5">
    <div class="row">

        <?php while ($row = mysqli_fetch_assoc($result)) { ?>

        <div class="col-12 col-md-4 col-lg-3 mb-4">
            <div class="card h-100 shadow-sm">

                <img src="uploads/<?php echo $row['image']; ?>"
                     class="card-img-top"
                     style="height:250px; object-fit:cover;">

                <div class="card-body text-center">
                    <h6 class="card-title"><?php echo $row['product_name']; ?></h6>
                    <p class="text-muted mb-2">$<?php echo $row['selling_price']; ?></p>
                    
                    <a href="sell.php?id=<?php echo $row['id']; ?>"
                       class="btn btn-sm btn-primary sellbutton">
                        Sell
                    </a>
                </div>

            </div>
        </div>

        <?php } ?>

    </div>
</div>
<script src="js/bootstrap.js"></script>
<script src="index.js"></script>
</body>
</html>