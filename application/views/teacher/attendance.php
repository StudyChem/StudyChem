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
        
		<form class="form-search" method = "post">
        <input type="date" id = "date2" name="date2" class="input-medium search-query" value="<?php if(isset($_SESSION['date'])) echo $_SESSION['date'] ?>" >
       
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
		<style>
		.color0{
		}
		.color1{
		background:green !important;}
		</style>
        <?php
        $i=1;
        foreach($data -> result() as $row) {
            $email = $row -> student;
            $this -> db -> where('email',$email);
            $r = $this -> db -> get('student');
            $stu = $r->row();
            $name = $stu -> name;
            $class = $stu -> class; 
			if(isset($_SESSION['date'])){
			$d=$_SESSION['date'];
			$aq="SELECT * FROM `stuhasattend` WHERE date1='$d' and student= '$email'";
			$q = mysql_query($aq);
			$d=mysql_fetch_assoc($q);

			}
            ?>
            <tr class="info">
                <td> <?php echo $i; $i++;?> </td>
                <td> <?php echo $name;?> </td>
                <td> <form class="form-search" action="<?php echo base_url();?>teacher/markattend" method="post">
					<input type="hidden" name="emailid" value="<?php echo $email; ?>"/>
					<script>	$('#date2').change(function() {
			$('.date1').val($(this).val());
			});
			</script>
			
				<input type="hidden" class = "date1" name="attdate" value="<?php if(isset($_SESSION['date'])) echo $_SESSION['date'] ?>"/>
				<button name="present" style = " width:30px;
    height: 30px;
    background-color: initial;
    border: solid 2px green;
    border-radius: 50%;" type="submit" id = "pr" onclick="this.style.color='#000000';
this.style.backgroundColor = '#008000'" value = "<?php if(isset($_SESSION['present1'])) echo $_SESSION['present1'] ?>" class = "<?php if(isset($d['value'])) echo 'color'.$d['value']; ?>" >P</button>
				
				
				<button name="absent" style = "width: 30px;
    height: 30px;
    background-color: initial;
    border: solid 2px red;
    border-radius: 50%;" type="submit" id = "pr" onclick="this.style.color='#000000';
this.style.backgroundColor = '#cc0000'" value="<?php if(isset($_SESSION['absent'])) echo $_SESSION['absent'] ?>" class="<?php if(isset($d['value'])) echo 'color'.!$d['value']; ?>" >A</button> </form>
					
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
        <input type="date" name="showdate" class="input-medium search-query" value="<?php if(isset($_SESSION['date2'])) echo $_SESSION['date2'] ?>">
		<button type="submit" name ="show"  class="btn btn-info">Show</button>
       </form>
	   
	   <?php if(isset($showdate)) { ?>
        
		
		<?php if($data1 -> num_rows() == 0) { ?>
        <div class="alert alert-info"> 
        <p> No attendance on this day </p>
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
            $date = $row -> date1;
            
            $name = $row -> student;
			
            $value = $row -> value;
			$this->db->where('email',$name);
			$row1 = $this->db->get('student');
			$name1 = $row1 -> row();
			$name2 = $name1->name;
            ?>
            <tr class="info">
                <td> <?php echo $i; $i++;?> </td>
                <td> <?php echo $name2;?> </td>
                
                <td><?php if(($value)==0){ echo "Absent";} else{ echo "Present";} ?></td>
				<td> <?php echo $date;?></td>
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
       
       

       