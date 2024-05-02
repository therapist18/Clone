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
  <title>Size and Colors</title>  
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


<div class="sizecharts">
<div class="color-chart">
  <h3 class="size-font">Color Chart</h3>
<img src="img/colorchart.jpg">
  <a class="size-font" href="https://www.w3schools.com/colors/colors_picker.asp">View more colors</a>
</div>

<div>
<h3 class="size-font">Size Chart</h3>

<img src="img/SizeChart-Short.jpg">
<img src="img/SizeChart-Skorts.jpg">
<img src="img/SizeChart-Polos.jpg">
<img src="img/SizeChart-Pants.jpg">
</div>
</div>

</div>


<?php include('footer.php') ?>
</body>
</html>