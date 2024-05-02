<?php

 include 'connection.php';


 $name = "SELECT * FROM register_details WHERE first_name = 'first_name'";
 //$user_name = $conn ->  query($sql);  
 echo 'hello';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Destiny Uniforms </title>  
    <link rel="icon" href="img/logo2.jpg" type="image/x-icon">
    <!-- MATERIAL CDN -->
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp"
      rel="stylesheet"
    />
    <!-- STYLESHEET -->
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>


    <div class="container">
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
          <a href="admin.php">
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
          <a href="products.php" class="active">
            <span class="material-icons-sharp">inventory</span>
            <h3>Products</h3>
          </a>
          
          <a href="#">
            <span class="material-icons-sharp">settings</span>
            <h3>Settings</h3>
          </a>
          <a href="addproduct.php">
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

      <main>
        <h1>Products</h1>

        <div class="date">
          <input type="date" />
        </div>


        <div class="product-1">
        <?php 

        
          $sql = mysqli_query($conn, "SELECT * FROM admin_products" );
          while ($row = mysqli_fetch_array($sql)) {
        ?>

        <form method="POST" class="box2">
        <img src="<?php echo htmlspecialchars ($row["product_image"]); ?> ">
          <div class="box-content">
              <h3><b class="product_name"> <?php echo htmlspecialchars ($row["product_name"]); ?></b></h3>
              <h4><p class="price">KSH <?php echo htmlspecialchars ($row["price"]); ?></p></h4>
              <h5><p class="quantity"><?php echo htmlspecialchars ($row["quantity"]); ?> in stock</p></h5>

             
          </div>
          </form>
        
        <?php

          }

         ?>

        </div>



      </main>
      
      <!----------------- END OF MAIN -------------------->

  <script src="index.js"></script>

  <!--
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>
</html>