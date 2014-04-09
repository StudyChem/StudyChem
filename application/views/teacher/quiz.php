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
          <center>  <h2>Quiz</h2> </center>
        </div>
        <div class="page-header">
        <h2> Manage Quiz </h2>
        </div>
		<div class="page-header">
        <?php if($data -> num_rows() == 0) { ?>
        <div class="alert alert-info"> 
        <p> You have not hosted any quiz </p>
        </div>
        <?php } else {?>
        <table class="table table-striped table-hover">
        <thead>
                <tr>
                  <th>Quiz No</th>
				  <th>Quiz </th>
                  <th>QuizDes</th>
                  <th>Start Date</th>
				  <th>End Date</th>
				  <th>Quiz Status</th>
				  <th>Edit</th>
				  <th>Remove</th>
				  
                </tr>
        </thead>
        <tbody>
        <?php
        $i=1;
        foreach($data -> result() as $row) { 
      		$quizid = $row -> quizid;
			
            $this -> db -> where('quizid',$quizid);
            $r = $this -> db -> get('quiz_table');
            $stu = $r->row();
            $quiznum = $stu -> quiznumber;
			$quizname = $stu -> quizname;
            $quizdes = $stu -> quizdes;
			$startdate = $stu -> startdate;
            $enddate = $stu -> enddate;
            ?>
            
            <tr class="info">
                <td> <?php echo $quiznum;?>	</td>
                <td> <?php echo $quizname;?> </td>
                <td> <?php echo $quizdes;?> </td>
                <td> <?php echo $startdate;?> </td>
				<td> <?php echo $enddate;?> </td>
				<td class = "alert alert-success">Quiz added</td>
				<td><form class="form-horizontal form-signin-signup" action="<?php echo base_url();?>teacher/qsn_add1" method="post" >
				<button name = "addqsns" class="btn btn-primary btn-large" id = "addqsns" type="submit">Edit</button>
				<input type="hidden" name="quizid" value="<?php echo $quizid; ?>"/>
				</form></td>
				
				
				<td><form class="form-horizontal form-signin-signup" action="<?php echo base_url();?>teacher/quiz_del" method="post" >
				<button name = "addqsns" class="btn btn-primary btn-large" id = "addqsns" type="submit">Delete</button>
				<input type="hidden" name="quizid" value="<?php echo $quizid; ?>"/>
				</form></td>
            </tr>
            
        <?php } ?>

        </tbody>
        </table>
        <?php } ?>
		</div>
		
		<?php if(isset($dateissue)){
          echo "<div class='alert alert-danger'>".$dateissue."</div>";
          }?>
          <?php if(validation_errors()!=""){
          echo "<div class='alert alert-danger'>".validation_errors()."</div>";
          } ?>
		
		
		<?php if(isset($title)) { ?>
        <div class="alert alert-success"> 
        <p> <?php echo $title?> <?php echo $quizno?> <?php echo $title1?> </p>
        </div>
		
       <?php } ?>
	   
	   <?php if(isset($titledel)) { ?>
        <div class="alert alert-success"> 
        <p> <?php echo $titledel?> <?php echo $quizdel?> <?php echo $titledel1?> </p>
        </div>
		
       <?php } ?>
        <div class="page-header">
          <h2>
		  Create a new quiz or edit the created quiz
		  </h2>
        </div>
		<div class="row-fluid">
       <form class="form-horizontal form-signin-signup" action="<?php echo base_url();?>teacher/quiz_upload" method="post" enctype="multipart/form-data">
        <h4>Quiz Number</h4><input type="text" name="quiznumber" class="input-medium search-query" placeholder="Quiz Number" >
		<h4>Name of the quiz</h4><input type="text" name="quizname" class="input-medium search-query" placeholder="Name of the quiz">
		<h4>Quiz Description</h4><input type="text" name="quizdes" class="input-medium search-query" placeholder="Quiz Description">
		<!-- <h4>Number of questions</h4><input type="text" name="noofqsns" class="input-medium search-query" placeholder="Number of questions"> !-->
		<h4>Quiz Duration in mins</h4><input type="text" name="duration" class="input-medium search-query" placeholder="Quiz Duration"><br>
		<h4>Start Date</h4><input type="date" name="startdate" class="input-medium search-query" >
		<br><h4>End Date</h4><input type="date" name="enddate" class="input-medium search-query" >
		
		
		<br><br>
		<button name = "createquiz" class="btn btn-primary btn-large" id = "createquiz" type="submit">Submit</button>
		
	   
       </div>
	   
	   
	   
	   </form>
       
	   
	   <?php if(isset($error)) {
	   
	   echo $error; } ?>
	   
		
	   	

   

       
<script type="text/javascript" src="<?php echo base_url('assests/js/jquery.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assests/js/bootstrap.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assests/js/boot-business.js'); ?>"></script>
       