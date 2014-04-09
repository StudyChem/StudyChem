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
<div class="content">
    <div class="container"> 
        <div class="page-header">
          <center>  <h2>Dashboard</h2> </center>
        </div>
        <div class="page-header">
        <h2> My Students </h2>
        </div>
        <?php if($data -> num_rows() == 0) { ?>
        <div class="alert alert-info"> 
        <p> Oops! You have no students in your class! </p>
        </div>
        <?php } else {?>
        <table class="table table-striped table-hover">
        <thead>
                <tr>
                  <th>S.No</th>
                  <th>Name</th>
                  <th>Class</th>
                  <th>Email</th>
                </tr>
        </thead>
        <tbody>
        <?php
        $i=1;
        foreach($data -> result() as $row) { 
            $email = $row -> student;
            $this -> db -> where('email',$email);
            $r = $this -> db -> get('student');
            $stu = $r->row();
            $name = $stu -> name;
            $class = $stu -> class; 
            ?>
            <tr class="info">
                <td> <?php echo $i; $i++;?> </td>
                <td> <?php echo $name;?></a></td>
                <td> <?php echo $class;?> </td>
                <td> <?php echo $email;?> </td>
				<td> <form class="form-horizontal form-signin-signup" action="<?php echo base_url();?>teacher/viewStudent" method="post" enctype="multipart/form-data">
						<button name = "upload" class="btn btn-primary btn-large" id = "upload" type="submit" value="upload">View Profile</button>
						<input type="hidden" name="stdemail" value="<?php echo $email;?> ">
						</form>
					</td>
            </tr>
        <?php } ?>

        </tbody>
        </table>
        <?php } ?>
		
		<?php if(isset($title)) { ?>
        <div class="alert alert-success"> 
        <p> <?php echo $title?> </p>
        </div>
       <?php } ?>
		<?php if(isset($title1)) { ?>
        <div class="alert alert-success"> 
        <p> <?php echo $title1 ?> </p>
        </div>
       <?php } ?>
        <div class="page-header">
          <h3>  Add New Student! </h3>
        </div>
       <form class="form-search" action="<?php echo base_url();?>teacher/addStudent" method="post">
        <input type="text" name="addEmail"class="input-medium search-query" placeholder="Email of the student">
       <button type="submit" class="btn btn-info">Add</button>
       </form>
       
       <br>
       <div class="page-header">
          <h3>  Remove any existing Student! </h3>
        </div>
       <form class="form-search" action="<?php echo base_url();?>teacher/removeStudent" method="post">
        <input type="text" name="removeEmail"class="input-medium search-query" placeholder="Email of the student">
        <button type="submit" class="btn btn-danger">Remove</button>
       </form>
       

       
<script type="text/javascript" src="<?php echo base_url('assests/js/jquery.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assests/js/bootstrap.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assests/js/boot-business.js'); ?>"></script>
       