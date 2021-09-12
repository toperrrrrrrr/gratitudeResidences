<?php

require('db_config.php');
include("db_auth.php");  


$sql = "SELECT * FROM tenants_info";
if ($result=mysqli_query($con,$sql)) {
    $rowcount=mysqli_num_rows($result);
    echo "The total number of rows are: ".$rowcount; 
}



?>

