
<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>StudyChem</title>
		<meta name="description" content="Blueprint: Vertical Timeline" />
		<meta name="keywords" content="timeline, vertical, layout, style, component, web development, template, responsive" />
		<link rel="shortcut icon" href="../favicon.ico">

		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assests/css/default1.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assests/css/component1.css" />
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
    		<script src="<?php echo base_url();?>assests/js/modernizr.custom.js"></script>

	</head>
	<body>
		<div class="content">
		<div class="container">
		
			<div class="page-header">
				<center><h1> Course Timeline </h1>	 </center>
			</div>	
			<div class="main">
				<ul class="cbp_tmtimeline">
				<?php foreach($data -> result() as $row ) {
					$date = $row -> date;
					$year = substr($date, 0,10);
					$year = substr($year,5,2) ."/" . substr($year,8,2) ."/" . substr($year,2,2);
					$time = substr($date, 11,5);	
					?>
					<li>
						<time class="cbp_tmtime" datetime="2013-04-10 18:30"><span></span><?php echo $time ?><span><br><?php echo $year ?></span></time>
						<div class="cbp_tmicon cbp_tmicon-phone"></div>
						<div class="cbp_tmlabel">
							<h2><?php echo $row -> heading;?></h2>
							<p><?php echo $row -> content;?></p>
						</div>
					</li>
					<?php } ?>
					
				</ul>
			</div>
			<center> <button id="news" class="btn btn-success btn-large"> Add News </button> </center>
		</div>
		</div>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Add News</h4>
      </div>
      <div class="modal-body">
      <form method="post" action="<?php echo base_url();?>teacher/addNews">
        <div class="page-header">
        	<h3> News Heading </h3>
        </div>
        <textarea name="heading" class="form-control span4" rows="3" ></textarea>
        <div class="page-header">
        	<h3> Message </h3>
        </div>
        <textarea name="cont" class="form-control span4" rows="3" ></textarea>
        <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
       <button type="submit" class="btn btn-primary">Post</button> 
      </div>
       </form>
       	

      </div>
      
    </div>
  </div>
</div>
	</body>
	<script type="text/javascript">
	$('#news').on('click', function(e){
  	$('#myModal').modal('toggle');

});

</script>
</html>
