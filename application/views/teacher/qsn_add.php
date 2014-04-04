<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="StudyChem | Short description about StudyChem">
    <meta name="author" content="Your name">
    
	<title>StudyChem</title>
	<script type="text/javascript" src="<?php echo base_url('assests/js/jquery.min.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assests/js/bootstrap.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assests/js/boot-business.js'); ?>"></script>
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
        <h2> Manage Questions </h2>
        </div>
		<div class="page-header">
        <?php if($data -> num_rows() == 0) { ?>
        
		<div class="alert alert-info"> 
        <p> You have not set any questions </p>
        </div>
        <?php } else{?>
        <table class="table table-striped table-hover">
        <thead>
                <tr>
                  <th>Question No</th>
				  
                  <th>Edit</th>
				  <th>Remove</th>
				  
                </tr>
        </thead>
        <tbody>
        <?php
        $i=1;
        foreach($data -> result() as $row) { 
      		$question = $row -> ques;
			
            $this -> db -> where('ques',$question);
            $r = $this -> db -> get('problem');
            $stu = $r->row();
            $ques_num = $stu -> ques_num;
			$quiz_id = $stu -> quizid;
            ?>
				
            <tr class="info">
				
                <td> <?php echo $ques_num;?>	</td>
                
                <td><form class="form-horizontal form-signin-signup" action="<?php echo base_url();?>teacher/editQuestion" method="post" >
				<button id = "qsnedit" name = "qsnedit" class="btn btn-primary btn-large" >Edit</button>
				<input type="hidden" name="quizid" value="<?php echo $quiz_id; ?>"/>
				<input type="hidden" name="ques_num" value="<?php echo $ques_num; ?>"/></form>
				</td>
				
				
				<td><form class="form-horizontal form-signin-signup" action="<?php echo base_url();?>teacher/qsn_del" method="post" >
				<button name = "addqsns" class="btn btn-primary btn-large" id = "addqsns" type="submit">Delete</button>
				<input type="hidden" name="quizid" value="<?php echo $quiz_id; ?>"/>
				<input type="hidden" name="ques_num" value="<?php echo $ques_num; ?>"/>
				</form></td>
            </tr>
            
<script type="text/javascript">

	$('#<?php echo $ques_num?>').on('click', function(e){
  	$('#myModal').modal('toggle');
});
</script>
        <?php } ?>

        </tbody>
        </table>
        <?php } ?>
		</div>
		
		<?php if(isset($edit) ){?>
		
		<div class="page-header">
          <h2>
		  Update question
		  </h2>
        </div>
		
		<div class="row-fluid">
       <form class="form-horizontal form-signin-signup" action="<?php echo base_url();?>teacher/update_qsn" method="post" enctype="multipart/form-data">
        
		<input type="text" name="question2" class="input-medium search-query" placeholder="<?php echo $question1; ?>">
		<input type="text" name="opta1" class="input-medium search-query" placeholder="<?php echo $opta; ?>">
		<input type="text" name="optb2" class="input-medium search-query" placeholder="<?php echo $optb; ?>">
		<input type="text" name="optc3" class="input-medium search-query" placeholder="<?php echo $optc; ?>"><br>
		<input type="text" name="optd4" class="input-medium search-query" placeholder="<?php echo $optd; ?>"><br>
		<input type="text" name="cans1" class="input-medium search-query" placeholder="<?php echo $cans; ?>"><br>
		<input type="text" name="marks1" class="input-medium search-query" placeholder="<?php echo $marks; ?>"><br>
		<br><br>
		<button name = "update_qsn" class="btn btn-primary btn-large" id = "update_qsn" type="submit">Update Question</button>
		<input type="hidden" name="quizid" value="<?php echo $quizid; ?>"/>
	   <input type="hidden" name="ques_num" value="<?php echo $ques_num; ?>"/>	
       </div>
	   </form>
       
		<?php }?>
        <div class="page-header">
          <h2>
		  Add new question
		  </h2>
        </div>
		<div class="row-fluid">
       <form class="form-horizontal form-signin-signup" action="<?php echo base_url();?>teacher/qsn_add" method="post" enctype="multipart/form-data">
        <input type="text" name="qsnnumber" class="input-medium search-query" placeholder="Question Number" >
		<textarea name="question1" class="form-control span4" placeholder="Question" rows="3" style="width:850px;"></textarea><br><br>
		<input type="text" name="opta" class="input-medium search-query" placeholder="Option A">
		<input type="text" name="optb" class="input-medium search-query" placeholder="Option B">
		<input type="text" name="optc" class="input-medium search-query" placeholder="Option C"><br>
		<input type="text" name="optd" class="input-medium search-query" placeholder="Option D"><br>
		<input type="text" name="cans" class="input-medium search-query" placeholder="Correct Answer"><br>
		<input type="text" name="marks" class="input-medium search-query" placeholder="Marks"><br>
		
		
		<br><br>
		<button name = "setqsn" class="btn btn-primary btn-large" id = "setqsn" type="submit">Save Question</button>
		<input type="hidden" name="quizid" value="<?php echo $quizid; ?>"/>
	   
       </div>
	   </form>
       
	   
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel" >Question "<?php echo $ques_num; ?>"</h4>
      </div>
      <div class="modal-body">
      <form class="form-horizontal form-signin-signup" action="<?php echo base_url();?>teacher/qsn_add" method="post" enctype="multipart/form-data">
        <textarea name="qsnnumber" class="form-control span4" placeholder="Question Number" > 
		<input type="text" name="question1" class="input-medium search-query" placeholder="Question">
		<input type="text" name="opta" class="input-medium search-query" placeholder="Option A">
		<input type="text" name="optb" class="input-medium search-query" placeholder="Option B">
		<input type="text" name="optc" class="input-medium search-query" placeholder="Option C"><br>
		<input type="text" name="optd" class="input-medium search-query" placeholder="Option D"><br>
		<input type="text" name="cans" class="input-medium search-query" placeholder="Correct Answer"><br>
		<input type="text" name="marks" class="input-medium search-query" placeholder="Marks"><br>
		
		
		<br><br>
		<button name = "setqsn" class="btn btn-primary btn-large" id = "setqsn" type="submit">Save Question</button>
		<input type="hidden" name="quizid" value="<?php echo $quizid; ?>"/>
	   
       </div>
	   </form>
       	

      </div>
      
    </div>
  </div>
</div>	
	   	      
	
  
</html> 