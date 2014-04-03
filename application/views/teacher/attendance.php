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
          <center>  <h2>Attendance</h2> </center>
        </div>
        <div class="page-header">
        <h2> My Students Attendance Record </h2>
        </div>
        <?php if($data -> num_rows() == 0) { ?>
        <div class="alert alert-info"> 
        <p> Oops! You have no students in your class! </p>
        </div>
        <?php } else {?>
        
		<form class="form-search" action="<?php echo base_url();?>teacher/removeStudent" method="post">
        <input type="date" name="SelectDate"class="input-medium search-query" placeholder="Email of the student">
        <button type="submit" class="btn btn-danger">Enter Date</button>
       </form>
		
		
		
		<table class="table table-striped table-hover">
        <thead>
                <tr>
                  <th>#</th>
                  <th>Name</th>
                  <th>P/A</th>
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
                <td> <?php echo $name;?> </td>
                <td> <form class="form-search" action="<?php echo base_url();?>teacher/markattend" method="post">
					<button name="" type="submit" value="P">P</button>
					<button name="$name" type="submit" value="A">A</button> </form>
				</td>
                <td> <?php echo $email;?> </td>
            </tr>
        <?php } ?>

        </tbody>
        </table>
        <?php } ?>
        <div class="page-header">
          <h3>  Add New Student! </h3>
        </div>
       <form class="form-search" action="<?php echo base_url();?>teacher/addStudent" method="post">
        <input type="text" name="addEmail"class="input-medium search-query" placeholder="Email of the student">
       <button type="submit" class="btn btn-info">Add</button>
       </form>
       <?php if(isset($title)) { ?>
        <div class="alert alert-success"> 
        <p> <?php echo $title?> </p>
        </div>
       <?php } ?>
       <br>
       <div class="page-header">
          <h3>  Remove any existing Student! </h3>
        </div>
       <form class="form-search" action="<?php echo base_url();?>teacher/removeStudent" method="post">
        <input type="text" name="removeEmail"class="input-medium search-query" placeholder="Email of the student">
        <button type="submit" class="btn btn-danger">Remove</button>
       </form>
       <?php if(isset($title1)) { ?>
        <div class="alert alert-success"> 
        <p> <?php echo $title1 ?> </p>
        </div>
       <?php } ?>

       
<script type="text/javascript" src="<?php echo base_url('assests/js/jquery.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assests/js/bootstrap.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assests/js/boot-business.js'); ?>"></script>
       