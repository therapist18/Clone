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

<section class="school">
  <p><b>SCHOOL LIST</b> - Select the <b>"First Letter"</b> of your <b> "School's Name" </b>: </p>
  <div class="school-selction">
  <div class="first">
    <button type="submit" class="submit-btn"><a href="#">SCHOOLS BY LETTER - "A"</a></button>
    <button type="submit" class="submit-btn"><a href="memberschools.php">SCHOOLS BY LETTER - "B"</a></button>
    <button type="submit" class="submit-btn"><a href="#">SCHOOLS BY LETTER - "C"</a></button>
    <button type="submit" class="submit-btn"><a href="#">SCHOOLS BY LETTER - "D"</a></button>
    <button type="submit" class="submit-btn"><a href="#">SCHOOLS BY LETTER - "E"</a></button>
  </div> 

  <div>
    <button type="submit" class="submit-btn"><a href="#">SCHOOLS BY LETTER - "F"</a></button>
    <button type="submit" class="submit-btn"><a href="#">SCHOOLS BY LETTER - "G"</a></button>
    <button type="submit" class="submit-btn"><a href="#">SCHOOLS BY LETTER - "H"</a></button>
    <button type="submit" class="submit-btn"><a href="#">SCHOOLS BY LETTER - "G"</a></button>
    <button type="submit" class="submit-btn"><a href="#">SCHOOLS BY LETTER - "H"</a></button>
  </div>
  </div>
</section>

</div>
</body>
</html>