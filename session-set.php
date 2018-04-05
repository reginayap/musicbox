<?php include('server_login.php') ?>

<?php session_start();
?>

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

		<?php include("header.php");?>

		<div id="main">
		<section>
			

			<?php

			// Function to handle failed validation attempts 
			function reject($entry)
			{
			   echo 'Please <a href="login.html">Log in </a>';
			   exit();
			}

			if (isset($_POST['user']))
			{
			   $user = trim($_POST['user']);
			   if (!ctype_alnum($user))   // ctype_alnum() check if the values contain only alphanumeric data
				  reject('User Name');
			   
			   if (isset($_POST['pwd']))
			   {
				  $pwd = trim($_POST['pwd']);
				  if (!ctype_alnum($pwd))
					 reject('Password');
				  else
				  {
					 $_SESSION['user'] = $user;
					 $_SESSION['pwd'] = $pwd;
					 
					 // relocate the browser to another page using the header() function to specify the target URL
					  header('Location: session-get.php');
					 //header('Location: question1.php');
				  }
			   }
			}
			else  
			   header('Location: login.html');

			?>
				
		</section>
		
		<!-- Footer -->
			
			<div id="footer-wrapper" class="wrapper">
				<?php include("footer.php");?>
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
