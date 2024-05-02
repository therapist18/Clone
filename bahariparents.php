<?php 
  include("connection.php");

  session_start();  
  $row_count = $_SESSION['row_count'];
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bahari Parents</title>  
  <link rel="icon" href="img/logo2.jpg" type="image/x-icon">
 

</head>
<body >



<?php include('script.php') ?>

<section class="navbar">
   <nav>
    <div class="navbar-one">
      <div class="left">
        <p>
          <i class="fas fa-phone"> </i>
          <a href="tel:0722320830" >0722320830</a>
        </p>

        <a href="#">Blog</a>
      </div>

      <div class="header-alert-news">
        <p>
          <b>Free Shipping</b>
          This Week Order Over - $55
        </p>
      </div>

      <div class="left-on-mobile-view">
        <p>
          <i class="fas fa-phone"> </i>
          <a href="tel:0722320830" >0722320830</a>
        </p>

      </div>

      <div class="right">
        <ul>
        <li><a href="index.php"><i class="fa-solid fa-house"></i>Home</a></li>
        <li><a href="login.php">Login</a></li>
        <li><a href="register.php">Register</a></li>
        <li><a href="ordertracking.php">Order Tracking</a></li>
        </ul>
      </div>
      </div>

      <div class="navbar-two">
      <div class="left">
        <div class="logo">
        <a href="index.php"> <img src="img/logo2.jpg"></a>
        </div>
      </div>
      
      <div class="right">
        <div class="right-navbar-two">

          <div class="group">
            <svg class="icon" aria-hidden="true" viewBox="0 0 24 24"><g><path d="M21.53 20.47l-3.66-3.66C19.195 15.24 20 13.214 20 11c0-4.97-4.03-9-9-9s-9 4.03-9 9 4.03 9 9 9c2.215 0 4.24-.804 5.808-2.13l3.66 3.66c.147.146.34.22.53.22s.385-.073.53-.22c.295-.293.295-.767.002-1.06zM3.5 11c0-4.135 3.365-7.5 7.5-7.5s7.5 3.365 7.5 7.5-3.365 7.5-7.5 7.5-7.5-3.365-7.5-7.5z"></path></g></svg>
            <input placeholder="Search" type="search" class="input">
          </div>

          <div class="header-user-actions">
    
            <button class="action-btn">
              <ion-icon name="heart-outline"></ion-icon>
              <span class="count">0</span>
            </button>
    
            <button class="action-btn">
             <a href="cart.php"> <ion-icon name="bag-handle-outline"></ion-icon></a>
              <span class="count"><?php echo $row_count; ?></span>
            </button>
    
          </div>
        </div>
      </div>
      </div>
   </nav>
</section>


<div  class="body">

<div class="school-header">
  <div class="bahari-logo">
    <img src="img/Bahari logo.png" alt="">
  </div>

  <nav class="tiny-navbar">
    <a href="shop.php">Shop</a>
    <a href="school.php" >Shop by School </a>
    <a href="sizechart.php" >Size Chart </a>    
    <a href="https://bahariparentsacademy.com/">More info</a>
  </nav>

</div>

<section class="mini-navbar">
    <aside>
      <div class="filter " data-mobile-menu>

        <div class="menu-top">
          <h2 class="menu-title">PRICE</h2>
        </div>

        <ul class="mobile-menu-category-list">

            <li class="menu-category">

              <button class="accordion-menu" data-accordion-btn >
                <p class="menu-title">CATEGORY</p>

                <div>
                  <ion-icon name="add-outline" class="add-icon"></ion-icon>
                  <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                </div>
              </button>

              <ul class="submenu-category-list has-scrollbar" data-accordion>

                <li class="submenu-category">
                  <a href="#" class="submenu-title">Girls (9) </a>
                </li>

                <li class="submenu-category">
                  <a href="#" class="submenu-title">Boys (8)</a>
                </li>

                <li class="submenu-category">
                  <a href="#" class="submenu-title">T-shirts (30)</a>
                </li>

                <li class="submenu-category">
                  <a href="#" class="submenu-title">PUBLIC SAFETY (3) </a>
                </li>

                <li class="submenu-category">
                  <a href="#" class="submenu-title">LAW ENFORCEMENT (5)</a>
                </li>

              

              </ul>
            </li>

            <li class="menu-category">

              <button class="accordion-menu" data-accordion-btn >
                <p class="menu-title">COLOR</p>

                <div>
                  <ion-icon name="add-outline" class="add-icon"></ion-icon>
                  <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                </div>
              </button>

              <ul class="submenu-category-list has-scrollbar" data-accordion>

                <li class="submenu-category">
                  <a href="#" class="submenu-title">Red </a>
                </li>

                <li class="submenu-category">
                  <a href="#" class="submenu-title">White</a>
                </li>

                <li class="submenu-category">
                  <a href="#" class="submenu-title"> Sky Blue</a>
                </li>

                <li class="submenu-category">
                  <a href="#" class="submenu-title">Black </a>
                </li>

                <li class="submenu-category">
                  <a href="#" class="submenu-title">Yellow</a>
                </li>

              

              </ul>
            </li>

            <li class="menu-category">

              <button class="accordion-menu" data-accordion-btn >
                <p class="menu-title">CATEGORY</p>

                <div>
                  <ion-icon name="add-outline" class="add-icon"></ion-icon>
                  <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                </div>
              </button>

              <ul class="submenu-category-list" data-accordion>

                <li class="submenu-category">
                  <a href="#" class="submenu-title">Small (16 - 22) </a>
                </li>

                <li class="submenu-category">
                  <a href="#" class="submenu-title">Medium (24 - 28)</a>
                </li>

                <li class="submenu-category">
                  <a href="#" class="submenu-title">Large (30 - 38)</a>
                </li>

              </ul>
            </li>
        </ul>
        
      </div>
    </aside>

    <main>
 
      <div action="" method="POST" class="product-1">
        <?php 
        
        $sql = mysqli_query($conn , "SELECT * FROM member_schools WHERE member_id = 1") ;
        while($row = mysqli_fetch_array($sql)){
        ?>

        <form method="POST" class="box2">
          <img src="<?php echo htmlspecialchars ($row["product_image"]); ?> ">
          <div class="box-content">
              <h4 class="product_name"> <?php echo htmlspecialchars ($row["product_name"]); ?></h4>
              <h6 class="price">KSH <?php echo htmlspecialchars ($row["price"]); ?></h6>
              <h6 class="quantity"><?php echo htmlspecialchars ($row["quantity"]); ?> in stock</h6>
              <button type="submit" value="add to cart" name="add_to_cart" class="CartBtn"><span class="IconContainer"> 
                  <ion-icon name="bag-handle-outline"></ion-icon>
                </span>
                <p class="text">Add to Cart</p>
              </button>


              <!--<input type="hidden" name="product_id" value="<?php echo htmlspecialchars ($row["product_id"]); ?>">-->
              <input type="hidden" name="product_name" value="<?php echo htmlspecialchars ($row["product_name"]); ?>">              
              <input type="hidden" name="product_image" value="<?php echo htmlspecialchars ($row["product_image"]); ?>">           
              <input type="hidden" name="price" value="<?php echo htmlspecialchars ($row["price"]); ?>">
              
             
        </form>
        </div>
        
        <?php

          };

         ?>

        </div>

    </main>

  </section>


</div>
  <?php include('footer.php') ?>
</body>
</html>
