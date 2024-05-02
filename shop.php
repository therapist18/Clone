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
  <title>Shop </title>  
  <link rel="icon" href="img/logo2.jpg" type="image/x-icon">
 


</head>
<body>

<?php include('script.php') ?>
<?php include('header.php') ?>

<section class="body">
  <nav class="tiny-navbar">
    <a href="shop.html">Home</a> <span>/</span>
    <a href="shirts.html">Shirts and Polos</a>
    
  </nav>

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
        
        $sql = mysqli_query($conn , "SELECT * FROM admin_products UNION SELECT * FROM member_schools") or die('query failed');
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


              <input type="hidden" name="product_name" value="<?php echo htmlspecialchars ($row["product_name"]); ?>">              
              <input type="hidden" name="product_desc" value="<?php echo htmlspecialchars ($row["product_desc"]); ?>">              
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
</section>


<!--
<script> 

var product_id = document.getElementsByClassName("CartBtn");
for( var i = 0; i<product_id.length; i++){
  product_id[i].addEventListener("click", function(event){
    var target = event.target;
    var id = target.getAttribute("data-id");

    alert(id);
    
  })
}
 </script>

-->

<script src="home.js"></script>
<?php include('footer.php') ?>
</body>
</html>
