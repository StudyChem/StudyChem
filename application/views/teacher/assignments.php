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
          <center>  <h2>Assignments</h2> </center>
        </div>
        <div class="page-header">
        <h2> Assignments </h2>
        </div>
        <?php if($data -> num_rows() == 0) { ?>
        <div class="alert alert-info"> 
        <p> Your teacher has not uploaded any assignments for your class! </p>
        </div>
        <?php } else {?>
        <table class="table table-striped table-hover">
        <thead>
                <tr>
                  <th>S.No</th>
                  <th>Assignment</th>
                  <th>Details</th>
                  <th>Start Date</th>
				          <th>End Date</th>
				  
                </tr>
        </thead>
        <tbody>
        <?php
        $i=1;
        foreach($data -> result() as $row) { 
      			$assgname = $row -> assgname;
            $this -> db -> where('assgname',$assgname);
            $r = $this -> db -> get('upload');
            $stu = $r->row();
            $assgname = $stu -> assgname;
            $assmsg = $stu -> assmsg;
			      $startdate = $stu -> startdate;
            $lastdate = $stu -> lastdate;
            ?>
            
            <tr class="info">
                 <td><?php echo $i; $i++;?> </td>
                <td><a href="<?php echo site_url('teacher/download/'.$assgname.'/');?>" >  <?php echo $assgname;?> </a> </td>
                <td> <?php echo $assmsg;?> </td>
                <td> <?php echo $startdate;?> </td>
				        <td> <?php echo $lastdate;?> </td>				
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
		  <?php if(isset($dateissue)){
          echo "<div class='alert alert-danger'>".$dateissue."</div>";
          }?>
          <?php if(validation_errors()!=""){
          echo "<div class='alert alert-danger'>".validation_errors()."</div>";
          } ?>
			<?php if(isset($error1)) {
	   
	   echo "<div class='alert alert-danger'>".$error1."</div>";
	   } ?>

       
        <div class="page-header">
          <h3>  Add New Assignments </h3>
        </div>
		<div class="row-fluid">
       <form class="form-horizontal form-signin-signup" action="<?php echo base_url();?>teacher/do_upload" method="post" enctype="multipart/form-data">
        <input type="text" name="assgname" class="input-medium search-query" placeholder="Name of the assignment">
		<input type="text" name="assmsg" class="input-medium search-query" placeholder="About the assignment">
		<div>
		<h4>Upload Date <input type="date" name="startdate" class="input-medium search-query" placeholder="Email of the student">
		</h4></div>
		<div>
		<h4>Last  Date &nbsp; &nbsp;  <input type="date" name="lastdate" class="input-medium search-query" placeholder="Email of the student">
		</h4></div>
	   <div>
	    <input type="hidden" name="MAX_FILE_SIZE" value="2000000">
	   <input type="file" name="userfile" size="20"  id="userfile"/>

		<br /><br />
		
		<button name = "upload" class="btn btn-primary btn-large" id = "upload" type="submit" value="upload">Add</button>
		
	   
       </div>
	   </form>
       
	   	   
		
	   <ul>
		<?php if(isset($upload_data)) foreach ($upload_data as $item => $value):?>
		<li><?php echo $item;?>: <?php echo $title1?><?php echo $value;?></li>
		<?php endforeach; ?>
		</ul>	

   

       
<script type="text/javascript" src="<?php echo base_url('assests/js/jquery.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assests/js/bootstrap.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assests/js/boot-business.js'); ?>"></script>
       