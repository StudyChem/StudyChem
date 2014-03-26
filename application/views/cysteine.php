<html>
<head>
<script src="Jmol.js"></script>
<script src="<?php echo base_url('assests/jmol/Jmol.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assests/jmol/JSmol.min.js'); ?>">
var jmol;
var path = "<?php echo base_url('assests/jmol/JmolApplet'); ?>";
jmol = Jmol.getApplet(path,Info)
</script>

<script>


</script>
</head>

<body>
<center>
<applet name="jmol" code="JmolApplet"
	archive = "<?php echo base_url('assests/jmol/JmolApplet.jar'); ?>" width=800 height=450 align = "middle">
	<param name="progressbar"  value="true" />
	<param name="load" value="<?php echo base_url();?>assests/jmol/pdb/cysteine.pdb"/>
	<param name="bgcolor" value="black">
	<param name="style" value="shaded">
	<param name="label" value="none">
	<param name="wireframeRotation" value="true">
	<param name="perspectiveDepth"  value="false">
</applet>

</center>
</body>
</html>