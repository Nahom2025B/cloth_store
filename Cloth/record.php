<?php
include 'db.php';

$filter = $_GET['filter'] ?? 'daily';

$where = "";

if ($filter === 'daily') {
    $where = "DATE(sold_date) = CURDATE()";
} elseif ($filter === 'weekly') {
    $where = "YEARWEEK(sold_date, 1) = YEARWEEK(CURDATE(), 1)";
} elseif ($filter === 'monthly') {
    $where = "MONTH(sold_date) = MONTH(CURDATE()) 
              AND YEAR(sold_date) = YEAR(CURDATE())";
}

$sql = "SELECT product_name, selling_price, cost, sold_date
        FROM products
        WHERE product_status='SOLD' AND $where
        ORDER BY sold_date DESC";

$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sales Records</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/bootstrap.css">
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
        </div>
    </div>
</nav>


<div class="container mt-5">

    <h3 class="mb-4">Sales Records</h3>
    <form method="GET" class="mb-4">
        <select name="filter" class="form-select w-25" onchange="this.form.submit()">
            <option value="daily"   <?= $filter=='daily'?'selected':'' ?>>Daily</option>
            <option value="weekly"  <?= $filter=='weekly'?'selected':'' ?>>Weekly</option>
            <option value="monthly" <?= $filter=='monthly'?'selected':'' ?>>Monthly</option>
        </select>
    </form>

    <table class="table table-bordered ">
        <thead class="table-dark">
            <tr>
                <th>Product</th>
                <th>Selling Price</th>
                <th>Cost Price</th>
                <th>Profit</th>
                <th>Sold Date</th>
            </tr>
        </thead>
        <tbody>

        <?php
        $totalProfit = 0;

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {

                $profit = $row['selling_price'] - $row['cost'];
                $totalProfit += $profit;

                echo "<tr>
                        <td>{$row['product_name']}</td>
                        <td>\${$row['selling_price']}</td>
                        <td>\${$row['cost']}</td>
                        <td class='text-success'>\${$profit}</td>
                        <td>{$row['sold_date']}</td>
                      </tr>";
            }
        } else {
            echo "<tr>
                    <td colspan='5' class='text-center'>No sales found</td>
                  </tr>";
        }
        ?>

        </tbody>
    </table>

   
    <h4 class="mt-3">
        Total Profit:
        <span>$<?= $totalProfit ?></span>
    </h4>

</div>

<script src="js/bootstrap.js"></script>
</body>
</html>
