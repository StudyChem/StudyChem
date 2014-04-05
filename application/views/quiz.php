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
          <center>  <h2>Quiz Arena</h2> </center>
        </div>
        <div class="page-header">
        <h2> Quizzes </h2>
        </div>
		<div class="page-header">
        <?php if($quiz_data -> num_rows() == 0) { ?>
        <div class="alert alert-info"> 
        <p> No Quiz to show </p>
        </div>
        <?php } else {?>
        <table class="table table-striped table-hover">
        <thead>
                <tr>
                  <th>Quiz No</th>
				  <th>Quiz </th>
                  <th>Details</th>
                  <th>Start Date</th>
				  <th>End Date</th>
				  <th>Status</th>
				  <th>Score</th>
				  
                </tr>
        </thead>
        <tbody>
        <?php
        $i=1;
        foreach($quiz_data -> result() as $row) { 
      		$quizid = $row -> quizid;
			
            $this -> db -> where('quizid',$quizid);
            $r = $this -> db -> get('quiz_table');
            $stu = $r->row();
            $quiznum = $stu -> quiznumber;
			$quizname = $stu -> quizname;
            $quizdes = $stu -> quizdes;
			$startdate = $stu -> startdate;
            $enddate = $stu -> enddate;
            $this -> db -> where('student',$this -> session -> userdata('email'));
            $this -> db -> where('quizid',$quiznum);
            $data2 = $this -> db -> get('quizscore');
            if($data2 -> num_rows == 0) {
                $score = -1;
            }
            else{
            $data2 = $data2 -> row();
            $score = $data2 -> score;
            }
            ?>
            
            <tr class="info">
                <td> <?php echo $quiznum;?>	</td>
                <td> <?php echo $quizname;?> </td>
                <td> <?php echo $quizdes;?> </td>
                <td> <?php echo $startdate;?> </td>
				<td> <?php echo $enddate;?> </td>
                <?php $date = $date = date('Y-m-d H:i:s');
                if($date >= $startdate && $date < $enddate){ ?>
                <td><form class="form-horizontal form-signin-signup" action="<?php echo base_url();?>student/starttest/<?php echo $quizid;?>" method="post" >
                <button name = "startquiz" class="btn btn-success btn-large" id = "addqsns" type="submit">start</button>    
                <input type="hidden" name="quizid" value="<?php echo $quizid; ?>"/>
                </form></td>
                <?php } else {?>
				<td><form class="form-horizontal form-signin-signup" action="<?php echo base_url();?>teacher/qsn_add1" method="post" >
				<button disabled="disabled" name = "addqsns" class="btn btn-danger btn-large" id = "addqsns" type="submit">start</button>
				</form></td>
				<?php } ?>
				<td> <?php if($score==-1){
                            echo "---";
                            } 
                            else{
                                echo $score;
                            }
                    ?>
                </td>
            </tr>
            
        <?php } ?>

        </tbody>
        </table>
        <?php } ?>
		</div>
        
	   
		
	   	

   

       
<script type="text/javascript" src="<?php echo base_url('assests/js/jquery.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assests/js/bootstrap.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assests/js/boot-business.js'); ?>"></script>
       