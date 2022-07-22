<?php

include 'config.php';
session_start();

if(isset($_POST['submit'])){

   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = mysqli_real_escape_string($conn, md5($_POST['password']));

   $select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE email = '$email' AND password = '$pass'") or die('query failed');

   if(mysqli_num_rows($select) > 0){
      $row = mysqli_fetch_assoc($select);
      $_SESSION['user_id'] = $row['id'];
      header('location:home.php');
   }else{
      $message[] = 'incorrect email or password!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="./assets/css/login.css">
   <link rel="stylesheet" href="./assets/css/style.css">

</head>

<body>

	<!--Navbar-->
	<nav>
		<div class="container nav__container">
			<a href="index.php"> <h4>FURSA</h4></a>
			<ul class="nav__menu">
				<li ><a href="index.php">Home</a></li>
				<li ><a href="opportunities.php">Opportunities</a></li>
				<li ><a href="contact.php">Contact</a></li>
				<li ><a href="login.php">Login</a></li>
			</ul>
			<button id="open-menu-btn"><i class="uil uil-bars"></i></button>
			<button id="close-menu-btn"><i class="uil uil-multiply"></i></button>
		</div>
	</nav>
	<!--End of Navbar-->

<div class="form-container">
     
   

   <form action="" method="post" enctype="multipart/form-data">
      
      <h3>Stay Updated in Strathmore</h3>
      
      <?php
      if(isset($message)){
         foreach($message as $message){
            echo '<div class="message">'.$message.'</div>';
         }
      }
      ?>
      <input type="email" name="email" placeholder="johndoe@strathmore.edu"class="box" required>
      <input type="password" name="password" placeholder="enter password" class="box" required>
      <input type="submit" name="submit" value="Sign In" class="btn">
      <p>Don't have an account? <a href="register.php">Sign Up</a></p>
   </form>

</div>


<script src="./assets/main.js"></script>
</body>
</html>