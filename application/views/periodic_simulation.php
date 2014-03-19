
<html>
<head>
<!--Old Stuff starts-->
<title>Periodic Table</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<link href="<?php echo base_url();?>assests  /css/css-tooltip.css" rel="stylesheet" type="text/css" />

<!-- style.css defines width of the applet ,table divs-->
	<link href="<?php echo base_url();?>assests/css/periodic-table-style.css" rel="stylesheet" type="text/css" />
	
	

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

<script type="text/javascript" src="<?php echo base_url();?>assests/js/jquery-1.7.1.min.js"></script>
</head>

<body style="color: rgb(0, 0, 0); margin-left:-40;" onload="Disablecbx();" alink="#cc3300" link="#a00008" vlink="#666666" >

<!------------ Old Body Starts----------------->
<div class="main" >

<!--commented by-surojit, date-30/9/2011-->
        <!--purpose-new framework/remove cdac1 logo ,status-disabled divs with headear and header-resize class-->
        <!--commented by-surojit, date-30/9/2011-->
   <!--     
  <div class="header" >
    <div class="header_resize">
      -->
   <div id="mydividisheader">
		<div id="mydivisheader_resize">       
      <div class="clr"></div>
    </div>
  </div>

  <div class="content" >
    <div class="content_resize">
      <div class="mainbar">
        
        
  
        <div class="div_for_logo">
        <font color="#FDD8A1" size=5><b align=left>Periodic Table</b></font>
     		<div id="div_notes-icon" style="float:right;cursor:pointer; ">
     		<img style="vertical-align:bottom;border:0px;position:relative;bottom:-16px;left:4px;" src="<?php echo base_url();?>assests/img/normal.png" onmouseover="this.src='<?php echo base_url();?>assests/img/hovered.png';" onmouseout="this.src='<?php echo base_url();?>assests/img/normal.png';" title="show/hide notes" />
			</div>
	   </div>

  
    
    <div class="article">
<div id="periodic table">

<center>  
<table bgcolor="#ffffff" border="0" bordercolor="#ffffff" cellpadding="8" cellspacing="3">
  <tbody>
    <tr align="left" valign="middle">
      <td style="vertical-align: top; height: 65px;"><br>
      </td>
      <td style="height: 65px;" bgcolor="#ffffff"><br>
      </td>
      <td id="group1" style="height: 65px;" align="center" bgcolor="#ffffff" valign="bottom"><font color="Red" size="-1"><b>1</b></font></td>
      <td style="height: 65px;" bgcolor="#ffffff"><br>
      </td>
      <td style="height: 65px;" colspan="10" align="center" bgcolor="#ffffff" valign="bottom"><font color="Red" size="+2">&nbsp;&nbsp;<br>
      </font></td>
      <td style="height: 65px;" colspan="5" bgcolor="#ffffff"><br>
      </td>
      <td id="group18" style="height: 65px;" align="center" bgcolor="#ffffff" valign="bottom"><font color="Red" size="-1"><b>18</b></font></td>
    </tr>
    <tr align="left" valign="middle">
      <td colspan="1" rowspan="7" style="vertical-align: top; height: 23px;" bgcolor="#ffffff"><img style="width: 19px; height: 267px;" alt="periodno." src="<?php echo base_url();?>assests/img/Period%20No.png">

      </td>
      <td id="period1" style="height: 23px;" align="right" bgcolor="#ffffff"><font color="Red" size="-1"><b>1</b><br></font></td>
     
	  <td id="H" style="height: 23px;" class="transition"><a href="javascript:output('H');"><font color="#000000">H</font></a></td>
      <td id="group2" style="height: 23px;" align="center" bgcolor="#ffffff" valign="bottom"><font color="Red" size="-1"><b>2</b></font></td>
      <td style="height: 23px;" colspan="10" align="center" bgcolor="#ffffff" valign="top"><font size="-1"><br>
      </font></td>
      <td id="group13" style="height: 23px;" align="center" bgcolor="#ffffff" valign="bottom"><font color="Red" size="-1"><b>13</b></font></td>
      <td id="group14" style="height: 23px;" align="center" bgcolor="#ffffff" valign="bottom"><font color="Red" size="-1"><b>14</b></font></td>
      <td id="group15" style="height: 23px;" align="center" bgcolor="#ffffff" valign="bottom"><font color="Red" size="-1"><b>15</b></font></td>
      <td id="group16" style="height: 23px;" align="center" bgcolor="#ffffff" valign="bottom"><font color="Red" size="-1"><b>16</b></font></td>
      <td id="group17" style="height: 23px;" align="center" bgcolor="#ffffff" valign="bottom"><font color="Red" size="-1"><b>17</b></font></td>
      
	  <td id="He" style="height: 23px;" class="transition"><a href="javascript:output('He');"><font color="#000000">He</font></a></td></tr>
    <tr align="left" valign="middle">

      <td id="Period2" align="right" bgcolor="#ffffff"><font color="Red" size="-1"><b>2</b></font></td>
      <td id="Li" class="transition"><a href="javascript:output('Li')"><font color="#000000">Li</font></a></td>
      <td id="Be" class="transition"><a href="javascript:output('Be')"><font color="#000000">Be</font></a></td>
      <td colspan="10" bgcolor="#ffffff">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <img style="width: 326px; height: 19px;" alt="groupno." src="<?php echo base_url();?>assests/img/group.png">
</td>
      <td id="B" class="transition"><a href="javascript:output('B')"><font color="#000000">B</font></a></td>
      <td id="C" class="transition"><a href="javascript:output('C')"><font color="#000000">C</font></a></td>
      <td id="N" class="transition"><a href="javascript:output('N')"><font color="#000000">N</font></a></td>
      <td id="O" class="transition"><a href="javascript:output('O')"><font color="#000000">O</font></a></td>
      <td id="F" class="transition"><a href="javascript:output('F')"><font color="#000000">F</font></a></td>
      <td id="Ne" class="transition"><a href="javascript:output('Ne')"><font color="#000000">Ne</font></a></td></tr>
   
	<tr align="left" valign="middle">
      
      <td id="Period3" align="right" bgcolor="#ffffff"><font color="Red" size="-1"><b>3</b></font></td>
      <td id="Na" class="transition"><a href="javascript:output('Na')"><font color="#000000">Na</font></a></td>
      <td id="Mg" class="transition"><a href="javascript:output('Mg')"><font color="#000000">Mg</font></a></td>
      
	  <!-----Group numbers-------->

      <td id="group3" align="center" bgcolor="#ffffff" valign="bottom"><font color="Red" size="-1"><b>3</b></font></td>
      <td id="group4" align="center" bgcolor="#ffffff" valign="bottom"><font color="Red" size="-1"><b>4</b></font>
      </td>
      <td id="group5" align="center" bgcolor="#ffffff" valign="bottom"><font color="Red" size="-1"><b>5<b></b></b></font><b><b><br>
      </b></b></td>
      <td id="group6" align="center" bgcolor="#ffffff" valign="bottom"><font color="Red" size="-1"><b>6</b></font></td>
      <td id="group7" align="center" bgcolor="#ffffff" valign="bottom"><font color="Red" size="-1"><b>7</b></font></td>
      <td id="group8" align="center" bgcolor="#ffffff" valign="bottom"><font color="Red" size="-1"><b>8</b></font></td>
      <td id="group9" align="center" bgcolor="#ffffff" valign="bottom"><font color="Red" size="-1"><b>9</b></font></td>
      <td id="group10" align="center" bgcolor="#ffffff" valign="bottom"><font color="Red" size="-1"><b>10</b></font></td>
      <td id="group11" align="center" bgcolor="#ffffff" valign="bottom"><font color="Red" size="-1"><b>11</b></font></td>
      <td id="group12" align="center" bgcolor="#ffffff" valign="bottom"><font color="Red" size="-1"><b>12</b></font></td>
      
	  <td id="Al" class="transition"><a href="javascript:output('Al')"><font color="#000000">Al</font></a></td>
      <td id="Si" class="transition"><a href="javascript:output('Si')"><font color="#000000">Si</font></a></td>
      <td id="P" class="transition"><a href="javascript:output('P')"><font color="#000000">P</font></a></td>
      <td id="S" class="transition"><a href="javascript:output('S')"><font color="#000000">S</font></a></td>
      <td id="Cl" class="transition"><a href="javascript:output('Cl')"><font color="#000000">Cl</font></a></td>
      <td id="Ar" class="transition"><a href="javascript:output('Ar')"><font color="#000000">Ar</font></a></td>
    </tr>
    <tr align="left" valign="middle">
      
      <td id="Period4" align="right" bgcolor="#ffffff"><font color="Red" size="-1"><b>4</b></font></td>
      <td id="K" class="transition"><a href="javascript:output('K')"><font color="#000000">K</font></a></td>
      <td id="Ca" class="transition"><a href="javascript:output('Ca')"><font color="#000000">Ca</font></a></td>
      <td id="Sc" class="transition"><a href="javascript:output('Sc')"><font color="#000000">Sc</font></a></td>
      <td id="Ti" class="transition"><a href="javascript:output('Ti')"><font color="#000000">Ti</font></a></td>
      <td id="V" class="transition"><a href="javascript:output('V')"><font color="#000000">V</font></a></td>
      <td id="Cr" class="transition"><a href="javascript:output('Cr')"><font color="#000000">Cr</font></a></td>
      <td id="Mn" class="transition"><a href="javascript:output('Mn')"><font color="#000000">Mn</font></a></td>
      <td id="Fe" class="transition"><a href="javascript:output('Fe')"><font color="#000000">Fe</font></a></td>
      <td id="Co" class="transition"><a href="javascript:output('Co')"><font color="#000000">Co</font></a></td>
      <td id="Ni" class="transition"><a href="javascript:output('Ni')"><font color="#000000">Ni</font></a></td>
      <td id="Cu" class="transition"><a href="javascript:output('Cu')"><font color="#000000">Cu</font></a></td>
      <td id="Zn" class="transition"><a href="javascript:output('Zn')"><font color="#000000">Zn</font></a></td>
      
      <td id="Ga" class="transition"><a href="javascript:output('Ga')"><font color="#000000">Ga</font></a></td>
      <td id="Ge" class="transition"><a href="javascript:output('Ge')"><font color="#000000">Ge</font></a></td>
      <td id="As" class="transition"><a href="javascript:output('As')"><font color="#000000">As</font></a></td>
      <td id="Se" class="transition"><a href="javascript:output('Se')"><font color="#000000">Se</font></a></td>
      <td id="Br" class="transition"><a href="javascript:output('Br')"><font color="#000000">Br</font></a></td>
      <td id="Kr" class="transition"><a href="javascript:output('Kr')"><font color="#000000">Kr</font></a></td>
    </tr>
    <tr align="left" valign="middle">
      
      <td id="Period5" align="right" bgcolor="#ffffff"><font color="Red" size="-1"><b>5</b></font></td>
      <td id="Rb" class="transition"><a href="javascript:output('Rb')"><font color="#000000">Rb</font></a></td>
      <td id="Sr" class="transition"><a href="javascript:output('Sr')"><font color="#000000">Sr</font></a></td>

      <td id="Y" class="transition"><a href="javascript:output('Y')"><font color="#000000">Y</font></a></td>
      <td id="Zr" class="transition"><a href="javascript:output('Zr')"><font color="#000000">Zr</font></a></td>
      <td id="Nb" class="transition"><a href="javascript:output('Nb')"><font color="#000000">Nb</font></a></td>
      <td id="Mo" class="transition"><a href="javascript:output('Mo')"><font color="#000000">Mo</font></a></td>
      <td id="Tc" class="transition"><a href="javascript:output('Tc')"><font color="#000000">Tc</font></a></td>
      <td id="Ru" class="transition"><a href="javascript:output('Ru')"><font color="#000000">Ru</font></a></td>
      <td id="Rh" class="transition"><a href="javascript:output('Rh')"><font color="#000000">Rh</font></a></td>
      <td id="Pd" class="transition"><a href="javascript:output('Pd')"><font color="#000000">Pd</font></a></td>
      <td id="Ag" class="transition"><a href="javascript:output('Ag')"><font color="#000000">Ag</font></a></td>
      <td id="Cd" class="transition"><a href="javascript:output('Cd')"><font color="#000000">Cd</font></a></td>
     
      <td id="In" class="transition"><a href="javascript:output('In')"><font color="#000000">In</font></a></td>
      <td id="Sn" class="transition"><a href="javascript:output('Sn')"><font color="#000000">Sn</font></a></td>
      
      <td id="Sb" class="transition"><a href="javascript:output('Sb')"><font color="#000000">Sb</font></a></td>
      <td id="Te" class="transition"><a href="javascript:output('Te')"><font color="#000000">Te</font></a></td>
      
      <td id="I" class="transition"><a href="javascript:output('I')"><font color="#000000">I</font></a></td>
      <td id="Xe" class="transition"><a href="javascript:output('Xe')"><font color="#000000">Xe</font></a></td>
    </tr>
    <tr align="left" valign="middle">
      
      <td id="Period6" align="right" bgcolor="#ffffff"><font color="Red" size="-1"><b>6</b></font></td>
      <td id="Cs" class="transition"><a href="javascript:output('Cs')"><font color="#000000">Cs</font></a></td>
      <td id="Ba" class="transition"><a href="javascript:output('Ba')"><font color="#000000">Ba</font></a></td>
      
      <td id="La" class="transition"><a href="javascript:output('La')"><font color="#000000">La</font></a></td>
     
      <td id="Hf" class="transition"><a href="javascript:output('Hf')"><font color="#000000">Hf</font></a></td>
      <td id="Ta" class="transition"><a href="javascript:output('Ta')"><font color="#000000">Ta</font></a></td>
      <td id="W" class="transition"><a href="javascript:output('W')"><font color="#000000">W</font></a></td>
      <td id="Re" class="transition"><a href="javascript:output('Re')"><font color="#000000">Re</font></a></td>
      <td id="Os" class="transition"><a href="javascript:output('Os')"><font color="#000000">Os</font></a></td>
      <td id="Ir" class="transition"><a href="javascript:output('Ir')"><font color="#000000">Ir</font></a></td>
      <td id="Pt" class="transition"><a href="javascript:output('Pt')"><font color="#000000">Pt</font></a></td>
      <td id="Au" class="transition"><a href="javascript:output('Au')"><font color="#000000">Au</font></a></td>
      <td id="Hg" class="transition"><a href="javascript:output('Hg')"><font color="#000000">Hg</font></a></td>
      
      <td id="Tl" class="transition"><a href="javascript:output('Tl')"><font color="#000000">Tl</font></a></td>
      <td id="Pb" class="transition"><a href="javascript:output('Pb')"><font color="#000000">Pb</font></a></td>
      <td id="Bi" class="transition"><a href="javascript:output('Bi')"><font color="#000000">Bi</font></a></td>
      <td id="Po" class="transition"><a href="javascript:output('Po')"><font color="#000000">Po</font></a></td>
      <td id="At" class="transition"><a href="javascript:output('At')"><font color="#000000">At</font></a></td>
      <td id="Rn" class="transition"><a href="javascript:output('Rn')"><font color="#000000">Rn</font></a></td>
    </tr>
    <tr align="left" valign="middle">
      
      <td align="right" bgcolor="#ffffff"><font color="Red" size="-1"><b>7</b></font></td>
      <td id="Fr" class="transition"><a href="javascript:output('Fr')"><font color="#000000">Fr</font></a></td>
      <td id="Ra" class="transition"><a href="javascript:output('Ra')"><font color="#000000">Ra</font></a></td>
      <td id="Ac" class="transition"><a href="javascript:output('Ac')"><font color="#000000">Ac</font></a></td>
      <td id="Rf" class="transition"><a href="javascript:output('Rf')"><font color="#000000">Rf</font></a></td>
      
      <td id="Db" class="transition"><a href="javascript:output('Db')" class="linkproperty">Db</a></td>
      <td id="Sg" class="transition"><a href="javascript:output('Sg')"><font color="#000000">Sg</font></a></td>
       <td id="Bh" class="transition"><a href="javascript:output('Bh')"><font color="#000000">Bh</font></a></td>
     <td id="Hs" class="transition"><a href="javascript:output('Hs')"><font color="#000000">Hs</font></a></td>
      <td id="Mt" class="transition"><a href="javascript:output('Mt')"><font color="#000000">Mt</font></a></td>
      <td id="Ds" class="transition"><a href="javascript:output('Ds')"><font color="#000000">Ds</font></a></td>
      <td id="Rg" class="transition"><a href="javascript:output('Rg')"><font color="#000000">Rg</font></a></td>
      <td id="Cn" class="transition"><a href="javascript:output('Cn')"><font color="#000000">Cn</font></a></td>
      <td id="Uut" class="transition"><a href="javascript:output('Uut')"><font color="#000000">Uut</font></a></td>
      <td id="Fl" class="transition"><a href="javascript:output('Fl')"><font color="#000000">Fl</font></a></td>
      <td id="Uup" class="transition"><a href="javascript:output('Uup')"><font color="#000000">Uup</font></a></td>
      <td id="Lv" class="transition"><a href="javascript:output('Lv')"><font color="#000000">Lv</font></a></td>
      <td id="Uus" class="transition"><a href="javascript:output('Uus')"><font color="#000000">Uus</font></a></td>
      <td id="Uuo" class="transition"><a href="javascript:output('Uuo')"><font color="#000000">Uuo</font></a></td>
    </tr>
    
    <tr align="left" valign="middle">
      <td style="vertical-align: top;"><br>
      </td>
      <td colspan="19" bgcolor="#ffffff">&nbsp;</td>
    </tr>
    
    <!---   Row for Lanthanides elements   -->
      <tr align="left" valign="middle">
      <td style="vertical-align: top;"><br>
      </td>
      <td colspan="4" align="right" bgcolor="#ffffff"><font color="#0033cc" size="3">Lanthanides</font></td>
      <td id="Ce" class="transition"><a href="javascript:void Element('Ce');"><font color="#000000">Ce</font></a></td>
      <td id="Pr" class="transition"><a href="javascript:void Element('Pr');"><font color="#000000">Pr</font></a></td>
      <td id="Nd" class="transition"><a href="javascript:void Element('Nd');"><font color="#000000">Nd</font></a></td>
      <td id="Pm" class="transition"><a href="javascript:void Element('Pm');"><font color="#000000">Pm</font></a></td>
      <td id="Sm" class="transition"><a href="javascript:void Element('Sm');"><font color="#000000">Sm</font></a></td>
      <td id="Eu" class="transition"><a href="javascript:void Element('Eu');"><font color="#000000">Eu</font></a></td>
      <td id="Gd" class="transition"><a href="javascript:void Element('Gd');"><font color="#000000">Gd</font></a></td>
      <td id="Tb" class="transition"><a href="javascript:void Element('Tb');"><font color="#000000">Tb</font></a></td>
      <td id="Dy" class="transition"><a href="javascript:void Element('Dy');"><font color="#000000">Dy</font></a></td>
      <td id="Ho" class="transition"><a href="javascript:void Element('Ho');"><font color="#000000">Ho</font></a></td>
      <td id="Er" class="transition"><a href="javascript:void Element('Er');"><font color="#000000">Er</font></a></td>
      <td id="Tm" class="transition"><a href="javascript:void Element('Tm');"><font color="#000000">Tm</font></a></td>
      <td id="Yb" class="transition"><a href="javascript:void Element('Yb');"><font color="#000000">Yb</font></a></td>
      <td id="Lu" class="transition"><a href="javascript:void Element('Lu');"><font color="#000000">Lu</font></a></td>
      <td bgcolor="#ffffff"><br>
      </td>
    </tr>
    <!---   Row for Actinides elements   -->
    
    <tr align="left" valign="middle">
      <td style="vertical-align: top;"><br>
      </td>
      <td colspan="4" align="right" bgcolor="#ffffff"><font color="#0033cc" size="3">Actinides</font></td>
      <td id="Th" class="transition"><a href="javascript:void Element('Th');"><font color="#000000">Th</font></a></td>
      <td id="Pa" class="transition"><a href="javascript:void Element('Pa');"><font color="#000000">Pa</font></a></td>
      <td id="U" class="transition"><a href="javascript:void Element('U');"><font color="#000000">U</font></a></td>
      <td id="Np" class="transition"><a href="javascript:void Element('Np');"><font color="#000000">Np</font></a></td>
      <td id="Pu" class="transition"><a href="javascript:void Element('Pu');"><font color="#000000">Pu</font></a></td>
      <td id="Am" class="transition"><a href="javascript:void Element('Am');"><font color="#000000">Am</font></a></td>
      <td id="Cm" class="transition"><a href="javascript:void Element('Cm');"><font color="#000000">Cm</font></a></td>
      <td id="Bk" class="transition"><a href="javascript:void Element('Bk');"><font color="#000000">Bk</font></a></td>
      <td id="Cf" class="transition"><a href="javascript:void Element('Cf');"><font color="#000000">Cf</font></a></td>
      <td id="Es" class="transition"><a href="javascript:void Element('Es');"><font color="#000000">Es</font></a></td>
      <td id="Fm" class="transition"><a href="javascript:void Element('Fm');"><font color="#000000">Fm</font></a></td>
      <td id="Md" class="transition"><a href="javascript:void Element('Md');"><font color="#000000">Md</font></a></td>
      <td id="No" class="transition"><a href="javascript:void Element('No');"><font color="#000000">No</font></a></td>
      <td id="Lr" class="transition"><a href="javascript:void Element('Lr');"><font color="#000000">Lr</font></a></td>
      <td bgcolor="#ffffff"><br>
      </td>
    </tr>
  </tbody>
</table>
</center></div>

<br>
<!-- Table for some basic controls having checkboxs and radio buttons-->
<table style="padding-left: 15%;">
	<tbody>
		<tr>
<!-- This <td>is for heading of basic controls-->
<td style="background-color: red; font-size: 16pt; font-weight: 700; color: white;">Basic Controls</td>
<td style="background-color: red;"><br></td>
		</tr>

<tr>
<!------Another <td> -->
<td style="width: 120pt; background-color: rgb(255, 232, 255); font-size: 11pt; color: gray; vertical-align: top; padding-left: 4px;">
				
<input name="basicinfo" id="cb1" type="checkbox">
<span style="font-weight: normal; color: Red;" onmouseover="this.style.fontWeight = 'bold'" onmouseout="this.style.fontWeight = 'normal'">BasicInfo</span><br>

				
<input name="atomicstructure" id="cb2" type="checkbox">
<span style="font-weight: normal; color: Red;" onmouseover="this.style.fontWeight = 'bold'" onmouseout="this.style.fontWeight = 'normal'">AtomicStructure</span><br>

<input onclick="javascript:highlightNonMetalsandMetalloids()" value="Highlightnonmetal" id="rb3" name="group" type="radio">
<span style="font-weight: normal; font-size: 13px; color: rgb(0, 153, 51);">Nonmetals,Metalloids<br></span>

<input onclick="javascript:highlightradioactive()" value="Highlightradioactive" id="rb8" name="group" type="radio">
<span style="font-weight: normal; font-size: 13px; color: rgb(0, 153, 51);">Radioactive Elements<br>
</span>


</td>

<!------Another <td> -->				
<td style="width: 120pt; background-color: rgb(255, 232, 255); font-size: 10pt; color: gray; vertical-align: 0px; text-align: left; padding-left: 0px;">
			
<input onclick="javascript:highlightMetalstypes()" value="HighlightMetalTypes" id="rb4" name="group" type="radio">
<span style="font-weight: normal; font-size: 13px; color: rgb(0, 153, 51);">Metal Types</span><br>
				
<input onclick="javascript:HighlightStates();" value="HighlightStates" id="rb5" name="group" type="radio">
<span style="font-weight: normal; font-size: 13px; color: rgb(0, 153, 51);">Element States</span><br>
				
<input style="color: rgb(255, 255, 0);" onclick="javascript:HalogensandNobleGas();" value="HighlighthallogensandNoblegas" id="rb6" name="group" type="radio">
<span style="font-weight: normal; font-size: 13px; color: rgb(0, 153, 51);">Halogens, Noble Gas<br>
			    
<input onclick="javascript:LanthenidesandActenides();" value="HighlightlanthanideActanide" id="rb7" name="group" type="radio">
Lanthanide, Actinides<br>

</span></td>

<!--  this is a td in which there is one div for color convention caption and a table forrepresenting color codes--> 		
<td style="padding-left: 35px;">
	<div id="colorcaption" style="background-color: red; font-size: 16pt; font-weight: 700; color: white;">Color Convention</div>
<table id="colorconvention" border="0" cellpadding="1" cellspacing="3">
<thead></thead>		
</table>
</td> 
<!-- end of <td>-->
</tr>

</tbody>
</table>
	


<script type="text/javascript">

//// start----- to disble links, when checkbox unchecked
$('document').ready(function(){
	$('a').css({
  	cursor: 'default','text-decoration':'none'
  
	});
});

//// end----- to disble links, when checkbox unchecked

////start ----- to active links when checkbox checked 

$(':checkbox').click(function(){
		//console.log($('#cb1').is (':checked'));
		if($('#cb1').is (':checked') || $('#cb2').is (':checked') ){
			
			$('a').css({
  			cursor: 'pointer','text-decoration':'underline'
			});			
		}
		else if($('#cb1').is (':checked')==false && $('#cb2').is (':checked')==false ){
			$('a').css({
  			cursor: 'default','text-decoration':'none'
			});
		}

});

////end ----- to active links when checkbox checked using jquery

</script>

       
<!----------------------end applet division------------------------------>    


<!-------- start Animated collapsible panel, with separate CSS and JavaScript -------->      
        
        <div style="width:auto;">
    <div class="squarebox"><div
     class="squareboxgradientcaption"
     style="height:20px; cursor: pointer;"
     onclick="togglePannelAnimatedStatus(this.nextSibling,50,50)"><div
         style="float: left"><b>Instructions</b></div><div
         style="float: right; vertical-align: middle"><img
         src="<?php echo base_url();?>assests/img/collapse.gif" 
         width="13" height="14" style="border:0px;"
         alt="Show/Hide" title="Show/Hide Table" /></div>
        </div><div class="squareboxcontent">
          
       
	 <table id="observations" class="observationtable " summary="Observation Table 1 ">
 
	 </table>

 
        </div>
    </div>

</div>

        

        
        
        

<div class="article" style="height:auto" name="here" >
<table summary="navigationtable" >
<tr>


<td>
<img src="<?php echo base_url();?>assests/img/arrow-blue-l.jpg" title="Previous Instruction" alt="previous" style="border:none;cursor:pointer;padding:20px 0 20px 0;"onclick=""/>
&nbsp;&nbsp;&nbsp;&nbsp;
</td>

<td id="instructions" width="100%" valign="top" style="padding:1px;font-size:13px;font-weight:normal;font-family:verdana;">
Please check the appropriate controls to understand the properties of various elements.
You can also highlight the metals based on specific property.
</td>
<td>
<img src="<?php echo base_url();?>assests/img/arrow-blue-r.jpg" title="Next Instruction" alt="previous" style="border:none;cursor:pointer;padding:20px 0 20px 0;"onclick="runExperiment()"/>
&nbsp;&nbsp;&nbsp;&nbsp;
</td>

</tr>
</table>

</div>
  
</div>

<table id="draggable" style="display:none;background-color:#B0CC7F">
	<tr>
		<td style="padding-bottom:0px;" >
			<div class="ui-widget-header"><i>Notes (change position by dragging here)</i>
			</div>
	  </td>
	</tr>
	<tr>
		<td >
			<textarea  class="ui-widget-content" onFocus="clearAllText(this)">
			Write your notes here...
			</textarea>
		</td>
	</tr>
</table>

<script>
	$(function() {
		$( "#draggable" ).draggable();
	});
	</script>


<script language="javascript" type="text/javascript">
	function clearAllText(thefield){
		if (thefield.defaultValue==thefield.value)
			thefield.value = ""
	} 
</script>

<script type="text/javascript">

$('#div_notes-icon').click(function() {
  $('#draggable').toggle('fast', function() {
    // Animation complete.
  });
});  
</script>
</body>

</html>
