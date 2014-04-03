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
	<script type="text/javascript" src="<?php echo base_url('assests/js/jquery.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assests/js/bootstrap.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assests/js/boot-business.js'); ?>"></script>
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
        
		<form class="form-search" >
        <input type="date" id = "date2" name="SelectDate" class="input-medium search-query"  >
       
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
					<input type="hidden" name="emailid" value="<?php echo $email; ?>"/>
					<input type="hidden" id = "date1" name="attdate" />
			
			<script>	$('#date2').change(function() {
			$('#date1').val($(this).val());
			});
			</script>
					
					<button name="present" type="submit" value="P">P</button>
					<button name="absent" type="submit" value="A">A</button> </form>
				</td>
                <td> <?php echo $email;?> </td>
            </tr>
        <?php } ?>

        </tbody>
        </table>
        <?php } ?>
        <div class="page-header">
          <h3>  Show Attendance </h3>
        </div>
       <form class="form-search" action="<?php echo base_url();?>teacher/showattendance" method="post">
        <input type="date" name="showdate" class="input-medium search-query" >
		<button type="submit" name ="show"  class="btn btn-info">Show</button>
       </form>
	   
	   <?php if(isset($showdate)) { ?>
        
		
		<?php if($data1 -> num_rows() == 0) { ?>
        <div class="alert alert-info"> 
        <p> No attendance for today </p>
        </div>
        <?php } else {?>
        
		<table class="table table-striped table-hover">
        <thead>
                <tr>
                  <th>S.No</th>
                  <th>Name</th>
                  <th>Status</th>
                  
                </tr>
        </thead>
        <tbody>
        <?php
        $i=1;
        foreach($data1 -> result() as $row) { 
            $date = $row -> date;
            $this -> db -> where('date',$date);
            $r = $this -> db -> get('stuhasattend');
            $stu = $r->row();
            $name = $stu -> student;
			$this -> db -> where('email',$name);
			$name1 = $this->db->get('student');
			$data = $name1 -> row();
			$name = $data -> name;
            $value = $stu -> value; 
            ?>
            <tr class="info">
                <td> <?php echo $i; $i++;?> </td>
                <td> <?php echo $name;?> </td>
                
                <td><?php if(($value)==0){ echo "Absent";} else{ echo "Present";} ?></td>
            </tr>
        <?php } ?>

        </tbody>
        </table>
        <?php } ?>
		
		
		
       <?php } ?>
	   
	   
	   
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

       

       