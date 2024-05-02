<?php

 include 'connection.php';

 if(isset($_POST["add_to_cart"])){
 // $product_quantity= $_POST["quantity"]; 
  $product_name = $_POST["product_name"]; 
  $quantity = 1;
  $product_image = $_POST["product_image"]; 
  $product_price = $_POST["price"]; 


  $select_cart = mysqli_query($conn, " SELECT * FROM  `cart`  WHERE  product_name = '$product_name' ") ;

  
    if($select_cart -> num_rows > 0) {
    //echo 'Product already added to cart'; 
    echo '<script>alert(" Product already added to cart! ");</script>';
    }else{
      $insert_product = mysqli_query($conn, " INSERT INTO  `cart` ( product_name, product_image,quantity, price) VALUES('$product_name', '$product_image' ,'$quantity', '$product_price') ");

      echo '<script>alert(" Product  added to cart! ");</script>';
      //echo 'Product added to cart'; 
    //echo '<script> alert("Product added to cart!");</script';
  }};

 

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Destiny Uniforms </title>  
  <link rel="icon" href="img/logo2.jpg" type="image/x-icon">



</head>
<body>

<?php include('script.php') ?>
<?php include('header.php') ?>


<!------####    HERO SECTION   #### ------->  
<section class="banner">

<div class="banner-box">
 <div>
  <img src="img/suit-removebg-preview.jpg" alt="">
  </div>
  <aside class="banner-text">
    <h2>Exception for everyone with unique style</h2>
      <h5>Perfect costume created for just its owner only</h5>
      <a href="shop.php"><button class="btn">Shop Now!</button></a>
    </p>
  </aside>
  </div>
</section>




<!------####    SERVICES SECTION   #### ------->  
<section class="services" id="services">


  <div class="box-container">
    
    <div class="boxs">
      <div class="service-icon">
        <i class="fas fa-headset"></i>
      </div>

      <div class="service-desc">
        <h5>EMBROIDERY</h5>
        <p>Get Custom Embroidery On Your Uniforms.</p>
      </div>
    </div>

    <div class="boxs">
      <div class="service-icon">
        <i class="fas fa-headset"></i>
      </div>

      <div class="service-desc">
        <h5>T SHIRT PRINTING</h5>
        <p>Talk To Our Team About T Shirt Printing Today.</p>
      </div>
    </div>

    <div class="boxs">
      <div class="service-icon">
        <i class="fas fa-headset"></i>
      </div>

      <div class="service-desc">
        <h5>DYE SUBLIMATION</h5>
        <p>Lorem, ipsum dolor sit amet.Lorem, ipsum dolor sit amet.</p>
      </div>
    </div>
  </div>
</section>




<!------####    FEATURED-PRODUCTS  SECTION   #### ------->
<section class="featured-products">
  <div class="poster">
    <div class="poster-image">
      <img src="img/redkap-mainsubbanner1.jpg" alt="">
    </div>
  </div>


  <div class="row slide-1">
  <div class="heading">
    <h1>SHOP SCHOOL UNIFORMS</h1>
    <!--<hr class="hr--small">-->
  </div>

  <div class="swiper featured-slider ">
  
      <div class="swiper-wrapper " method="POST" action="">
        <?php 
        $sql = mysqli_query($conn , "SELECT * FROM admin_products UNION SELECT * FROM member_schools LIMIT 3") or die('query failed');
          while($row = mysqli_fetch_array($sql)){
          ?>


        <form class="swiper-slide box2" method="POST"> 
               <img src="<?php echo htmlspecialchars ($row["product_image"]) ?>" width="250" height="250">
               <div class="box-content">
               <h5><?php echo htmlspecialchars ($row["product_name"]) ?></h5>
               <h6><?php echo htmlspecialchars ($row["price"]); ?></h6>

               <button type="submit" value="add to cart" name="add_to_cart" class="CartBtn"><span class="IconContainer"> 
                  <ion-icon name="bag-handle-outline"></ion-icon>
                </span>
                  <p class="text">Add to Cart</p>
                  </button>
               </div>

              <input type="hidden" name="product_name" value="<?php echo htmlspecialchars ($row["product_name"]); ?>">              
              <input type="hidden" name="product_image" value="<?php echo htmlspecialchars ($row["product_image"]); ?>">           
              <input type="hidden" name="price" value="<?php echo htmlspecialchars ($row["price"]); ?>">
      
        </form>
            <?php
            };
            ?>

          <div class="swiper-pagination"></div>
      </div>
    </div>
  </div>

</section>

<section class="featured-products">

  <div class="row">
  <div class="heading">
    <h1>SHOP WORKWEAR UNIFORMS</h1>
    <!--<hr class="hr--small">-->
  </div>

  <div class="swiper featured-slider">
  
  <div class="swiper-wrapper " method="POST" action="">
        <?php 
        $sql = mysqli_query($conn , "SELECT * FROM admin_products UNION SELECT * FROM member_schools LIMIT 3,3") or die('query failed');
          while($row = mysqli_fetch_array($sql)){
          ?>


        <form class="swiper-slide box2" method="POST"> 
               <img src="<?php echo htmlspecialchars ($row["product_image"]) ?>" width="250" height="250">
               <div class="box-content">
               <h5><?php echo htmlspecialchars ($row["product_name"]) ?></h5>
               <h6><?php echo htmlspecialchars ($row["price"]); ?></h6>

                   <button class="CartBtn">
                    <span class="IconContainer"> 
                      <ion-icon name="bag-handle-outline"></ion-icon>
                    </span>
                    <p class="text">Add to Cart</p>
                  </button>
               </div>

              <input type="hidden" name="product_name" value="<?php echo htmlspecialchars ($row["product_name"]); ?>">              
              <input type="hidden" name="product_image" value="<?php echo htmlspecialchars ($row["product_image"]); ?>">           
              <input type="hidden" name="price" value="<?php echo htmlspecialchars ($row["price"]); ?>">

               
        </form>
            <?php
            };
            ?>

          <div class="swiper-pagination"></div>
      </div>
     
    </div>
  </div>
  
  <div class="poster">
    <div class="poster-image">
      <img src="img/navy blue joggers scrubs.jpeg" alt="">
    </div>
  </div>
</section>


<!------####    ABOUT SECTION   #### ------->
<section class="about">
    <div class="about-content">
      <h2>ALL UNIFORM WEAR</h2>
      <h3>Our family-owned business has been providing uniforms for schools and private institutions for over <br>40 years. We also offer professional workwear for those in the medical or industrial fields <br>by the top brands for protective clothing</h3>
      <a href="shop.html">
        <button class="ReadMoreBtn">
          <p class="text">Read Our Story</p>
        </button>
      </a>
      <button class="ReadMoreBtn">
        <p class="text">Store Locator</p>
      </button>
    </div>
</section>

<?php include('footer.php') ?>
</body>
</html>
