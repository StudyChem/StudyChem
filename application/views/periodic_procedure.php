
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="StudyChem | Short description about StudyChem">
    <meta name="author" content="Your name">
    <title>StudyChem</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<link href="<?php echo base_url();?>assests  /css/css-tooltip.css" rel="stylesheet" type="text/css" />

<!-- style.css defines width of the applet ,table divs-->
	<link href="<?php echo base_url();?>assests/css/periodic-table-style.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url();?>assests/css/tabs.css" rel="stylesheet" type="text/css">

    <!-- Bootstrap -->
    <link href="<?php echo base_url('assests/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <!-- Bootstrap responsive -->
    <link href="<?php echo base_url('assests/css/bootstrap-responsive.min.css'); ?>" rel="stylesheet">
    <!-- Font awesome - iconic font with IE7 support --> 
    <link href="<?php echo base_url('assests/css/font-awesome.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assests/css/font-awesome-ie7.css'); ?> "rel="stylesheet">
    <!-- Bootbusiness theme -->
    <link href="<?php echo base_url('assests/css/boot-business.css');?>" rel="stylesheet">
	

<!-- Animated collapsible panel, with separate CSS and JavaScript -->
	<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assests/css/Animated-Collapsible-Panel-5.css" />
	<script type="text/javascript" src="<?php echo base_url();?>assests/js/Animated-Collapsible-Panel-5.js"></script>
<!-- end collapsible panel --->
  
<!-- style table-->
	<link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url();?>assests/css/css-table.css" />
	<script type="text/javascript" src="<?php echo base_url();?>assests/js/jquery-1.2.6.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assests/js/style-table.js"></script>
<!---style table ends--->


<!--Header Image starts-->
	<style type="text/css">
		.div_for_logo{ 
		background-image:url('<?php echo base_url();?>assests/img/header2.png'); 
		height:40px;
		position:relative;
	}
	</style>
<!--Header Image Ends>


<!-- Old stuff ends-->

<!--Draggable stuff starts -->
<!-- drag only requires jquery.min.js , jquery-ui-1.8.17.custom.min.js  -->

<script src="<?php echo base_url();?>assests/js/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assests/js/jquery-ui-1.8.17.custom.min.js" type="text/javascript"></script>

<!--drag only js ends-->

<style type="text/css">

.ui-widget-header
 {
  background-color:#B0CC7F;
  color: #ffffff;
  font-size:13px;
  width:280px;
  cursor:pointer;
  }
  
.ui-widget-header a { color: #ffffff; }

/*This is important to control the textarea size --by surojit */
.ui-widget-content
{
	/*position:absolute;*/
	min-width:285px;
	max-width:286px;
}

</style>

<!--Draggable stuff ends -->




<script type="text/javascript" src="<?php echo base_url();?>assests/js/periodictable.js"></script>

<script type="text/javascript" src="<?php echo base_url();?>assests/js/jquery-1.7.1.min.js"></script>
</head>

<body style="color: rgb(0, 0, 0); margin-left:-40;" onload="Disablecbx();" alink="#cc3300" link="#a00008" vlink="#666666" >

    <style>
td.transition{
color: #000000;
background-color:#FFE9FF;
}
.linkproperty:link{
COLOR:#000000 ; 
}
.linkproperty:hover{
COLOR:#FF4000 ;
}
.linkproperty:visited {
COLOR:#80FF00;
}
.linkproperty:active {
COLOR: #80FF00;
}
a:link {text-decoration: none; color:"Red"} 
a:visited {text-decoration: none; color: #0000ff} 
a:hover { text-decoration: underline; color: #ff0000 } 

</style>


<div class="content">
 <div class="container">
 <div style="margin-top:50px"> </div>
<table  id="xpandables" align="center" bgcolor="#E8E8E8" cellpadding="0px" cellspacing="0px" border="0px">
  <tr>
    <td colspan="3" style="white-space:nowrap;"><div class="page-header"><h2>Learning Chemistry through the periodic table</h2></div></td>
  </tr>
  <tr>
  <td width="21px" height="150px" ></td>
  <td>
  <div><table id="tabtable" border="0px" cellpadding="0px" cellspacing="0px" width="100%"><tr><td id="lcurve" width="21px" height="145px"></td><td id="mcurve" rowspan="2"><div id="ddtabs2" class="glowingtabs"><ul style="margin-left:10px"class="widget-footer"><li class="current"><a href="<?php echo base_url();?>class9/periodic_table"><span><div id="tabspan" ><img id="tabimg" src="<?php echo base_url();?>assests/img/theory.png" alt=""/></div><div id="tab_name" >Theory&nbsp;</div></span></a></li><li class=""><a href="<?php echo base_url();?>class9/periodic_procedure"><span><div id="tabspan" ><img id="tabimg" src="<?php echo base_url();?>assests/img/content_2.png" alt=""/></div><div id="tab_name" >Procedure&nbsp;</div></span></a></li><li class=""><a href="<?php echo base_url();?>class9/periodic_simulation"><span><div id="tabspan" ><img id="tabimg" src="<?php echo base_url();?>assests/img/content_4.png" alt=""/></div><div id="tab_name" >Simulator&nbsp;</div></span></a></li><li class=""><a href="?sub=75&brch=12&sim=94&cnt=167"></tr></table>

  <div class = "row"> 
  <div class ="span10 offset1">
  <h3> Procedure to use this lab - </h3>
  <b>In this lab you can study the periodic table to understand properties of different elements of periodic table .</b>
  We will use some controls here (as shown in the figure below) to be familiar with various category of elements in modern periodic table:
  <img src="<?php echo base_url();?>assests/img/periodic_procedure.png"> 
  <ol>
  <li>On selecting<strong> "Basic Information"</strong> checkbox you can get information - <strong>Atomic number, Symbol, Atomic weight, atomic mass</strong> - of a element, by clicking on element in the periodic table.</li>
    <li>On selecting <strong>"AtomicStructure"</strong> checkbox you can get information -<strong> Electronic configuration,Valence electrons etc.</strong> - of a element, by clicking on the element in the periodic table.</li>
    <li>The radio buttons are used to highlight various properties of elements E.g. when radio button<strong> "Metal Types" </strong>is selected, color convention various metal types will appear and element will be highlighted accordingly.</li>
    <li>If you<strong> hover over </strong>colors displayed in color convention only that category of element will be highlighted.</li>
</ol>
<script type="text/javascript" src="<?php echo base_url('assests/js/jquery.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assests/js/bootstrap.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assests/js/boot-business.js'); ?>"></script>
</body>

</html>
