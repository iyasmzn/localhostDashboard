<!DOCTYPE html>
<html>
<head>
	<?php
		include '../link/link.php';
	?>
	<style type="text/css">
		#menu a:nth-child(2) {
			background: white;
			color: #4766cc;
		}
		#menu a:nth-child(2):after {
			background: #4766cc;
			width: 100%;
		}
	</style>
</head>
<body  onload="animateP()">
	<!-- MENU -->
	<?php 
		include '../display/header.php';
	?>
	<!-- /MENU -->
	<!-- LOGO -->
	<div id="proIcon">
	</div>
	<!-- /LOGO -->
	<!-- MAIN -->
	<div id="pro">
		<div id="proBox1">
			<a href="../../phpmysql">
				<img src="../image/php_img.png">
				<br>PHPMySql
			</a>
		</div>
		<div id="proBox3">
			<a href="../../laravel">
				<img src="../image/laravel.png">
				<br>Laravel
			</a>
		</div>
		<div id="proBox4">
			<a href="../../programming/OOP">
				<img src="../image/oop-logo.png">
				<br>OOP
			</a>
		</div>
		<div id="proBox2">
			<a href="../../programming">
				<img src="../image/coding_img.png">
				<br>LATIHAN PHP
			</a>
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