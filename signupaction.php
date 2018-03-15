<!DOCTYPE HTML>
<!--
	Massively by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Music Box</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-loading">

		<!-- Wrapper -->
			<div id="wrapper">

				<?php include("header.php");?>

				<!-- Main -->
					<div id="main">

						<!-- Post -->
						  <section class="post">
							<header class="major">
							  <h3>Thank you for signing up!</h3>

							  <!-- Post -->
							  <p style="color:black;font-size:16px;line-height:1.6">
							<?php
							   echo "Hi ";
							   echo ($_POST['contact_name']);
							   echo "!";
							   echo "<br>";
							   echo "We are excited to have you join our family! ";
							   echo "<br>";
							   echo "We have sent a confirmation email to ";
							   echo strtolower($_POST['contact_email']);
							   echo ".";
							   ?>
							  </p> 
							 </header>
							</br>
						  </section>
					</div>

				<!-- Footer -->
					<?php include("footer.php");?>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>


