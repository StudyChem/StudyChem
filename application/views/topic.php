<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="StudyChem | Short description about StudyChem">
    <meta name="author" content="Your name">
    <title>StudyChem</title>
    <!-- Bootstrap -->
   <!-- <link href="<?php echo base_url('assests/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assests/css/bootstrap-responsive.min.css'); ?>" rel="stylesheet">
   
    <link href="<?php echo base_url('assests/css/font-awesome.css'); ?>" rel="stylesheet"> 
    <link href="<?php echo base_url('assests/css/font-awesome-ie7.css'); ?> "rel="stylesheet"> 
    <link href="<?php echo base_url('assests/css/boot-business.css');?>" rel="stylesheet"> -->
  </head>
  <body>
    <!-- Start: HEADER -->
   
    <!-- End: HEADER -->
    <!-- Start: MAIN CONTENT -->
    <div class="content">
 
    <div class="container">
          <div class="page-header">
           <center> <h1><?php echo $title;?></h1></center>
          </div>
          <p> 
              <?php echo $theory; ?>
          </p>
          <?php if($this -> session -> userdata('roleid')==2) { ?>
         <a href="<?php echo base_url();?>teacher/editTopic/<?php echo $id;?>"> 
         <button type="submit" class="btn btn-large btn-success">Edit </button>
         </a>
         <?php } ?>
          </div>
    </div>


    <script type="text/javascript" src="<?php echo base_url('assests/js/jquery.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assests/js/bootstrap.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assests/js/boot-business.js'); ?>"></script>
  </body>
</html>
