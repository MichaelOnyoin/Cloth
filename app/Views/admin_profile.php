<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Profile</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/client_profile.css">
    <?php
    $db=db_connect();
    require('profile1.php');
    ?>

</head>
<body>
    <div class="container">
        <div class="main-body">
        <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                        
                        <h4>Name:<?php echo " $login_firstname" ?> </h4>
                        <h4>User_id:<?php echo " $login_id" ?> </h4>
                         
                    </div>
                </div>
            </div>
        </div>
    </div>
        <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Full Name: </h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo "$login_firstname"." "."$login_lastname" ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo "$login_email" ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Gender</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo "$login_gender";?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Role</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo "$login_role"; ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Home Address</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                     <p><h6 class="mb-0">CBD Nairobi Kenya</h6></p>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-12">
                      <a class="btn btn-info " target="__blank" href="adminEdit">Edit</a>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <a class="btn btn-info " target="__blank" href="# receipt" style="color:yellow;padding:10px;margin:25px;">Review</a>
                    </div>
                  </div>
        </div>
    </div>
</body>
</html>