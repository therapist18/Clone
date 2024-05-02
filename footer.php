<?php

 include 'connection.php';

$comment = '';
 if(isset($_POST["submit_comment"])){
  $comment = $_POST["comment"]; 
  
  $insert_product = mysqli_query($conn, " INSERT INTO  `reviews` (comment) VALUES('$comment') ");

    if($insert_product) {

      echo '<script>alert("Comment posted !! ");</script>';
      
      }};

?> 


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta charset="ISO-8859-1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>



<?php include('script.php');?>

<!-----####    FOOTER   #### ------->  
<footer>
  <div class="footer-content">
    <div class="content-container">
      <div class="main">
        <h5>CUSTOMER</h5>
        <ul class="footer-links"> 
          <li><a href="#">My Account</a></li>
          <li><a href="#">My Wishlist</a></li>
          <li><a href="#">Request Catalog</a></li>      
          <li><a href="#">Return Policy</a></li>
        </ul>
      </div>
    </div>
    <div class="content-container">
      <div class="main">
        <h5>COMPANY</h5>
        <ul class="footer-links"> 
          <li><a href="#">About</a></li>
          <li><a href="#">Contact Us</a></li>
          <li><a href="#">Career Opportunities</a></li>
          <li><a href="#">Terms and Conditions</a></li>    
          <li><a href="#">Privacy Policy</a></li>
        </ul>
      </div>
    </div>

    <div class="content-container">
      <div class="main">

        <div class="newsletter">
          <h5>REVIEW </h5>
            <p>Hope you had a good experience navigating the website.<br>Please Leave a comment.</p>
            <p><b>Thank you <?php $grinningFace = "&#x1F604;";
                                  echo "$grinningFace";
                              ?>!!</b></p>
            <form action="" method="post">
                <input type="text" name="comment" placeholder="enter your comment" value="<?php echo htmlspecialchars($comment) ?>">

                <button value="submit_comment" name="submit_comment"><i class="fa-solid fa-paper-plane"></i></button>
                
        

               
            </form>
        </div>
          <div class="social-icons">
          <ul>
          <a href="#"><i class="fa-brands fa-facebook"></i></a>
          <a href="#"><i class="fa-brands fa-twitter"></i></a>
          <a href="#"><i class="fa-brands fa-instagram"></i></a>
          <a href="#"><i class="fa-brands fa-linkedin"></i></a>
          </ul>
        </div>

      </div>
    </div>

    <div class="content-container">
      <div class="main">
        <h5>DESTINY UNIFORMS PLUS</h5>
        <ul class="footer-links"> 
          <li><a href="#"><i class="fa-solid fa-location-dot"></i> 3P2W+M42, B8, Mtwapa</a></li>
          <li><a href="tel:0722320830"><i class="fas fa-phone"></i>0722320830</a></li>
          <li><a href="#"><i class="fa-solid fa-envelope"></i>info@destinyuiforms.com</a></li>
        </ul>
        </div>
    </div>
  </div>
  <div class="other">

        <div class="credit">  &#169 2024 | all rights reserved </div>
  </div>
</footer>
</body>
</html>
