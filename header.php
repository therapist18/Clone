<?php

  include("connection.php");

  session_start();
  $select_rows = mysqli_query($conn, " SELECT * FROM `cart` ");
  $row_count = mysqli_num_rows($select_rows);
  $_SESSION['row_count'] =  $row_count;
  
  
  
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>


<?php include('script.php');?>

<!------####    NAVBAR      #### ------->
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
        <li><a href="login.php" onclick = " alert('Sign in to track your order');">Order Tracking</a></li>
        <li ><i id="tiny-img" class="fa-solid fa-palette"></i><a href="sizechart.php"><!--<img src="img/colorwheel.jpeg" alt="">-->Colors</a></li>
        <li><a href="school.php">Shop By School</a></li>
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
      
    <div class="navbar-three">
      <div class="container">
      <ul>
        
        <li class="mini-links"><a href="#">MEDICAL <span class="icon-small"><i class="ri-arrow-down-s-line"></i></span></a>
          <div class="mega-box">
            <div class="content">
              <div class="content-container">
              <div class="main">
                <h5>Girls</h5>
                <ul class="mega-links">                          
                  <h4>Tops</h4>
                  <li><a href="#"><i class="ri-arrow-right-s-line"></i>Shirts</a></li>   
  
                  <h4>Bottoms</h4>
                  <li><a href="#"><i class="ri-arrow-right-s-line"></i>Pants</a></li>
                  <li><a href="#"><i class="ri-arrow-right-s-line"></i>Shorts</a></li>
                  <li><a href="#"><i class="ri-arrow-right-s-line"></i>Skirts</a></li>
                  <li><a href="#"><i class="ri-arrow-right-s-line"></i>Skorts</a></li> 
                </ul>
              </div>
              </div>
  
              <div class="content-container">
              <div class="main">
                <h5>Boys</h5>
                <ul class="mega-links">                          
                  <h4>Tops</h4>
                  <li><a href="#"><i class="ri-arrow-right-s-line"></i>Shirts & Polos</a></li>   
  
                  <h4>Bottoms</h4>
                  <li><a href="#"><i class="ri-arrow-right-s-line"></i>Trousers</a></li>
                  <li><a href="#"><i class="ri-arrow-right-s-line"></i>Shorts</a></li>
                </ul>
              </div>
              </div>
  
              <div class="content-container">
              <div class="main">
                <h5>Accessories</h5>
                <ul class="mega-links">                          
                
                  <li><a href="#"><i class="ri-arrow-right-s-line"></i>Socks</a></li>   
                  <li><a href="#"><i class="ri-arrow-right-s-line"></i>Ties</a></li>
                  <li><a href="#"><i class="ri-arrow-right-s-line"></i>Sweaters</a></li>
                  <li><a href="#"><i class="ri-arrow-right-s-line"></i>Fleece</a></li>
                  <li><a href="#"><i class="ri-arrow-right-s-line"></i>Shoes</a></li> 
                </ul>
              </div>
              </div>
              <img src="img/fashion-gf4662c7d0_1280.jpg">
            </div>
            <div class="credit">  &#169 2023 | all rights reserved </div>
          </div>
        </li>
        <li class="mini-links"><a href="#">SCHOOL <span class="icon-small"><i class="ri-arrow-down-s-line"></i></span></a>
          <div class="mega-box">
            <div class="content">
              <div class="content-container">
              <div class="main">
                <h5>Girls</h5>
                <ul class="mega-links">                          
                  <h4>Tops</h4>
                  <li><a href="#"><i class="ri-arrow-right-s-line"></i>Shirts</a></li>   
  
                  <h4>Bottoms</h4>
                  <li><a href="#"><i class="ri-arrow-right-s-line"></i>Pants</a></li>
                  <li><a href="#"><i class="ri-arrow-right-s-line"></i>Shorts</a></li>
                  <li><a href="#"><i class="ri-arrow-right-s-line"></i>Skirts</a></li>
                  <li><a href="#"><i class="ri-arrow-right-s-line"></i>Skorts</a></li> 
                </ul>
              </div>
              </div>
  
              <div class="content-container">
              <div class="main">
                <h5>Boys</h5>
                <ul class="mega-links">                          
                  <h4>Tops</h4>
                  <li><a href="#"><i class="ri-arrow-right-s-line"></i>Shirts & Polos</a></li>   
  
                  <h4>Bottoms</h4>
                  <li><a href="#"><i class="ri-arrow-right-s-line"></i>Trousers</a></li>
                  <li><a href="#"><i class="ri-arrow-right-s-line"></i>Shorts</a></li>
                </ul>
              </div>
              </div>
  
              <div class="content-container">
              <div class="main">
                <h5>Accessories</h5>
                <ul class="mega-links">                          
                
                  <li><a href="#"><i class="ri-arrow-right-s-line"></i>Socks</a></li>   
                  <li><a href="#"><i class="ri-arrow-right-s-line"></i>Ties</a></li>
                  <li><a href="#"><i class="ri-arrow-right-s-line"></i>Sweaters</a></li>
                  <li><a href="#"><i class="ri-arrow-right-s-line"></i>Fleece</a></li>
                  <li><a href="#"><i class="ri-arrow-right-s-line"></i>Shoes</a></li> 
                </ul>
              </div>
              </div>
              <img src="img/fashion-gf4662c7d0_1280.jpg">
            </div>
            <div class="credit">  &#169 2023 | all rights reserved </div>
          </div>
        </li>

        <li class="mini-links"><a href="#"> INDUSTRIAL<span class="icon-small"><i class="ri-arrow-down-s-line"></i></span></a>
          <div class="mega-box">
            <div class="content">
              <div class="content-container">
              <div class="main">
                <h5>Work wear</h5>
                <ul class="mega-links">                     
                  <li><a href="#"><i class="ri-arrow-right-s-line"></i>Overalls</a></li>
                  <li><a href="#"><i class="ri-arrow-right-s-line"></i>Dust Coats</a></li>
                  <li><a href="#"><i class="ri-arrow-right-s-line"></i>Accessories</a></li>
                </ul>
              </div>

              <div class="main">
                <h5>Casual wear</h5>
                <ul class="mega-links">                          
                  <li><a href="#"><i class="ri-arrow-right-s-line"></i>T-shirts</a></li>
                  <li><a href="#"><i class="ri-arrow-right-s-line"></i>Jackets</a></li>
                  <li><a href="#"><i class="ri-arrow-right-s-line"></i>Hoodies</a></li>
                  <li><a href="#"><i class="ri-arrow-right-s-line"></i>Vests</a></li>    
                </ul>
              </div>
              </div>
  
              <div class="content-container">
              <div class="main">
                <h5>Corporate Wear</h5>
                <ul class="mega-links">                          
                  <h4>Tops</h4>
                  <li><a href="#"><i class="ri-arrow-right-s-line"></i>Shirts & Polos</a></li>   
  
                  <h4>Bottoms</h4>
    
                  <li><a href="#"><i class="ri-arrow-right-s-line"></i>Trousers</a></li>
                  <li><a href="#"><i class="ri-arrow-right-s-line"></i>Shorts</a></li>
                </ul>
              </div>
              </div>
  
              <div class="content-container">
              <div class="main">
                <h5>Girls</h5>
                <ul class="mega-links">                          
                  <h4>Tops</h4>
                  <li><a href="#"><i class="ri-arrow-right-s-line"></i>Shirts</a></li>   
  
                  <h4>Bottoms</h4>
                  <li><a href="#"><i class="ri-arrow-right-s-line"></i>Pants</a></li>
                  <li><a href="#"><i class="ri-arrow-right-s-line"></i>Shorts</a></li>
                  <li><a href="#"><i class="ri-arrow-right-s-line"></i>Skirts</a></li>
                  <li><a href="#"><i class="ri-arrow-right-s-line"></i>Skorts</a></li> 
                </ul>
              </div>
              </div>
            </div>
            <div class="credit">  &#169 2023 | all rights reserved </div>
          </div>
          </li>
        
        <li class="mini-links"><a href="#">CORPORATE <span class="icon-small"><i class="ri-arrow-down-s-line"></i></span></a>
        <div class="mega-box">
          <div class="content">
            <div class="content-container">
            <div class="main">
              <h5>Imagewear</h5>
              <ul class="mega-links">                          
                <h4>Tops</h4>     
                <li><a href="#"><i class="ri-arrow-right-s-line"></i>Shirts</a></li> 
                <li><a href="#"><i class="ri-arrow-right-s-line"></i>T-shirts</a></li>
                <li><a href="#"><i class="ri-arrow-right-s-line"></i>Polos</a></li>
                <li><a href="#"><i class="ri-arrow-right-s-line"></i>Skirts</a></li>
                <li><a href="#"><i class="ri-arrow-right-s-line"></i>Shorts</a></li>                   
                <li><a href="#"><i class="ri-arrow-right-s-line"></i>Fleece</a></li>
                <li><a href="#"><i class="ri-arrow-right-s-line"></i>Vests</a></li>
              </ul>
            </div>
            </div>

            <div class="content-container">
            <div class="main">
              <h5>Boys</h5>
              <ul class="mega-links">                          
                <h4>Tops</h4>
                <li><a href="#"><i class="ri-arrow-right-s-line"></i>Shirts & Polos</a></li>   

                <h4>Bottoms</h4>
  
                <li><a href="#"><i class="ri-arrow-right-s-line"></i>Trousers</a></li>
                <li><a href="#"><i class="ri-arrow-right-s-line"></i>Shorts</a></li>
              </ul>
            </div>
            </div>
          </div>
          <div class="credit">  &#169 2023 | all rights reserved </div>
        </div>
        
        </li>
        
        <li class="mini-links"><a href="#">HOSPITALITY <span class="icon-small"><i class="ri-arrow-down-s-line"></i></span></a>
          <div class="mega-box">
            <div class="content">
              <div class="content-container">
              <div class="main">
                <h5>Chefwear</h5>
                <ul class="mega-links">                          
                  <li><a href="#"><i class="ri-arrow-right-s-line"></i>Chef Coats</a></li>   
                  <li><a href="#"><i class="ri-arrow-right-s-line"></i>Chef Pants</a></li>
                  <li><a href="#"><i class="ri-arrow-right-s-line"></i>Chef Shirts</a></li>
                  <li><a href="#"><i class="ri-arrow-right-s-line"></i>Headwear</a></li>
                  <li><a href="#"><i class="ri-arrow-right-s-line"></i>Aprons</a></li> 
                </ul>
              </div>
              </div>
  
              <div class="content-container">
              <div class="main">
                <h3>Housekeeping</h3>
                <ul class="mega-links">             
                  <li><a href="#"><i class="ri-arrow-right-s-line"></i>Shirts</a></li>      
                  <li><a href="#"><i class="ri-arrow-right-s-line"></i>Pants</a></li>
                  <li><a href="#"><i class="ri-arrow-right-s-line"></i>Dresses</a></li>
                </ul>
              </div>
              </div>
  
              <div class="content-container">
              <div class="main">
                <h3>Receptionists</h3>
                <ul class="mega-links">  
                  <li><a href="#"><i class="ri-arrow-right-s-line"></i>Shirts</a></li>   
                  <li><a href="#"><i class="ri-arrow-right-s-line"></i>Skirts</a></li> 
                  <li><a href="#"><i class="ri-arrow-right-s-line"></i>Pants</a></li>
                  <li><a href="#"><i class="ri-arrow-right-s-line"></i>Blazers</a></li>
                  <li><a href="#"><i class="ri-arrow-right-s-line"></i>Vests</a></li>
                  <li><a href="#"><i class="ri-arrow-right-s-line"></i>Skorts</a></li> 
                </ul>
              </div>
              </div>
            </div>
            <div class="credit">  &#169 2023 | all rights reserved </div>
          </div>
          </li>
        
        <li class="mini-links"><a href="#">PUBLIC SAFETY<span class="icon-small"><i class="ri-arrow-down-s-line"></i></span></a>
          <div class="mega-box">
            <div class="content">
              <div class="content-container">
              <div class="main">
                <h3>Girls</h3>
                <ul class="mega-links">                          
                  <h4>Tops</h4>
                  <li><a href="#"><i class="ri-arrow-right-s-line"></i>Shirts</a></li>   
  
                  <h4>Bottoms</h4>
                  <li><a href="#"><i class="ri-arrow-right-s-line"></i>Pants</a></li>
                  <li><a href="#"><i class="ri-arrow-right-s-line"></i>Shorts</a></li>
                  <li><a href="#"><i class="ri-arrow-right-s-line"></i>Skirts</a></li>
                  <li><a href="#"><i class="ri-arrow-right-s-line"></i>Skorts</a></li> 
                </ul>
              </div>
              </div>
  
              <div class="content-container">
              <div class="main">
                <h3>Boys</h3>
                <ul class="mega-links">                          
                  <h4>Tops</h4>
                  <li><a href="#"><i class="ri-arrow-right-s-line"></i>Shirts & Polos</a></li>   
  
                  <h4>Bottoms</h4>
    
                  <li><a href="#"><i class="ri-arrow-right-s-line"></i>Trousers</a></li>
                  <li><a href="#"><i class="ri-arrow-right-s-line"></i>Shorts</a></li>
                </ul>
              </div>
              </div>
  
              <div class="content-container">
              <div class="main">
                <h3>Girls</h3>
                <ul class="mega-links">                          
                  <h4>Tops</h4>
                  <li><a href="#"><i class="ri-arrow-right-s-line"></i>Shirts</a></li>   
  
                  <h4>Bottoms</h4>
                  <li><a href="#"><i class="ri-arrow-right-s-line"></i>Pants</a></li>
                  <li><a href="#"><i class="ri-arrow-right-s-line"></i>Shorts</a></li>
                  <li><a href="#"><i class="ri-arrow-right-s-line"></i>Skirts</a></li>
                  <li><a href="#"><i class="ri-arrow-right-s-line"></i>Skorts</a></li> 
                </ul>
              </div>
              </div>
            </div>
            <div class="credit">  &#169 2023 | all rights reserved </div>
          </div>
          </li>
        
        <li class="mini-links"><a href="#">FOOTWEAR <span class="icon-small"><i class="ri-arrow-down-s-line"></i></span></a>
          <div class="mega-box">
            <div class="content">
              <div class="content-container">
              <div class="main">
                <h3>Girls</h3>
                <ul class="mega-links">                          
                  <h4>Tops</h4>
                  <li><a href="#"><i class="ri-arrow-right-s-line"></i>Shirts</a></li>   
  
                  <h4>Bottoms</h4>
                  <li><a href="#"><i class="ri-arrow-right-s-line"></i>Pants</a></li>
                  <li><a href="#"><i class="ri-arrow-right-s-line"></i>Shorts</a></li>
                  <li><a href="#"><i class="ri-arrow-right-s-line"></i>Skirts</a></li>
                  <li><a href="#"><i class="ri-arrow-right-s-line"></i>Skorts</a></li> 
                </ul>
              </div>
              </div>
  
              <div class="content-container">
              <div class="main">
                <h3>Boys</h3>
                <ul class="mega-links">                          
                  <h4>Tops</h4>
                  <li><a href="#"><i class="ri-arrow-right-s-line"></i>Shirts & Polos</a></li>   
  
                  <h4>Bottoms</h4>
    
                  <li><a href="#"><i class="ri-arrow-right-s-line"></i>Trousers</a></li>
                  <li><a href="#"><i class="ri-arrow-right-s-line"></i>Shorts</a></li>
                </ul>
              </div>
              </div>
  
              <div class="content-container">
              <div class="main">
                <h3>Girls</h3>
                <ul class="mega-links">                          
                  <h4>Tops</h4>
                  <li><a href="#"><i class="ri-arrow-right-s-line"></i>Shirts</a></li>   
  
                  <h4>Bottoms</h4>
                  <li><a href="#"><i class="ri-arrow-right-s-line"></i>Pants</a></li>
                  <li><a href="#"><i class="ri-arrow-right-s-line"></i>Shorts</a></li>
                  <li><a href="#"><i class="ri-arrow-right-s-line"></i>Skirts</a></li>
                  <li><a href="#"><i class="ri-arrow-right-s-line"></i>Skorts</a></li> 
                </ul>
              </div>
              </div>
            </div>
            <div class="credit">  &#169 2023 | all rights reserved </div>
          </div>
          </li>
        
        <li class="mini-links"><a href="#">THEME UNIFORMS <span class="icon-small"><i class="ri-arrow-down-s-line"></i></span></a>
          <div class="mega-box">
          <div class="content">
            <div class="content-container">
            <div class="main">
              <h3>Girls</h3>
              <ul class="mega-links">                          
                <h4>Tops</h4>
                <li><a href="#"><i class="ri-arrow-right-s-line"></i>Shirts</a></li>   

                <h4>Bottoms</h4>
                <li><a href="#"><i class="ri-arrow-right-s-line"></i>Pants</a></li>
                <li><a href="#"><i class="ri-arrow-right-s-line"></i>Shorts</a></li>
                <li><a href="#"><i class="ri-arrow-right-s-line"></i>Skirts</a></li>
                <li><a href="#"><i class="ri-arrow-right-s-line"></i>Skorts</a></li> 
              </ul>
            </div>
            </div>

            <div class="content-container">
            <div class="main">
              <h3>Boys</h3>
              <ul class="mega-links">                          
                <h4>Tops</h4>
                <li><a href="#"><i class="ri-arrow-right-s-line"></i>Shirts & Polos</a></li>   

                <h4>Bottoms</h4>
  
                <li><a href="#"><i class="ri-arrow-right-s-line"></i>Trousers</a></li>
                <li><a href="#"><i class="ri-arrow-right-s-line"></i>Shorts</a></li>
              </ul>
            </div>
            </div>

            <div class="content-container">
            <div class="main">
              <h3>Girls</h3>
              <ul class="mega-links">                          
                <h4>Tops</h4>
                <li><a href="#"><i class="ri-arrow-right-s-line"></i>Shirts</a></li>   

                <h4>Bottoms</h4>
                <li><a href="#"><i class="ri-arrow-right-s-line"></i>Pants</a></li>
                <li><a href="#"><i class="ri-arrow-right-s-line"></i>Shorts</a></li>
                <li><a href="#"><i class="ri-arrow-right-s-line"></i>Skirts</a></li>
                <li><a href="#"><i class="ri-arrow-right-s-line"></i>Skorts</a></li> 
              </ul>
            </div>
            </div>
          </div>
          <div class="credit">  &#169 2023 | all rights reserved </div>
        </div>
        </li>
      </ul>
      </div>

      </div>

    <div class="mobile-bottom-navigation">

      <button class="action-btn" data-mobile-menu-open-btn>
        <ion-icon name="menu-outline"></ion-icon>
      </button>

      <button class="action-btn">
        <a href="cart.php"><ion-icon name="bag-handle-outline"></ion-icon></a>

        <span class="count"><?php echo $row_count; ?></span>
      </button>

      <button class="action-btn">
       <a href="index.php"><ion-icon name="home-outline"></ion-icon></a>
      </button>

      <button class="action-btn">
        <ion-icon name="heart-outline"></ion-icon>

        <span class="count">0</span>
      </button>


    </div>

    <div class="mobile-navigation-menu  has-scrollbar" data-mobile-menu>

      <div class="menu-top">
        <h2 class="menu-title">Menu</h2>

        <button class="menu-close-btn" data-mobile-menu-close-btn>
          <ion-icon name="close-outline"></ion-icon>
        </button>
      </div>

      <ul class="mobile-menu-category-list">

        <li class="menu-category">
          <a href="index.php" class="menu-title">Home</a>
        </li>

        <li class="menu-category">

          <button class="accordion-menu" data-accordion-btn >
            <p class="menu-title">Medical</p>

            <div>
              <ion-icon name="add-outline" class="add-icon"></ion-icon>
              <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
            </div>
          </button>

          <ul class="submenu-category-list " data-accordion>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Shirt</a>
            </li>
            <li class="submenu-category">
              <a href="#" class="submenu-title">Shorts & Jeans</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Safety Shoes</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Wallet</a>
            </li>

          </ul>

        </li>

        <li class="menu-category">

          <button class="accordion-menu" data-accordion-btn>
            <p class="menu-title">School</p>

            <div>
              <ion-icon name="add-outline" class="add-icon"></ion-icon>
              <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
            </div>
          </button>

          <ul class="submenu-category-list" data-accordion>

            <li class="submenu-category">
              <a href="#" class="submenu-title"></a>
            </li>
            <li class="submenu-category">
              <a href="#" class="submenu-title">Shorts & Jeans</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Safety Shoes</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Wallet</a>
            </li>

          </ul>

        </li>

        <li class="menu-category">

          <button class="accordion-menu" data-accordion-btn>
            <p class="menu-title">Corporate</p>

            <div>
              <ion-icon name="add-outline" class="add-icon"></ion-icon>
              <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
            </div>
          </button>

          <ul class="submenu-category-list" data-accordion>

            <li class="submenu-category">
              <a href="#" class="submenu-title"></a>
            </li>
            <li class="submenu-category">
              <a href="#" class="submenu-title">Shorts & Jeans</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Safety Shoes</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Wallet</a>
            </li>

          </ul>

        </li>

        <li class="menu-category">

          <button class="accordion-menu" data-accordion-btn>
            <p class="menu-title">Industrial</p>

            <div>
              <ion-icon name="add-outline" class="add-icon"></ion-icon>
              <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
            </div>
          </button>

          <ul class="submenu-category-list" data-accordion>

            <li class="submenu-category">
              <a href="#" class="submenu-title"></a>
            </li>
            <li class="submenu-category">
              <a href="#" class="submenu-title">Shorts & Jeans</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Safety Shoes</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Wallet</a>
            </li>

          </ul>

        </li>

        <li class="menu-category">

          <button class="accordion-menu" data-accordion-btn>
            <p class="menu-title">Hospitality</p>

            <div>
              <ion-icon name="add-outline" class="add-icon"></ion-icon>
              <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
            </div>
          </button>

          <ul class="submenu-category-list" data-accordion>

            <li class="submenu-category">
              <a href="#" class="submenu-title"></a>
            </li>
            <li class="submenu-category">
              <a href="#" class="submenu-title">Shorts & Jeans</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Safety Shoes</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Wallet</a>
            </li>

          </ul>

        </li>

        <li class="menu-category">

          <button class="accordion-menu" data-accordion-btn>
            <p class="menu-title">Theme Uniforms</p>

            <div>
              <ion-icon name="add-outline" class="add-icon"></ion-icon>
              <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
            </div>
          </button>

          <ul class="submenu-category-list" data-accordion>

            <li class="submenu-category">
              <a href="#" class="submenu-title"></a>
            </li>
            <li class="submenu-category">
              <a href="#" class="submenu-title">Shorts & Jeans</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Safety Shoes</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Wallet</a>
            </li>

          </ul>

        </li>
      </ul>

        <div class="menu-bottom">

          <ul class="menu-category-list">

            <li class="menu-category">

              <button class="accordion-menu" data-accordion-btn>
                <p class="menu-title">Language</p>

                <ion-icon name="caret-back-outline" class="caret-back"></ion-icon>
              </button>

              <ul class="submenu-category-list" data-accordion>

                <li class="submenu-category">
                  <a href="#" class="submenu-title">English</a>
                </li>

                <li class="submenu-category">
                  <a href="#" class="submenu-title">Espa&ntilde;ol</a>
                </li>

                <li class="submenu-category">
                  <a href="#" class="submenu-title">Fren&ccedil;h</a>
                </li>

              </ul>

            </li>

            <li class="menu-category">
              <button class="accordion-menu" data-accordion-btn>
                <p class="menu-title">Currency</p>
                <ion-icon name="caret-back-outline" class="caret-back"></ion-icon>
              </button>

              <ul class="submenu-category-list" data-accordion>
                <li class="submenu-category">
                  <a href="#" class="submenu-title">USD &dollar;</a>
                </li>

                <li class="submenu-category">
                  <a href="#" class="submenu-title">EUR &euro;</a>
                </li>
              </ul>
            </li>

          </ul>

          <ul class="menu-social-container">

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-facebook"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-twitter"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-instagram"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-linkedin"></ion-icon>
              </a>
            </li>

          </ul>

        </div>
    </div>
    </nav>
</section>


<script src="home.js"></script>
</body>
</html>


