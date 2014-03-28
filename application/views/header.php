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
    <header>
      <!-- Start: Navigation wrapper -->
      <div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
          <div class="container">
            <a href="<?php echo site_url('home'); ?>" class="brand brand-bootbus">StudyChem</a>
            <!-- Below button used for responsive navigation -->
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <!-- Start: Primary navigation -->
            <div class="nav-collapse collapse">        
              <ul class="nav pull-right">
                <li class="dropdown">
                  <a href="<?php echo site_url('home'); ?>"> Home </a>                    
                </li>
                <li class="dropdown">
                  <a href="#"> About </a>
                  
                </li>
                <li ><a href="#">FAQ</a></li>
                <li><a href="#">Contact us</a></li>
                <?php if($this -> session -> userdata('isLoggedIn') == FALSE)  { ?>
                <li><a href="<?php echo base_url();?>home/signup">Sign up</a></li>
                <?php } ?>
                <?php if($this->session->userdata("roleid")==1 || $this->session->userdata("roleid")==2) {?>
                <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">My Profile<b class="caret"></b></a>

                <ul class="dropdown-menu">
                <?php if($this->session->userdata("roleid")==2) { ?>
                  <li><a href="<?php echo base_url();?>teacher/dashboard">Dashboard</a></li>
                  <?php } else {?>
                  <li><a href="#">Dashboard</a></li>
                  <?php } ?>
                  <?php if($this->session->userdata("roleid")==2) { ?>
                  <li><a href="<?php echo base_url();?>teacher/timeline">News Feed</a></li>
                  <?php } ?>
                  <?php if($this->session->userdata("roleid")==1) { 
                   $email =  $this -> session -> userdata('email');
                   $this -> db -> where('student',$email);
                   $result = $this -> db -> get('teacherClass');
                   if ($result -> num_rows() == 1 ) {
                    ?>
                  <li><a href="<?php echo base_url();?>student/timeline">News Feed</a></li>
                  <?php 
                  } 
                  } 
                  ?>
                  
                  <li><a href="#">Quizzes</a></li>
                  <li><a href="<?php echo base_url();?>student/settings">Settings</a></li>
                  <li><a href="<?php echo base_url();?>home/logout">Log out</a></li>

                  </ul>
                </li> <?php } else {?>

                <li><a href="<?php echo base_url();?>home/login">Log in</a></li> <?php } ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- End: Navigation wrapper -->   
    </header>
    </body>
    </html>