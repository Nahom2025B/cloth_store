<?php
include "db.php";

$product_name = $_POST['product_name'];
$cost_price = $_POST['cost_price'];
$selling_price = $_POST['selling_price'];
$category = $_POST['category'];
$status = $_POST['status'];
$size = $_POST['size'];

// Image upload
$image_name = $_FILES['image']['name'];
$image_tmp = $_FILES['image']['tmp_name'];

$upload_folder = "uploads/";
move_uploaded_file($image_tmp, $upload_folder . $image_name);

// Insert into database
$sql = "INSERT INTO products (product_name, cost, selling_price, category, product_status, size, image)
        VALUES ('$product_name', '$cost_price', '$selling_price', '$category', '$status', '$size', '$image_name')";

if (mysqli_query($conn, $sql)) {
    echo "Product added successfully!";
} else {
    echo "Error: " . mysqli_error($conn);
}
?>
