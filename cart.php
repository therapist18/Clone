<?php

 include 'connection.php';
 
//$id = $_SESSION['user_name'];

if(isset($_GET['delete'])){
   $remove_id = $_GET['delete'];
   $delete_query = mysqli_query($conn, "DELETE FROM `cart` WHERE product_id = '$remove_id'") or die('query failed');
   if($delete_query){
      header('location:cart.php');
      $message[] = '<script> alert ("Product Deleted")</script>';
   }
   else{
      header('location:cart.php');
      $message[] = '<script> alert ("Product not Deleted")</script>';
   }
};

if(isset($_GET['delete_all'])){
   $delete_query = mysqli_query($conn, "DELETE FROM `cart` ") or die('query failed');

};
// Function to update quantity
function updateQuantity($product_name, $quantity) {
   global $conn;
   $sql = mysqli_query($conn, "UPDATE cart SET quantity = '$quantity' WHERE product_name = '$product_name'");

};
 // Increment quantity
if (isset($_POST['increment'])) {
   $product_name = $_POST['product_name'];
   $quantity = $_POST['quantity'] + 1;
   updateQuantity($product_name, $quantity);
};

// Decrement quantity
if (isset($_POST['decrement'])) {
   $product_name = $_POST['product_name'];
   $quantity = $_POST['quantity'] - 1;
   if ($quantity < 1) {
       $quantity = 1; // minimum quantity is 1
   }
   updateQuantity($product_name, $quantity);
};



?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Cart</title>
  <link rel="icon" href="img/logo2.jpg" type="image/x-icon">
 
</head>
<body>

<?php include('script.php') ?>
<?php include('header.php') ?>



<section class="body">
  <nav class="tiny-navbar">
    <a href="shop.html">Home</a> <span>/</span>
    <a href="shirts.html">Cart</a>
    
  </nav>

  <!--
  <div class="cart-body">
    <h1 class="page-tittle" >Cart</h1>

    <p class="empty-cart" >Your Cart is currently empty.</p>
  </div>

  <button type="submit"  class="CartBtn ">
    <span class="IconContainer"> 
    <i class="ri-arrow-left-s-line"></i>
      </span>
      <p class="text">Back To Shop</p>
    </button>

-->

<div class="shopping-cart">

   <table>
      <thead>
         <th>Product</th>
         <th>price</th>
         <th>quantity</th>
         <th>total price</th>
         <th>action</th>
      </thead>
      <tbody>
      <?php
         $cart_query = mysqli_query($conn, "SELECT * FROM `cart` ") or die('query failed');
         $grand_total = 0;
         
         if(mysqli_num_rows($cart_query) > 0){
            while($fetch_cart = mysqli_fetch_assoc($cart_query)){
      ?>
         <tr >
            <td>
               <div class="product-desc">
                  <div class="img-back"><img src="<?php echo $fetch_cart['product_image']; ?>" height="150" width="150" ></div>
                  <div>
                     <p><?php echo $fetch_cart["product_name"]; ?></p>
                     <p> Color: <?php echo $fetch_cart["product_desc"]; ?></p>
                  </div>
               </div>
            </td>
            
            <td>Ksh <?php echo $fetch_cart["price"]; ?><input type="hidden" class="price"></td>
            <td>
               <form action="" method="POST">
                  
               <div class="card">
                 <button type="submit" class="inc-dec-btn" name="increment">+</button>
                  <div class="number" min="1" ><?php echo $fetch_cart['quantity']; ?></div>
                  <button type="submit" class="inc-dec-btn" name="decrement">-</button>
               </div>  

                  <input type="hidden" name="quantity" value="<?php echo $fetch_cart['quantity']; ?>">
                  <input type="hidden" name="product_name" value="<?php echo $fetch_cart['product_name']; ?>">
                 
                       <!-- <button id="inc-dec-btn" class="decrement-btn"> - </button>
                     <input type="text" class="number input-qty" value="1" disabled>
                     <button id="inc-dec-btn" class="increment-btn"> + </button>
                  </div> 
                <input type="submit" name="update_cart" value="update" class="option-btn">-->
               </form>
            </td>
            <td class="total">Ksh <?php echo $sub_total = ($fetch_cart['price'] * $fetch_cart['quantity']); ?></td>
            <td><a href="cart.php?delete=<?php echo $fetch_cart['product_id']; ?>" class="CartBtn" onclick="return confirm('Are you sure you want to remove item from cart?');"><i class="fa-solid fa-trash"></i> remove</a></td>
         </tr>
         <?php
         $grand_total += $sub_total;
            };
         }else{
                  echo '  <div class="cart-body">
              
                  <p class="empty-cart" >Your Cart is currently empty.</p>
                </div>';
               }
      ?>     
      <tr class="table-bottom">
         <td colspan="3">grand total :</td>
         <td>Ksh <?php echo $grand_total; ?></td>
         <td><a href="cart.php?delete_all" onclick="return confirm('delete all from cart?');" class=" <?php echo ($grand_total > 1)?'':'disabled'; ?>">delete all</a></td>
      </tr>

      </tbody>
   </table>
   
  <!-- <div class="order-summary">
      <span class="summ">Order Summary</span>
      <h4 class="total">Estimated Order Total Ksh <?php echo $grand_total; ?></h4>
      <button class="submit-btn"> CHECKOUT </button>
   </div>
            -->
            <div class="option-btns">
            <a href="shop.php" ><button type="submit"  class="CartBtn ">
            <span class="IconContainer"> 
            <i class="ri-arrow-left-s-line"></i>
              </span>
              <p class="text">Back to Shop</p>
            </button></a>
            
            
            <a href="checkout.php" ><button type="submit"  class="CartBtn ">            
            <p class="text">Proceed to Checkout</p>
         
            </button></a>
            </div>
   
 
</div>
</section>  
 
<?php include('footer.php') ?>

<!--
<script>


   var price =document.getElementsByClassName('price');
   var quantity = document.getElementsByClassName('quantity');
   var total = document.getElementsByClassName('total');

   function subTotal() {
      for (i = 0; i <price.length; i++) {
         total[i].innerText = (price[i].value)*(quantity[i].value);
      }
      console.log(total);
   }

   subTotal();
   
</script>   

<script>
   $(document).ready(function() {
      $('.increment-btn').click(function (e) {
         e.preventDefault();

         var qty = $(this).closest('.product_data').find('.input-qty').val();

         var value = parseInt(qty, 10);
         value =isNaN(value) ? 0 : value;
         if (value < 10)
         {
            value++;
            $(this).closest('.product_data').find('.input-qty').val(value);

         }
      });
   });
   </script>

-->

</body>
</html>