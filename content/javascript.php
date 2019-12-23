<!DOCTYPE html>
<html>
<head>
	<?php
		include '../link/link.php';
	?>
	<style type="text/css">
		#menu a:nth-child(4) {
			background: white;
			color: orange;
		}
		#menu a:nth-child(4):after {
			background: orange;
			width: 100%;
		}
	</style>
</head>
<body  onload="animateJav()">
	<!-- MENU -->
	<?php 
		include '../display/header.php';
	?>
	<!-- /MENU -->
	<!-- LOGO -->
	<div id="javIcon">
	</div>
	<!-- /LOGO -->
	<!-- MAIN -->
	<div id="jav">
		<div id="javBox1">
			<a href="../../javascript">
				<img src="../image/javascript.png">
				<br>JAVASCRIPT
			</a>
		</div>
		<div id="javBox2">
			<a href="../../jQuery">
				<img src="../image/jQuery.png">
				<br>jQuery
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