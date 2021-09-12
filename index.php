<?php

require('db_config.php');
include("db_auth.php");  

$sql = "SELECT * FROM tenants_info";
if ($result=mysqli_query($con,$sql)) {
    $tenantrowcount=mysqli_num_rows($result);
}

?>
<!DOCTYPE html>
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
  
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/custom.css">
    <!-- End layout styles -->
        
    <link rel="apple-touch-icon" sizes="180x180" href="./assets/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./assets/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="./assets/images/favicon/site.webmanifest">

   

    
</head>
  <body>
    <div class="container-scroller">
      <!-- partial:_sidebar.html -->
      <?php include('./partials/_sidebar.php'); ?>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:navbar -->
        <?php include('./partials/_navbar.php'); ?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
      
          <?php include('./temp_rows.php'); ?>
    
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:footer-->
          <?php include('./partials/_footer.php'); ?>
          <!-- footer -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
 <?php include('./_scripts.php'); ?>
  </body>
</html>