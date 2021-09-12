<?php
	require('db_config.php');
  session_start();
  if(isset($_SESSION["username"])){
  header("Location: index.php");
  exit(); }
  
    // If form submitted, insert values into the database.
    if (isset($_REQUEST['username'])){
		$username = stripslashes($_REQUEST['username']); // removes backslashes
		$username = mysqli_real_escape_string($con,$username); //escapes special characters in a string
		$email = stripslashes($_REQUEST['email']);
		$email = mysqli_real_escape_string($con,$email);
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con,$password);

		$trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `users` (username, password, email, trn_date) VALUES ('$username', '".md5($password)."', '$email', '$trn_date')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form'><h3>You are registered successfully.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
        }
    }else{
?>

<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, initial-scale=1, shrink-to-fit=no">
    <title>Gratitude</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.theme.default.min.css">

    <!-- my own  -->
    <link href="http://fonts.cdnfonts.com/css/charlotte-2" rel="stylesheet">
  
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/custom.css">
    <link rel="stylesheet" href="./assets/css/login.css">
    <!-- End layout styles -->
        
    <link rel="apple-touch-icon" sizes="180x180" href="./assets/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./assets/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="./assets/images/favicon/site.webmanifest">

    
</head>
<body>

  <div class="content">
    <div class="container">
      <div class="row">
      
    
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4">
              <h1> Sign Up</h1>
              <p class="mb-4">Hello, please create your account.</p>
            </div>
 
            <form name="registration" action="" method="post">
            <p>Username</p>
              <div class="form-group m-1">
               
                <input type="text" name="username" class="form-control" id="username">
              </div>
              <p>Email</p>
              <div class="form-group m-1">
                <input type="email" class="form-control creds" name="email"  />
              </div>
              
              <p>Password</p>
              <div class="form-group m-1">
                <input type="password" name="password" class="form-control creds" id="password">
              </div>
           

              <div class="d-flex mb-5 align-items-center">
                <span class="ml-auto"></span> 
              </div>

              <input type="submit" name="submit" value="Register" class="btn btn-block btn-primary p-1 creds">
            </form>
          
            </div>
          </div>
        </div>
        
        <div class="col-md-6">
          <img src="./assets/images/misc/remotely.svg" alt="Image" class="img-fluid">
        </div>
      </div>
    </div>
  </div>
  

  <div class="fixed-bottom"><!--Waves Container-->
<div>
<svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
<defs>
<path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
</defs>
<g class="parallax">
<use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
<use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
<use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
<use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
  fill="rgba(255,255,255,0.3)" />
<use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
</g>
</svg>
</div>
<!--Waves end--></div>
  <?php } ?>
<?php include('./_scripts.php'); ?>
</body>
</html>