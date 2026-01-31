<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
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

      

    </div>
  </div>
</nav>


<div class="container mt-5">
    <div class="row">
       
        
        <div class="col col-12 ">
          <form action="add_product_process.php" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <input class="form-control form-control-sm" id="formFileSm" name="image" type="file">
            </div>

                    
                    <input type="text" name="product_name" class="form-control form-control-lg" placeholder="Product Name" required>
<br><br>
                    <input type="number" name="cost_price" class="form-control form-control-lg" placeholder="Cost" required>
<br><br>
                    <input type="number" name="selling_price" class="form-control form-control-lg" placeholder="Selling Price" required>
<br><br>
                    <select name="category" class="form-select" required>
  <option selected>catagories</option>
  <option value="1">Shoe</option>
  <option value="2">T-Shirt</option>
  <option value="3">Tank Tops</option>
  <option value="4">Sweater</option>
  <option value="5">Hoddie</option>
  <option value="6">Jacket</option>
  <option value="7">Jeans</option>
  <option value="8">Shorts</option>
  <option value="9">Skirts</option>
  <option value="10">Dresses</option>
  <option value="11">Coats</option>
  <option value="12">Jogging</option>

</select><br><br>
<select name="status" class="form-select" required>

  <option selected>Product_status</option>
  <option value="1">Available</option>
  <option value="2">Not Available</option>
  <option value="3">Sold</option>

</select><br><br>

<select name="size" class="form-select" required>

  <option selected>Size</option>
  <option value="1">S</option>
  <option value="2">M</option>
  <option value="3">L</option>
  <option value="4">XL</option>
  <option value="5">XXL</option>
  
  

</select>
<br><br>
<button type="submit" class="btn btn-primary w-100">Add Product</button>
<br><br>
                    </form>
        </div>
    </div>
</div>
    




    <script src="js/bootstrap.js"></script>
</body>
</html>