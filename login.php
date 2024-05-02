<?php
  include ('connection.php');
  session_start();

  $email = $password = '';
  $errors = array('email'=> '', 'password'=> '');

  if(isset($_POST['submit'])){
    
    //check email
    if (empty($_POST['email'])){
      $errors['email'] = 'An email is required <br />';
    } else{
      $email = $_POST['email'];
      if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
       $errors['email'] =  'invalid email address <br />';
      }
    }

     //check email
     if (empty($_POST['password'])){
      $errors['password'] =  'Enter Password <br />';
      } else{
        $password = $_POST['password'];
        if/*(!preg_match('/^[a-zA-Z\S]+$/', $password))*/(!$password == 10){
          $errors['password'] =  'invalid password <br />';
        }
      }

     
      // check if the email address has been used 
    $duplicate = "SELECT * FROM register_details WHERE  email = '$email' ";

    $result = $conn -> query($duplicate);

    if($result){
      if($result->num_rows > 0){
        $row = $result -> fetch_assoc();
        $stored_password = $row['password'];

        if($password == $stored_password){
          //echo "Username and password match";
          $_SESSION['authenticated'] = true;
          $_SESSION['user_name'] = $row['first_name'] ;
          
      $_SESSION['user_id'] = $row['id'];
          if($email == 'winnienzioka@gmail.com'){
            header('Location: admin.php');
          }else{
            header('Location: account.php');
          }
          
        }
        else {
          //echo "Wrong password";
          $errors['password'] =  'Wrong password <br />';
        }
      }else{
        //echo "Username does not match";
        $errors['email'] =  'User not registerd <br />';
      }
    }
      
      if(array_filter($errors)){
        // echo 'errors in the form';
      }else{
       $email = mysqli_real_escape_string($conn, $_POST['email']);
       $password = mysqli_real_escape_string($conn, $_POST['password']);

           
      }
    };
?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title> 
  <link rel="icon" href="img/logo2.jpg" type="image/x-icon">
 
</head>
<body class="bodypage">

<?php  include ('script.php'); ?> 


<section class="form-box">
  <div class="column">
    <div class="row1">
    <a href="index.php"> <img src="img/logo2.jpg" alt=""></a>
    </div>

    <div class="row1">
      <div class="container2">
        <div class="login-col login">
          <form class="form " action="login.php" method="POST">
            <h3>REGISTERED CUSTOMER</h3>
            <span>Welcome, please sign in!</span>
            <input type="text" name="email" placeholder="Email" value="<?php echo htmlspecialchars($email) ?>">
            <div class="errors" ><?php echo $errors['email']; ?></div>
            
            <input type="message" name="password" placeholder="Password" value="<?php echo htmlspecialchars($password) ?>">
            <div class="errors" ><?php echo $errors['password']; ?></div>
            
            <button type="submit" name="submit" value="submit" class="submit-btn">Sign in</button>
            <p>Forgot Password?</p>
          </form>
        </div>

        <div class="register-col login">
          <h3>NEW CUSTOMER</h3>
          <p> Register to keep track of the orders your orders and shop faster.</p>
          <button type="submit" class="submit-btn"><a href="register.php">Register with email</a></button>
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
