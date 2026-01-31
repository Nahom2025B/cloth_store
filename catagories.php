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

      

    </div>
  </div>
</nav>


    
    <div class="container-fluid mt-4"> 
        <div class="row g-4"> 
            <div class="col-12 col-md-4 col-lg-3">
                 <div class="card h-100"> 
                     <a href="display.php?category=1"><img src="shoes.jpg" class="card-img-top"></a> 
                    <div class="card-body text-center"> 
                        <p class="card-text">Shoes</p>
                     </div> </div> </div> 
                     <div class="col-12 col-md-4 col-lg-3"> 
                        <div class="card h-100"> 
                            <a href="display.php?category=2"><img src="tshirt.jpg" class="card-img-top"></a>
                             <div class="card-body text-center">
                                 <p class="card-text">T-shirt</p> 
                                </div> </div> </div> 

                                <div class="col-12 col-md-4 col-lg-3"> 
                        <div class="card h-100"> 
                            <a href="display.php?category=3"><img src="TankTops.jpg" class="card-img-top"></a>
                             <div class="card-body text-center">
                                 <p class="card-text">TankTops</p> 
                                </div> </div> </div> 
                                <div class="col-12 col-md-4 col-lg-3"> 
                        <div class="card h-100"> 
                            <a href="display.php?category=4"><img src="sweater.jpg" class="card-img-top"></a>
                             <div class="card-body text-center">
                                 <p class="card-text">Sweater</p> 
                                </div> </div> </div> 

                                <div class="col-12 col-md-4 col-lg-3"> 
                        <div class="card h-100"> 
                            <a href="display.php?category=5"><img src="hoodie.jpg" class="card-img-top"></a>
                             <div class="card-body text-center">
                                 <p class="card-text">Hoodie</p> 
                                </div> </div> </div> 

                        <div class="col-12 col-md-4 col-lg-3"> 
                        <div class="card h-100"> 
                            <a href="display.php?category=6"><img src="jacket.jpg" class="card-img-top"></a>
                             <div class="card-body text-center">
                                 <p class="card-text">Jacket</p> 
                                </div> </div> </div> 
                        
                                <div class="col-12 col-md-4 col-lg-3"> 
                        <div class="card h-100"> 
                            <a href="display.php?category=7"><img src="jeans.jpg" class="card-img-top"></a>
                             <div class="card-body text-center">
                                 <p class="card-text">Jeans</p> 
                                </div> </div> </div> 
                                <div class="col-12 col-md-4 col-lg-3"> 
                        <div class="card h-100"> 
                            <a href="display.php?category=8"><img src="shorts.jpg" class="card-img-top"></a>
                             <div class="card-body text-center">
                                 <p class="card-text">Shorts</p> 
                                </div> </div> </div> 
                                <div class="col-12 col-md-4 col-lg-3"> 
                        <div class="card h-100"> 
                            <a href="display.php?category=9"><img src="skirts.jpg" class="card-img-top"></a>
                             <div class="card-body text-center">
                                 <p class="card-text">Skirts</p> 
                                </div> </div> </div> 
                                <div class="col-12 col-md-4 col-lg-3"> 
                        <div class="card h-100"> 
                            <a href="display.php?category=10"><img src="dress.jpg" class="card-img-top"></a>
                             <div class="card-body text-center">
                                 <p class="card-text">Dresses</p> 
                                </div> </div> </div> 
                                <div class="col-12 col-md-4 col-lg-3"> 
                        <div class="card h-100"> 
                            <a href="display.php?category=11"><img src="Coats.jpg" class="card-img-top"></a>
                             <div class="card-body text-center">
                                 <p class="card-text">Coats</p> 
                                </div> </div> </div> 
                                <div class="col-12 col-md-4 col-lg-3"> 
                        <div class="card h-100"> 
                            <a href="display.php?category=12"><img src="jogging.jpg" class="card-img-top"></a>
                             <div class="card-body text-center">
                                 <p class="card-text">Jogging</p> 
                                </div> </div> </div> 
                            

                                
                            
                            </div>
                            
                            </div>
<script src="js/bootstrap.js"></script>
</body>
</html>