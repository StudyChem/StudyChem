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
	  <div class = "jumbotron">
    <h1 align= "center"><?php echo $name?></h1>
	<p><h2 align= "center">Class- <?php echo $class?></h2></p>
	</div>
	
		<table align = "right">
		<tr>
		
		</tr>
		<tr>
		<td>
		
		
		</td>
		</tr>
		</table><br><br>
	<div class="panel panel-danger">
      <div class="panel-heading">
        <h2 class="panel-title">Attendance</h2>
      </div>
      <div class="panel-body">
	  
	  <?php if($data4 -> num_rows() == 0) { ?>
        <div class="alert alert-info"> 
        <p> No attendance taken yet </p>
        </div>
        <?php } else {?>
        <table class="table table-striped table-hover">
        <thead>
                <tr>
				  
                  <th>Month</th>
                  <th>Present Status</th>
				  <th>Absent Status</th>
				  <th>Total attendance this month</th>
					<!-- <th>Total Attendance this month</th> !-->
                </tr>
        </thead>
        <tbody>
		<?php
        $i=1;
		//$num = $data5 -> result();
		
        foreach($data4 -> result() as $row ) { 
			
			
			//$value = $row-> value; 
			$monthname = $row->month1;
			
			$total = $row->total1;
			$totalabs = $row->total2;
			$totalatt = $row->total3;
			//print_r($row->total3);
			//print_r($row-> date1);
			//$total = $query -> total;
			
			
			//$month = mysql_query("select datename(month,'"$date"') AS Month Name from stuhasattend");
            ?>
            
            <tr class="info">
                
                <td> <?php echo $monthname;?> </td>								 
                <td> Present <?php echo $total;?></td>						
				<td> Absent <?php echo $totalabs;?></td>
				<td> Total <?php echo $totalatt;?></td>
            
			</tr>
            
        <?php } ?>
        </tbody>
        </table>
        <?php } ?>
      
	  </div>
    </div>
    
	
	<div class="panel panel-danger">
      <div class="panel-heading">
        <h2 class="panel-title">Submitted Assignments</h2>
      </div>
      <div class="panel-body">
        <?php if($data2 -> num_rows() == 0) { ?>
        <div class="alert alert-info"> 
        <p> You have not uploaded any assignments for your class! </p>
        </div>
        <?php } else {?>
        <table class="table table-striped table-hover">
        <thead>
                <tr>
                  <th>Assignment No</th>
                  <th>Assignment</th>
                  <th>Submission Date</th>
                  
                </tr>
        </thead>
        <tbody>
    
		<?php
        $i=1;
        foreach($data2 -> result() as $row) { 
		
      		$assgname = $row -> assgname;
            $subdate = $row -> subdate;
			
			            
			
            ?>
            
            <tr class="info">
                <td><?php echo $i; $i++;?> </td>
                <td><a href="<?php echo site_url('teacher/download/'.$assgname.'/');?>" >  <?php echo $assgname;?> </a> </td>
                
                <td> <?php echo $subdate;?> </td>
				
								 
            </tr>
            
        <?php } ?>
        </tbody>
        </table>
        <?php } ?>
      </div>
    </div>
	<div class="panel panel-danger">
      <div class="panel-heading">
        <h3 class="panel-title">Quizzes</h3>
      </div>
      <div class="panel-body">
        XYXZ
      </div>
    </div>
	
	
</div>   
    <script type="text/javascript" src="<?php echo base_url('assests/js/jquery.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assests/js/bootstrap.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assests/js/boot-business.js'); ?>"></script>
    </body>
	</html>