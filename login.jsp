<?php include('server_login.php') ?>

<!DOCTYPE HTML>
<!--
	Escape Velocity by HTML5 UP
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
				<!--Automatically focusing on textbox-->
		<script type="text/javascript">
			function pageAutoFocus(){
				document.getElementById("contact_name").focus();
			}
		</script>
	</head>
	<body onload="pageAutoFocus();" class="is-loading"> 
		
		
		
		<!-- Wrapper -->
			<div id="wrapper" class="fade-in">

<!--BEGIN CODE CONTRIBUTIONS------------------------------------------------------------------------------------------->

<!--I have included php code to include another php file------------------------------------------------------------>

		<jsp:include page="header.jsp"></jsp:include>

		<div id="main">
		
		<article>
				<header align="center"><h1>Login<h2></header>
		</article>
			
		<div align="center">
			<a href="#"><img src="images/hearts.jpg" alt="" /></a>
		</div>
		
<jsp:include page="date.jsp"></jsp:include>
		<form method="post" action="localhost:8080/assignment5">
					
					<div class="12u">
						<label for="email" align="left">Email</label>
						<input type="text" name="email" id="contact-email" placeholder="Email" />
					</div>

					<div class="12u">
						<label for="password" align="left">Password</label>
						<input type="password" name="password" id="contact-password" placeholder="Password" />
					</div>
			
					</br>
					</br>
					<div class="12u">
						<ul class="actions">
							<li><input type="submit" class="style1" value="Log in" /></li>
							<li><input type="reset" class="style2" value="Forgot username/password?" /></li>
						</ul>
					</div>
		</form>

		
		<!-- Footer -->
			
			<div id="footer-wrapper" class="wrapper">
				<jsp:include page="footer.jsp"></jsp:include>
			</div>

	<!--</div>-->

	<!-- Scripts -->
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/jquery.scrollex.min.js"></script>
		<script src="assets/js/jquery.scrolly.min.js"></script>
		<script src="assets/js/skel.min.js"></script>
		<script src="assets/js/util.js"></script>
		<script src="assets/js/main.js"></script>
		
		<!--Checkbox for user to see their password in text form-->
		<script>

			(function() 
			{
				var pwd = document.getElementById("contact_password");
				var show = document.getElementById("showPwd");

				show.addEventListener("change", function() {
					try {
					if (show.checked)
						pwd.type ="text";
					else
						pwd.type = "password";
					} catch(error) {
						alert("Cannot switch type");
					}			         
				}, false);      
			}());

		</script>
		
		
<!--END CODE CONTRIBUTIONS------------------------------------------------------------------------------------------>

	</div>
	</body>
</html>
