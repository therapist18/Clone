<?php 
  include("connection.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>School</title>  
  <link rel="icon" href="img/logo2.jpg" type="image/x-icon">
 


</head>
<body >

<?php include('script.php') ?>
<?php include('header.php') ?>

<div  class="body">

<nav class="tiny-navbar">
    <a href="index.php">Home</a> <span>/</span>
    <a href="school.php" >Member Schools </a><span>/</span>
    <a href="SCHOOLS BY LETTER - B " >SCHOOLS BY LETTER - "B"  </a>
  </nav>

<section class="school">
  <p><b>CHOOSE A SUB CATEGORY: </b> </p>
  <div class="school-selction">
  <div class="first">
    <button type="submit" class="submit-btn"><a href="bahariparents.php">Bahari Parents       </a></button>
    <button type="submit" class="submit-btn"><a href="#">Bambino Primary School</a></button>
    <button type="submit" class="submit-btn"><a href="#">Bonita Springs Chater Primary School</a></button>
    <button type="submit" class="submit-btn"><a href="#">Bright Adventures Academy </a></button>
 </div> 

  <div>
    <button type="submit" class="submit-btn"><a href="#">Bridge of Hope Academy </a></button>
    <button type="submit" class="submit-btn"><a href="#">Bambino Primary School</a></button>
    <button type="submit" class="submit-btn"><a href="#">Bahari Parents </a></button>
    <button type="submit" class="submit-btn"><a href="#">Bright Adventures Academy </a></button>
  </div> 


  </div>
</section>
</div>
  <?php include('footer.php') ?>
</body>
</html>