<!DOCTYPE HTML>
<!--
<<<<<<< HEAD
    Massively by HTML5 UP
    html5up.net | @ajlkn
    Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
  <head>
    // this is my first comment to regina! 
    <title>Music Box</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
    </head>
  <body class="is-loading">

    <!-- Wrapper -->
    <div id="wrapper">

      <style>

#nav {
font-size: 14 px;
}

</style>

<!-- Intro -->
<div id="intro">
  <h1>Welcome to<br />
    Music Box</h1>
  <p>A free collection of Hiu Hiu Sau's and Regina Yap's Favorite Tracks</p>
  <ul class="actions">
    <li><a href="#header" class="button icon solo fa-play-circle scrolly">Continue</a></li>
    </ul>
  </div>

<!-- Header -->
<header id="header">
  <a href="index.php" class="logo">Music Box</a>
  </header>

<!-- Nav -->
<nav id="nav">
  <ul class="links">
    <li><a href="index.php">Welcome to Music Box</a></li>
    <li><a href="hiuhiu.php">Hiu Hiu's Tunes</a></li>
    <li><a href="regina.php">Regina's Tunes</a></li>
    <li><a href="our_music.php">Our Music</a></li>
    <li><a href="our_music.php">Reflections</a></li>
    <li><a href="sign_up.php">Sign Up</a></li>
    <!--<li><a href="elements.html">Elements Reference</a></li>-->
    </ul>
  <ul class="icons">
    <!--<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
	<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
	<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
	<li><a href="#" class="icon fa-github"><span class="label">GitHub</span></a></li>-->
    <li><a href="#" class="icon fa-user-circle"><span class="label">Login</span></a></li>
    </ul>
  </nav>


<!-- Body -->
<body>
<?php
    echo "Hi!";
    echo ($_POST['name']);
    echo "Thanks for taking your time to look through Music Box, and for sending us a message! ";
    echo "We will get to your message soon and send you a reply at ";
    echo strtolower($_POST['email']);
    ?>
    
    </body>
=======
	Massively by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
    // this is my first comment to regina! 
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

						<section align="center">
							<?php
							echo "Hi";
							echo "Hi!";
							echo ($_POST['name']);
							echo "Thanks for taking your time to look through Music Box, and for sending us a message! ";
							echo "We will get to your message soon and send you a reply at ";
							echo strtolower($_POST['email']);
							?>
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
>>>>>>> d698353aa800250158a53a422018b0af79ff26c0
</html>


