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
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="<?php echo base_url();?>assests/css/compiled/whyrecurit.css" type="text/css" media="screen" />
     <link rel="stylesheet" href="<?php echo base_url();?>assests/css/compiled/font-awesome.css" type="text/css" media="screen" />  
   <link rel="stylesheet" href="<?php echo base_url();?>assests/css/compiled/morris.css" type="text/css" media="screen" />
    
    <link rel="stylesheet" href="<?php echo base_url();?>assests/css/compiled/bootstrap-overrides.css" type="text/css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assests/css/compiled/theme.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assests/css/bootstrap-responsive.css">
    <link href="<?php echo base_url('assests/css/boot-business.css');?>" rel="stylesheet">

	<script type="text/javascript" src="<?php echo base_url('assests/js/jquery.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assests/js/bootstrap.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assests/js/boot-business.js'); ?>"></script>
 				    
	<script src="<?php echo base_url();?>assests/js/wysiwyg.js"></script>
    <script src="<?php echo base_url();?>assests/js/editor.js"></script>
    <script src="<?php echo base_url();?>assests/js/theme.js"></script>
    </head>
    <body>
    <div class="content">
    <div class="container">
	<form name="addEventForm" id="addEventForm" class="form-signin-signup form-horizontal" method="post" >
          <div class="row" style="margin-left:0px; margin-top:10px;">
              
                                <h4> Company Name   <input style="width:300px" id="company_name" name="company_name" type="text" class="form-control" required="*">
                                 </h4>  
                                 <h4> Detail   <input id="event_profile" name="event_profile" type="text" class="form-control" required="*">
                                   </h4>
                                   <div class="row" style="margin-left:0px; margin-top:10px;">
                                   <div class="col-md-3">
                                   <label class="control-label" class="form-control" for="event_details">Event Details</label>
                                   </div>
                                   <div class="col-md-9">
                                   <div class="widget-container fluid-height">
								<div class="widget-content padded">
									<div class="btn-toolbar text-editor-toolbar" data-role="editor-toolbar" data-target="#editor">
										<div class="btn-group" style="margin-left:0px;">
											<a class="btn btn-default-outline dropdown-toggle" data-toggle="dropdown" title="Font Size"><i class="icon-text-height"></i>&nbsp;<b class="caret"></b></a>
											<ul class="dropdown-menu">
												<li><a data-edit="fontSize 5" href="#">Big</a></li>
												<li><a data-edit="fontSize 3" href="#">Medium</a></li>
												<li><a data-edit="fontSize 2" href="#">Small</a></li>
											</ul>
										</div>
										<div class="btn-group">
											<a class="btn btn-default-outline" data-edit="bold" title="Bold (Ctrl/Cmd+B)"><i class="icon-bold"></i></a><a class="btn btn-default-outline" data-edit="italic" title="Italic (Ctrl/Cmd+I)"><i class="icon-italic"></i></a><a class="btn btn-default-outline" data-edit="strikethrough" title="Strikethrough"><i class="icon-strikethrough"></i></a><a class="btn btn-default-outline" data-edit="underline" title="Underline (Ctrl/Cmd+U)"><i class="icon-underline"></i></a>
										</div>
										<div class="btn-group">
											<a class="btn btn-default-outline" data-edit="insertunorderedlist" title="Bullet list"><i class="icon-list-ul"></i></a><a class="btn btn-default-outline" data-edit="insertorderedlist" title="Number list"><i class="icon-list-ol"></i></a><a class="btn btn-default-outline" data-edit="outdent" title="Reduce indent (Shift+Tab)"><i class="icon-indent-left"></i></a><a class="btn btn-default-outline" data-edit="indent" title="Indent (Tab)"><i class="icon-indent-right"></i></a>
										</div>
										<div class="btn-group">
											<a class="btn btn-default-outline" data-edit="justifyleft" title="Align Left (Ctrl/Cmd+L)"><i class="icon-align-left"></i></a><a class="btn btn-default-outline" data-edit="justifycenter" title="Center (Ctrl/Cmd+E)"><i class="icon-align-center"></i></a><a class="btn btn-default-outline" data-edit="justifyright" title="Align Right (Ctrl/Cmd+R)"><i class="icon-align-right"></i></a><a class="btn btn-default-outline" data-edit="justifyfull" title="Justify (Ctrl/Cmd+J)"><i class="icon-align-justify"></i></a>
										</div>
										
										<div class="btn-group">
											<a class="btn btn-default-outline" id="pictureBtn" title="Insert picture (or just drag & drop)"><i class="icon-picture"></i></a>
											<input data-edit="insertImage" data-role="magic-overlay" data-target="#pictureBtn" style="opacity: 0; position: absolute; top: 0px; left: 0px; width: 41px; height: 30px; z-index:-1" type="file">
										</div>
										<div class="btn-group">
											<a class="btn btn-default-outline" data-edit="undo" title="Undo (Ctrl/Cmd+Z)"><i class="icon-undo"></i></a><a class="btn btn-default-outline" data-edit="redo" title="Redo (Ctrl/Cmd+Y)"><i class="icon-repeat"></i></a>
										</div>
										<div class="voice-container">
											<input data-edit="inserttext" id="voiceBtn" type="text" x-webkit-speech="">
										</div>
									</div>
									<div style="width:800px;margin-left:150px;"id="editor" name="editor"></div>
								</div>
							</div>
                                   </div>
                                   </div><!--<textarea id="event_details" name="event_details" class="form-control" ></textarea>-->
							
							<input type="submit" name="add_event" id="btnbtn1" class="btn btn-success" style="margin-left:12px; margin-top:25px;" />
						</form>
						</div>
						</div>
						</body>