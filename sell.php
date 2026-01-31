<?php
include 'db.php';

if (!isset($_GET['id'])) {
    header("Location: index.php");
    exit;
}

$id = $_GET['id'];

$sql = "UPDATE products
        SET product_status='SOLD',
            sold_date = NOW()
        WHERE id='$id'";

mysqli_query($conn, $sql);

header("Location: index.php");
exit;
