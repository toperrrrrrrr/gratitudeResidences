<?php 
require('db_config.php');
include("db_auth.php"); 

  if (isset($_POST['nname'])){
  $nname = stripslashes($_POST['nname']);
  $nname = mysqli_real_escape_string($con,$nname);
  $unitnum = stripslashes($_POST['unnum']);
  $unitnum = mysqli_real_escape_string($con,$_POST['unnum']);
  $idprovided = stripslashes($_POST['idprovided']);
  $idprovided = mysqli_real_escape_string($con,$_POST['idprovided']);
  $idnumber = stripslashes($_POST['idnumber']);
  $idnumber = mysqli_real_escape_string($con,$_POST['idnumber']);

  $query = "INSERT into `tenants_info` (	tnt_name, unit_id, tnt_ids, tnt_id_number) VALUES ('$nname', '$unitnum', '$idprovided', '$idnumber')";
  $result = mysqli_query($con,$query);
  if($result){
      echo "<h1 class='alert alert-success' role='alert'>
      Data was added congratulation
    </h1>";
  }
}
else{  
  



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
          <div class="row ">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">tenants</h4>
                    <h1 style="text-align:center; font-weight:300; letter-spacing: 2px; font-size:48px;">Tenant's information will be added here.</h1> 
                  </div>
                </div>
              </div>
            </div>

          <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Add new tenant</h4>
                  <form class="form-sample" name="addtenant" action="page_tenants.php" method="post">
                    <p class="card-description"> Personal info </p>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Full Name</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" id="nname" name="nname" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Unit Number</label>
                          <div class="col-sm-9">
                            <input class="form-control" id="unnum" name="unnum"  />
                          </div>
                        </div>
                      </div>
                    </div>
                    
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">



                          <label class="col-sm-3 col-form-label">ID provided</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" id="idprovided" name="idprovided" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">ID number</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" id="idnumber" name="idnumber"/>
                          </div>
                        </div>
                      </div>

                    </div>
                    <input type="submit" name="submit" class="btn btn-outline-secondary btn-lg " value="Submit" >
                  </form>
                </div>
              </div>
            </div>
            <!-- insides -->
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
 <?php include('./_scripts.php'); } ?>
  </body>
</html>