<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="StudyChem | Short description about StudyChem">
    <meta name="author" content="Your name">
    <title>StudyChem</title>
    <!-- Bootstrap -->
    <link href="<?php echo base_url('assests/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <!-- Bootstrap responsive -->
    <link href="<?php echo base_url('assests/css/bootstrap-responsive.min.css'); ?>" rel="stylesheet">
    <!-- Font awesome - iconic font with IE7 support --> 
    <link href="<?php echo base_url('assests/css/font-awesome.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assests/css/font-awesome-ie7.css'); ?> "rel="stylesheet">
    <!-- Bootbusiness theme -->
    <link href="<?php echo base_url('assests/css/boot-business.css');?>" rel="stylesheet">
  </head>
  <body>
    <!-- Start: HEADER -->
    
    <!-- End: HEADER -->
    <!-- Start: MAIN CONTENT -->
    <div class="content">
    <div class="container"> 
        <div class="page-header">
            <h2>Edit profile</h2>
        </div>
        <div class="row-fluid">
        <form action="<?php echo base_url();?>student/editProfile" method="post" class="form-horizontal form-signin-signup">
                  <input type="text" name="name" placeholder="Your full name. E.g. Rohan garg" value="<?php echo $this -> session -> userdata('name');?>">
           <input type="text" name="class" placeholder="Your class (should be either '9' or '10')" value="<?php echo $this -> session -> userdata('class');?>">
                  <input type="text" name="email" placeholder="Your valid email address." value="<?php echo $this -> session -> userdata('email');?>" disabled>
                  <?php if(isset($valid)){
          echo "<div class='alert alert-success'>".$valid."</div>";
          }?>
                  <?php if(isset($Invalid)){
          echo "<div class='alert alert-danger'>".$Invalid."</div>";
          }?>
          <?php if(validation_errors()!=""){
          echo "<div class='alert alert-danger'>".validation_errors()."</div>";
          } ?>
                  <div>

                    <input type="submit" value="Save" class="btn btn-primary btn-large">
                  </div>
                </form>
                </div>
        <div class="page-header">
            <h2>Change Password</h2>
        </div>
            <form action="<?php echo base_url();?>student/changePassword" method="post" class="form-horizontal form-signin-signup">
                  <input type="password" name="password" placeholder="Your current Password">
                  <input type="password" name="npassword" placeholder="Your new password">
                  <input type="password" name="ncpassword" placeholder="Confirm new password">
                  <?php if(isset($validpass)){
          echo "<div class='alert alert-success'>".$validpass."</div>";
          }?>
                  <?php if(isset($Invalid1)){
          echo "<div class='alert alert-danger'>".$Invalid1."</div>";
          }?>
          <?php if(validation_errors()!=""){
          echo "<div class='alert alert-danger'>".validation_errors()."</div>";
          } ?>
                  <div>
                    <input type="submit" value="Save" class="btn btn-primary btn-large">
                  </div>
                </form>
        </div>
    </div>
      <script type="text/javascript" src="<?php echo base_url('assests/js/jquery.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assests/js/bootstrap.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assests/js/boot-business.js'); ?>"></script>
    </body>
    </html>
  
