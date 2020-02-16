<!DOCTYPE html>
<html>
<head>
	<?php
		include '../link/link.php';
	?>
	<style type="text/css">
		#menu a:first-child {
			background: rgba(0,0,0,1);
			color: skyblue;
		}
		#menu a:first-child:after {
			background: skyblue;
			width: 100%;
		}
	</style>
</head>
<body onload="animateH()">
	<!-- MENU -->
	<?php 
		include '../display/header.php';
	?>
	<!-- /MENU -->
	<!-- MAIN -->
	<div id="titleHead">
		<h1 id="titleHeadH1">-DASHBOARD-</h1>
	</div>
	<div  id="home">
		<div id="homeBox1">
				<a href="../../indexOld.php">
					<img src="../image/back.png">
					OLD DASHBOARD
			</a>	
		</div>
		<div id="homeBox2">
				<a href="../../project/">
					<img src="../image/tasks.png">
					My Project
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