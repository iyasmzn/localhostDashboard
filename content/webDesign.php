<!DOCTYPE html>
<html>
<head>
	<?php
		include '../link/link.php';
	?>
	<style type="text/css">
		#menu a:nth-child(3) {
			background: white;
			color: #25b7d3;
		}
		#menu a:nth-child(3):after {
			background: #25b7d3;
			width: 100%;
		}
	</style>
</head>
<body  onload="animateWD()">
	<!-- MENU -->
	<?php 
		include '../display/header.php';
	?>
	<!-- /MENU -->
	<!-- LOGO -->
	<div id="desIcon">
	</div>
	<!-- /LOGO -->
	<!-- MAIN -->
	<div id="des">
		<div id="desBox1">
			<a href="../../web_design">
				<img src="../image/design_img.png">
				<br>WEB DESIGN
			</a>
		</div>
	</div>
	<!-- /MAIN -->

	<!-- FOOTER -->
		<?php include '../display/footer.php'; ?>
	<!-- /FOOTER -->
	<!-- JavaScript -->
	<script type="text/javascript" src="../js/js.js">
		// function animate() {
		// 	var img 	= document.getElementById('desIcon');
		// 	img.style.opacity 		= "1";
		// 	var headerImg = document.getElementById('headerImg').style;
		// 	headerImg.transition 	= "all 0.3s";
		// 	headerImg.height 		= "6.588579795021962vw";
		// 	var box1 	= document.getElementById('desBox1').style;
		// 	box1.opacity 					= "1";
		// 	box1.transform 				= "none";
		// 	box1.transitionDelay	= "0.3s";
		// }
	</script>
</body>
</html>