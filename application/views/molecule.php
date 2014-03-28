<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		
		
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Molecule Diagram</title>
		
		<meta name="description" content="Blueprint: Slide and Push Menus" />
		<meta name="keywords" content="sliding menu, pushing menu, navigation, responsive, menu, css, jquery" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico">
		<link href="<?php echo base_url('assests/css/default.css'); ?>" rel="stylesheet">
		<link href="<?php echo base_url('assests/css/component.css'); ?>" rel="stylesheet">
		<script type = "text/javascript">
		
		function setSkrollr(){
		var objDistance = $navbar.offset().top;
		$(window).scroll(function() {
        var myDistance = $(window).scrollTop();
        if (myDistance > objDistance){
            $navbar.addClass('navbar-fixed-top');
        }
        if (objDistance > myDistance){
            $navbar.removeClass('navbar-fixed-top');
        }
		});
		}
	</script>
		
		<script type="text/javascript" src="<?php echo base_url('assests/js/modernizr.custom.js'); ?>"></script>
	</head>
	<body class="cbp-spmenu-push">
		
		<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1" >
			
			<h3>Menu</h3>
		
			<a href="<?php echo base_url('general/benzene'); ?>">Benzene</a>
			<a href="<?php echo base_url('general/fullerene'); ?>">Buckminster fullerene</a>
			<a href="<?php echo base_url('general/butadiene'); ?>">Butadiene</a>
			<a href="<?php echo base_url('general/butane'); ?>">Butane</a>
			
			<a href="<?php echo base_url('general/cyclohexane'); ?>">Cyclohexane</a>
			<a href="<?php echo base_url('general/cysteine'); ?>">Cysteine</a>
			
			<a href="<?php echo base_url('general/diamond'); ?>">Diamond</a>
			<a href="<?php echo base_url('general/dimer'); ?>">Dimer</a>
			<a href="<?php echo base_url('general/dinitro'); ?>">Dinitro</a>
			
			<a href="<?php echo base_url('general/ethane'); ?>">Ethane</a>
			<a href="<?php echo base_url('general/ethanol'); ?>">Ethanol</a>
			<a href="<?php echo base_url('general/ethylene'); ?>">Ethylene</a>
			
			<a href="<?php echo base_url('general/glutamic_acid'); ?>">Glutamic Acid</a>
			<a href="<?php echo base_url('general/glutamine'); ?>">Glutamine</a>
			<a href="<?php echo base_url('general/glycine'); ?>">Glycine</a>
			<a href="<?php echo base_url('general/graphite'); ?>">Graphite</a>
			
			<a href="<?php echo base_url('general/heptane'); ?>">Heptane</a>
			<a href="<?php echo base_url('general/hexane'); ?>">Hexane</a>
			<a href="<?php echo base_url('general/histidine'); ?>">Histidine</a>
			<a href="<?php echo base_url('general/ice'); ?>">Ice</a>
			<a href="<?php echo base_url('general/ice_tetra'); ?>">Ice Tetra</a>
			<a href="<?php echo base_url('general/pyrene'); ?>">Pyrene</a>
			
		</nav>
		
		<div class="container">
			<header class="clearfix">
				<span>Molecule</span>
				
			</header>
			<div class = "main">
			</div>
		</div>
		<script src="<?php echo base_url();?>assests/js/classie.js"></script>
	<script type="text/javascript" src="<?php echo base_url('assests/js/jquery.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assests/js/bootstrap.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assests/js/boot-business.js'); ?>"></script>
		
	</body>
</html>
