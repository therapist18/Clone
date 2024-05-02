<?php

include("connection.php");

global $grand_total ;
global $product_name;

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Guest Checkout</title>
  <link rel="icon" href="img/logo2.jpg" type="image/x-icon">
 
</head>
<body>
  
<?php include('script.php') ?>
<?php include('header.php') ?>


<div class="shopping-cart guest">

   <table>
      <thead>
         <th>Order Summary</th>
         <th>price</th>
         <th>quantity</th>
         <th>total price</th>
         <th>action</th>
      </thead>
      <tbody>
      <?php
         $cart_query = mysqli_query($conn, "SELECT * FROM `cart` ") or die('query failed');
         
         
         if(mysqli_num_rows($cart_query) > 0){
            while($fetch_cart = mysqli_fetch_assoc($cart_query)){
      ?>
         <tr >
            <td>
               <div class="product-desc">
                  <div class="img-back"><img src="<?php echo $fetch_cart['product_image']; ?>" height="150" width="150" ></div>
                  <?php echo $fetch_cart["product_name"];                 
                     $product_name = $fetch_cart["product_name"];?>
               </div>
            </td>
            
            <td>Ksh <?php echo $fetch_cart["price"]; ?><input type="hidden" class="price"></td>
            <td>
               <form action="" method="POST">
                                
                <?php echo $fetch_cart['quantity']; ?>

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
               };
      ?>     
      <tr class="table-bottom">
         <td colspan="3">grand total :</td>
         <td>Ksh <?php echo $grand_total; ?></td>
         <td><a href="cart.php?delete_all" onclick="return confirm('delete all from cart?');" class=" <?php echo ($grand_total > 1)?'':'disabled'; ?>">delete all</a></td>
      </tr>
      
      </tbody>
   </table>
          
   
   
<form class="form-box guest" method="POST">
  <div class="column">
   <div class="row1">
      <div class="container2">
      
      <div class="login-col ">
      <h3>Billing Info</h3>
      <form class="form" action="" method="POST">
        <input type="text" name="first_name" placeholder="First Name" required>
        <input type="text" name="last_name" placeholder="Last Name" required>
        <input type="text" name="email" placeholder="Email" required>    
        <input type="number" name="phone_number" placeholder="Phone no. " required>
        <input type="text" name="address" placeholder="Address " required>
        
      </form>
      </div>

      <div class="register-col">
      <h3>Delivery Adress</h3>
      <input type="radio" > <p>Default(same as billing address)</p>
      </div>

      </div>
   </div>


   <div class="row1">
   <div class="container2">
      
   <div class="login-col">
   <h3>Payment   <span class="tiny">SECURED ENCRYPTED TRANSACTION</span></h3>
   <p>Please choose your payment method</p><br>

      <input type="radio" ><span>Payment on Delivery</span> or 
      <input type="radio" ><span>Payment Before Delivery</span>

   <!--<div class="logo">
    <img src="img/mpesa-logo.jpg" >
    <img src="img/paypal-logo.jpg" >
    <img src="img/tkash-logo.jpg" >
    <img src="img/airtelmoney-logo.jpg" >
    </div>-->

   </div>

   <div class="register-col total">
    <h3>Billing Summary</h3>
    <p>Items total <span>Ksh <?php echo $grand_total; ?></span></p>
    <p>Total for Your Order <span>Ksh <?php echo $grand_total; ?></span></p>
    <span class="tiny">By clicking Pay and  Place Order, you agree to purchase your item(s) from Global-e as merchant of record for this transaction, on Global-e’s Terms of Sale and Privacy Policy. Global-e is an international fulfilment service provider to Destiny Uniforms.</span>
    
   </div>
   </div>

   </div>
   <button type="submit" name="submit" value="submit" class="submit-btn">PAY AND PLACE ORDER</button>

   </div>
<?php 
if(isset($_POST['submit'])){
  
  $first_name = $_POST['first_name'] ;
  $last_name = $_POST['last_name'] ;  
  $phone_number =$_POST['phone_number'] ;
  $email = $_POST['email'] ;
  $address =  $_POST['address'] ;
     // create sql
     $sql = mysqli_query($conn, "INSERT INTO orders (first_name , last_name , email, address,phone_number,total,product_name) VALUES('$first_name' , '$last_name', '$email ','$address', '$phone_number' ,'$grand_total','$product_name' )");
     
     // save to db and check
     if ($sql){
      // success 
      echo "<script> alert('Order Placed Successfully!'); </script>";
      //header('Location: login.php?'. $message);
     }else {
      // error
      echo 'query error: ' .mysqli_error($conn);
     }
     
    }
         ?>
</form>
</body>
</html>