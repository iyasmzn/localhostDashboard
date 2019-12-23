<!DOCTYPE html>
<html>
<head>
	<?php
		include '../link/link.php';
	?>
	<style type="text/css">
		#menu a:last-child {
			background: white;
			color: darkred;
		}
		#menu a:last-child:after {
			width: 100%;
			background: darkred;
		}
	</style>
</head>
<body  onload="animateU()">
	<!-- MENU -->
	<?php 
		include '../display/header.php';
	?>
	<!-- /MENU -->
	<!-- LOGO -->
	<div id="ujianIcon">
		<img src="../image/task.png">
	</div>
	<!-- /LOGO -->
	<!-- MAIN -->
	<div id="ujian">
		<div id="ujianBox1">
			<h1 onclick="dropside()" ondblclick="">Triwulan 1</h1>
			<div id="ujianNone">
				<a href="../../ujian/triwulan_1/web_design" id="asd1" onmouseover="asd(this)" onmouseout="dsa(this)">Web Design</a><br>
				<a href="../../ujian/triwulan_1/web_designFINAL" id="asd4" onmouseover="asd(this)" onmouseout="dsa(this)">Web Design REVISI</a><br>
				<a href="../../ujian/triwulan_1/web_programming" id="asd2" onmouseover="asd(this)" onmouseout="dsa(this)">Web Programming</a><br>
				<a href="../../ujian/triwulan_1/javascript" id="asd3" onmouseover="asd(this)" onmouseout="dsa(this)">Javascript</a>			
			</div>	
		</div>
	</div>
	<!-- /MAIN -->

	<!-- FOOTER -->
		<?php include '../display/footer.php'; ?>
	<!-- /FOOTER -->
	<!-- JavaScript -->
	<script type="text/javascript" src="../js/js.js">
		
	</script>
</body>
</html>