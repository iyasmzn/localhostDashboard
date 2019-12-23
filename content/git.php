<!DOCTYPE html>
<html>
<head>
	<?php
		include '../link/link.php';
	?>
	<style type="text/css">
		#menu a:nth-child(5) {
			background: white;
			color: #f05133;
		}
		#menu a:nth-child(5):after {
			width: 100%;
			background: #f05133;
		}
	</style>
</head>
<body  onload="animateG()">
	<!-- MENU -->
	<?php 
		include '../display/header.php';
	?>
	<!-- /MENU -->
	<!-- LOGO -->
	<div id="gitIcon">
		<img src="../image/git_icon.png">
	</div>
	<!-- /LOGO -->
	<!-- MAIN -->
	<div id="git">
		<div id="gitBox1">
			<a href="https://github.com/iyasmzn"><img src="../image/github.png"></a>
			<h1>GitHub</h1>
			<a href="../../git/github/belajarGit">belajarGit 1</a><br>
			<a href="../../git/github/belajarGit2">belajarGit 2</a>
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