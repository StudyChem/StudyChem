<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
	<title>Chemical equation balancer</title>
<style type="text/css">
#balanced span.rightarrow {
	padding-left: 1em;
	padding-right: 1em;
}

#balanced span.plus {
	padding-left: 0.2em;
	padding-right: 0.2em;
}

#balanced span.coefficient {
	padding-right: 0.1em;
}

article span.feature {
	background-color: rgb(236,244,255);
}
.setmar{
	margin-left:400px;
}
</style>
</head>

<body>


<div class="content">
<div id="main">
<div class = "setmar">
<article>
<h1>Chemical equation balancer</h1>

<script type="application/javascript" src="<?php echo base_url('assests/js/eqn_balancer.js'); ?>"></script>
<form action="#" method="get" onsubmit="balance(document.getElementById('inputFormula').value); return false">
	<table class="noborder">
		<tbody>
			<tr>
				<td><label for="inputFormula">Input:</label></td>
				<td>
					<input type="text" id="inputFormula" autocomplete="off" style="width:30em; font-family:serif"/>
					<input type="submit" value="Balance"/>
					<input type="button" value="Random" onclick="random()"/>
				</td>
			</tr>
			<tr style="height:3em">
				<td style="vertical-align:middle">Balanced:</td>
				<td><span id="balanced" style="font-family:serif; font-size:150%; line-height:160%;"></span><span id="message"></span></td>
			</tr>
			<tr>
				<td><text id="codeOutput">&#xA0;</text></td>
			</tr>
		</tbody>
	</table>
</form>
<h2>Examples</h2>
<form action="#" method="get" onsubmit="return false">
	<table>
		<thead>
			<tr>
				<th>Feature</th>
				<th>Input</th>
				<th>Equation</th>
				<th>Demo</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Subscripts</td>
				<td><code>N = N<span class="feature">2</span></code></td>
				<td>N ? N<sub>2</sub></td>
				<td><input type="button" value="Show" onclick="demo('N = N2')"/></td>
			</tr>
			<tr>
				<td>Compounds</td>
				<td><code>H2 + O2 = <span class="feature">H2O</span></code></td>
				<td>H<sub>2</sub> + O<sub>2</sub> ? H<sub>2</sub>O</td>
				<td><input type="button" value="Show" onclick="demo('H2 + O2 = H2O')"/></td>
			</tr>
			<tr>
				<td>Groups</td>
				<td><code>Mg<span class="feature">(OH)</span>2 = MgO + H2O</code></td>
				<td>Mg(OH)<sub>2</sub> ? MgO + H<sub>2</sub>O</td>
				<td><input type="button" value="Show" onclick="demo('Mg(OH)2 = MgO + H2O')"/></td>
			</tr>
			<tr>
				<td>Ions</td>
				<td><code>H<span class="feature">^+</span> + CO3<span class="feature">^2-</span> = H2O + CO2</code></td>
				<td>H<sup>+</sup> + CO<sub>3</sub><sup>2-</sup> ? H<sub>2</sub>O + CO<sub>2</sub></td>
				<td><input type="button" value="Show" onclick="demo('H^+ + CO3^2- = H2O + CO2')"/></td>
			</tr>
			<tr>
				<td>Electrons</td>
				<td><code>Fe^3+ + <span class="feature">e</span> = Fe</code></td>
				<td>Fe<sup>3+</sup> + e<sup>-</sup> ? Fe</td>
				<td><input type="button" value="Show" onclick="demo('Fe^3+ + e = Fe')"/></td>
			</tr>
			<tr>
				<td>No space</td>
				<td><code>A3^-+B2^2+=A5B+e</code></td>
				<td>A<sub>3</sub><sup>-</sup> + B<sub>2</sub><sup>2+</sup> ? A<sub>5</sub>B + e<sup>-</sup></td>
				<td><input type="button" value="Show" onclick="demo('A3^-+B2^2+=A5B+e')"/></td>
			</tr>
			<tr>
				<td>More space</td>
				<td><code>C 3 H 5 ( O H ) 3 + O 2 = H 2 O + C O 2</code></td>
				<td>C<sub>3</sub>H<sub>5</sub>(OH)<sub>3</sub> + O<sub>2</sub> ? H<sub>2</sub>O + CO<sub>2</sub></td>
				<td><input type="button" value="Show" onclick="demo('C 3 H 5 ( O H ) 3 + O 2 = H 2 O + C O 2')"/></td>
			</tr>
			<tr>
				<td>Optional 1</td>
				<td><code>H<span class="feature">1</span>^<span class="feature">1</span>+ + e = H<span class="feature">1</span>^<span class="feature">1</span>-</code></td>
				<td>H<sup>+</sup> + e<sup>-</sup> ? H<sup>-</sup></td>
				<td><input type="button" value="Show" onclick="demo('H1^1+ + e = H1^1-')"/></td>
			</tr>
			<tr>
				<td>Flexible names</td>
				<td><code><span class="feature">Foo</span>^5+ + <span class="feature">Bar</span>^3- = <span class="feature">Foo</span><span class="feature">Bar</span>2 + <span class="feature">Foo</span><span class="feature">Bar</span>^-</code></td>
				<td>Foo<sup>5+</sup> + Bar<sup>3-</sup> ? FooBar<sub>2</sub> + FooBar<sup>-</sup></td>
				<td><input type="button" value="Show" onclick="demo('Foo^5+ + Bar^3- = FooBar2 + FooBar^-')"/></td>
			</tr>
		</tbody>
	</table>
</form>
</article>
</div>
</div>
</div>
</hr>
</div>

<script type="text/javascript">var _gaq = _gaq || []; _gaq.push(['_setAccount', 'UA-23532931-1']); _gaq.push(['_trackPageview']); (function() { var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true; ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js'; var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s); })();</script>
<script type="text/javascript" src="<?php echo base_url('assests/js/jquery.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assests/js/bootstrap.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assests/js/boot-business.js'); ?>"></script>

</body>
</html>
