<?php
  include ('connection.php');

  $email = $password = $confirm_password =  $first_name =  $last_name = '';
  $errors = array('first_name'=> '' ,  'last_name'=> '', 'email'=> '', 'password'=> '', 'confirm_password'=> '', 'duplicate' => '' );
  $message = ['message' => ''];



  if(isset($_POST['submit'])){
    
    //check names
    if (empty($_POST['first_name'])){
      $errors['first_name'] = 'Enter your First Name<br />';
    } else{
      $first_name = $_POST['first_name'];
    }

    if (empty($_POST['last_name'])){
      $errors['last_name'] = 'Enter your Last Name<br />';
    } else{
      $last_name = $_POST['last_name'];
    }

    //check email
    if (empty($_POST['email'])){
      $errors['email'] = 'An email is required <br />';
    } else{
      $email = $_POST['email'];
      if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
       $errors['email'] =  'invalid email address <br />';
      }
    }

    // check if the email address has been used 
    $duplicate = "SELECT * FROM register_details WHERE  email = '$email'";

    $result = $conn -> query($duplicate);

    if($result){
      if($result->num_rows > 0){
        $errors['duplicate'] = 'Email Has Already been taken <br />';
      }else{
        //echo "email does not exist";
      }
    }

  
     //check password
     if (empty($_POST['password'])){
      $errors['password'] =  'Enter Password <br />';
      } else{
        $password = $_POST['password'];
        if/*(!preg_match('/^[a-zA-Z\S]+$/', $password))*/(!$password == 10){
          $errors['password'] =  'invalid password <br />';
        }
      }

      // confirm password
     if (empty($_POST['confirm_password'])){
      $errors['confirm_password'] =  'Re-enter Password <br />';
      } else{
        $confirm_password = $_POST['confirm_password'];
        if($password == $confirm_password){
         // $message['message'] = "<script> alert('Registration Successful'); </script>";
        }
        else{ 
          $errors['confirm_password'] = ' password does not match <br />';
        }
      }
      
      if(array_filter($errors)){
        // echo 'errors in the form';
      }else{
       $email = mysqli_real_escape_string($conn, $_POST['email']);
       $duplicate = mysqli_real_escape_string($conn, $_POST['duplicate']);
       $password = mysqli_real_escape_string($conn, $_POST['password']);        
       $confirm_password = mysqli_real_escape_string($conn, $_POST['confirm_password']);       
       $first_name = mysqli_real_escape_string($conn, $_POST['first_name']);       
       $last_name = mysqli_real_escape_string($conn, $_POST['last_name']);

       // create sql
       $sql = "INSERT INTO register_details (first_name , last_name , email, password) VALUES('$first_name' , '$last_name', '$email ', '$password' )";

       // save to db and check
       if (mysqli_query($conn, $sql)){
        // success 
        echo "<script> alert('Registration Successful'); </script>";
        //header('Location: login.php?'. $message);
       }else {
        // error
        echo 'query error: ' .mysqli_error($conn);
       }
       
      }
    
  }

?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration Page</title>
  <link rel="icon" href="img/logo2.jpg" type="image/x-icon">

  
</head>
<body class=" bodypage">
  
<?php include('script.php') ?>


<?php
if(isset($message)){
   foreach($message as $message){
      echo '<div class="message" onclick="this.remove();">'.$message.'</div>';
   }
}
?>

<section class="form-box">
  <div class="column">
    <div class="row1">
    <a href="index.php"> <img src="img/logo2.jpg" alt=""></a>
    </div>

  <div class="row1">
  <div class="container2">
    <div class="login-col">
      <form class="form" action="register.php" method="POST">
        <h3>NEW CUSTOMER</h3>

        <input type="text" name="first_name" placeholder="First Name" value="<?php echo htmlspecialchars($first_name) ?>">
        <div class="errors" ><?php echo $errors['first_name']; ?></div>

        <input type="text" name="last_name" placeholder="Last Name" value="<?php echo htmlspecialchars($last_name) ?>">
        <div class="errors" ><?php echo $errors['last_name']; ?></div>
        
        <input type="text" name="email" placeholder="Email" value="<?php echo htmlspecialchars($email) ?>">
        <div class="errors" ><?php echo $errors['email']; ?></div>
        <div class="errors" ><?php echo $errors['duplicate']; ?></div>
        

        <input type="message" name="password" placeholder="Password" value="<?php echo htmlspecialchars($password) ?>">
        <div class="errors" ><?php echo $errors['password']; ?></div>
        
        <input type="message" name="confirm_password" placeholder="Confirm Password" value="<?php echo htmlspecialchars($confirm_password) ?>">
        <div class="errors" ><?php echo $errors['confirm_password']; ?></div>

        <button type="submit" name="submit" value="submit" class="submit-btn">Sign up</button>
      </form>
    </div>
   </div>
    </div>

    <div class="row1">
      <div><a href="index.php"><i class="ri-arrow-left-s-line"></i>BACK TO STORE</a></div>
    </div>

    <div class="row1">
      <div class="other">
        <div class="credit">  &#169 2023 | all rights reserved </div>
  </div>
</div>
  </div>
</section>


</body>
</html>