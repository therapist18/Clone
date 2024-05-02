<?php
include ('connection.php');


if(isset($_POST['add_product'])){
  $product_name = $_POST['product_name']; 
  $product_price = $_POST['price'];
  $product_desc = $_POST['product_desc']; 
  $product_quantity = $_POST['quantity'];
  $product_id = $_POST['id'];  
  $product_discount= $_POST['discount']; 
  $product_image = $_FILES['product_image']['name'];
  $product_image_tmp_name = $_FILES['product_image']['tmp_name'];
  $product_img_folder = 'img/'. $product_image;
  
  
  $insert_query = mysqli_query($conn, "INSERT INTO `admin_products` (member_id,product_name, product_image,product_desc,price,quantity,discount) VALUES ('$product_id','$product_name',  '$product_image','$product_desc','$product_price', '$product_quantity','$product_discount')") or die('query failed');

  if($insert_query){
    move_uploaded_file($product_image_tmp_name, $product_img_folder);
    $message[] = '<script>alert(" Product image uploaded successfully");</script>';
  }
  else{
    $message[] = '<script>alert(" Could not upload product image");</script>';
  }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Products</title>
  <link rel="icon" href="img/logo2.jpg" type="image/x-icon">
    <!-- MATERIAL CDN -->
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp"
      rel="stylesheet"
    />
  
  <link rel="stylesheet" href="style.css" />
</head>
<body > 


<?php
if(isset($message)){
   foreach($message as $message){
      echo '<div class="message" onclick="this.remove();">'.$message.'</div>';
   }
}
?>
  <div class="container-add-product">
    <aside>
        <div class="top">
          <div class="logo">
            <img src="img/logo2.jpg" />
           <a href="index.php"> <h2 >DESTINY<span class="danger"> UNIFORMS</span></h2></a>
          </div>
          <div class="close" id="close-btn">
            <span class="material-icons-sharp">close</span>
          </div>
        </div>

        <div class="sidebar">
          <a href="admin.php" >
            <span class="material-icons-sharp">grid_view</span>
            <h3>Dashboard</h3>
          </a>
          <a href="customer.php" >
            <span class="material-icons-sharp">person_outline</span>
            <h3>Customers</h3>
          </a>
          <a href="orders.php">
            <span class="material-icons-sharp">receipt_long</span>
            <h3>Orders</h3>
          </a>
          <a href="#">
            <span class="material-icons-sharp">insights</span>
            <h3>Analytics</h3>
          </a>
          <a href="#">
            <span class="material-icons-sharp">mail_outline</span>
            <h3>Messages</h3>
            <span class="message-count">26</span>
          </a>
          <a href="products.php">
            <span class="material-icons-sharp">inventory</span>
            <h3>Products</h3>
          </a>
          
          <a href="#">
            <span class="material-icons-sharp">settings</span>
            <h3>Settings</h3>
          </a>
          <a href="addproduct.php" class="active">
            <span class="material-icons-sharp">add</span>
            <h3>Add Product</h3>
          </a>
          <a href="login.php">
            <span class="material-icons-sharp">logout</span>
            <h3>Logout</h3>
          </a>
          <!--
          <a href="#">
            <span class="material-icons-sharp">report_gmailerrorred</span>
            <h3>Reports</h3>
          </a>
        -->
        </div>
      </aside>
      <!------------------ END OF ASIDE ------------------>
  
      <section class="form-box">
        <div class="column">
          <!--<div class="row1">
          <a href="index.php"> <img src="img/logo2.jpg" alt=""></a>
          </div>
-->
        <div class="container2">
          <div class="login-col">
            <form class="form" action="" enctype="multipart/form-data" method="POST">
              <h3>ADD A NEW PROUCT</h3>

              <input type="text" name="product_name" placeholder="Enter the Product Name" required>
              <input type="number" name="price" placeholder="Enter the Product Price" required>
              <input type="text" name="product_desc" placeholder="Enter the Product Description" required>
              <input type="number" name="quantity" placeholder="Enter the Product Quantity" required>
              <input type="number" name="id" placeholder="Enter the Member id" required>
              <input type="number" name="discount" placeholder="Enter the Product Discount " required>
              <input type="file" name="product_image" placeholder="img/png, img/jpg , img/jpeg" required>
              
              
              <button type="submit" name="add_product" value="add the product" class="submit-btn">Add Product</button>
            </form>
          </div>
        </div>  
        </div>
      </section>
  </div>


  <script src="orders.js"></script>
    <script src="index.js"></script>
</body>
</html>