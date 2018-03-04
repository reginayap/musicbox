<?php include('server.php') ?>

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
			<article>
				<header align="center"><h1>Sign Up<h2></header>
			</article>
			
			<div align="center">
				<article class="6u 12u(mobile) special" align="center">
					<a href="#"><img src="images/donuts.jpg" width="80%" height= "50%" alt="" /></a>
				</article>
			</div>
			
			<div class = "row 50%">
					<div>
						<article>

						</br>
						</br>
					
						<!--User Sign Up Form-->
						<form method="post" action="#">
						
						<!--Names-->
							<div class="field row 50%">
								<div class="6u 12u(mobile)">
									<label for="fname" align="left">First Name<font color="red">*</font></label>
									<input type="text" pattern="^[a-zA-Z-]{3,}$" name="contact_name" id="contact_name" placeholder="First Name" title="First name must be at least 3 characters and may not have any special characters except '-'" required>
								</div>
								<div class="6u 12u(mobile)">
									<label for="lname" align="left">Last Name<font color="red">*</font></label>
									<input type="text"  pattern="^[a-zA-Z-]{3,}$" name="contact_lname" id="contact_lname" placeholder="Last Name" title="Last name must be at least 3 characters and may not have any special characters except '-'" required>
								</div>
							</div>
							
							<!--Email, with RegEx validations-->
							<div class="field">
								<div class="12u">
									<label for="lname" align="left">Email<font color="red">*</font></label>
									<div <?php if (isset($email_error)): ?> class="form_error" <?php endif ?> >
									<input type="text"  pattern="^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$" onchange= "the_function()" name="contact_email" id="contact_email" placeholder="you@example.domain" title="you@example.domain"required>
								</div>
								<?php if (isset($email_error)): ?>
									<span><?php echo $email_error; ?></span>
								<?php endif ?>
								</div>
							</div>
							
							<!--Passwords-->
							<div class="field">
								<div class="12u">
									<label for="password" align="left">Password<font color="red">*</font></label>
									<input type="password"  name="contact_password" id="contact_password" placeholder="Password"
									pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one
									number and one uppercase and lowercase letter, and at least 8 or more characters" required>
								</div>
							</div>
							<div class="field">
								<input type="checkbox" id="showPwd">Show password</input>
							</div>
							<br/>
							
							<!--Passwords-->
							<div class="field">
								<div class="12u">
									<label for="password2" align="left">Comfirm Password<font color="red">*</font></label>
									<input type="password" name="contact_password2" id="contact_password2" onchange="validatePassword()" placeholder="Confirm Password" required>
								</div>
							</div>
							<div class="field">
								<input type="checkbox" id="showPwd2">Show password 
							</div>
							<br/>
							
							<!--Address-->
							<div class="field">
								<div class="12u">
									<label for="address" align="left">Address<font color="red">*</font></label>
									<input type="text" name="contact_address" id="contact_address" pattern="^(?=.*[A-Za-z])(?=.*\d)(?=.*(_|[^\w])).+$" placeholder="Address"required>
								</div>
							</div>
				
							<!--City, State-->
							<div class="field 50%">
								<div class="12u">
									<label for="city" align="left">City<font color="red">*</font></label>
									<input type="text" name="contact_city" id="contact_city" placeholder="City" pattern="^[a-zA-Z]+(?:[\s-][a-zA-Z]+)*$"required>
								</div>
								</br>
								
								<!--Dropdown menu for state-->
								<div class="12u">
									<label for="state" align="left">State<font color="red">*</font></label>
										<select name="contact_state" required>
											<option value=''>Choose a State</option>
										   <option value='AK'>Alaska</option>
										   <option value='AL'>Alabama</option>
										   <option value='AR'>Arkansas</option>
										   <option value='AZ'>Arizona</option>
										   <option value='CA'>California</option>
										   <option value='CO'>Colorado</option>
										   <option value='CT'>Connecticut</option>
										   <option value='DC'>District of Columbia</option>
										   <option value='DE'>Delaware</option>
										   <option value='FL'>Florida</option>
										   <option value='GA'>Georgia</option>
										   <option value='HI'>Hawaii</option>
										   <option value='IA'>Iowa</option>
										   <option value='ID'>Idaho</option>
										   <option value='IL'>Illinois</option>
										   <option value='IN'>Indiana</option>
										   <option value='KS'>Kansas</option>
										   <option value='KY'>Kentucky</option>
										   <option value='LA'>Louisiana</option>
										   <option value='MA'>Massachusetts</option>
										   <option value='MD'>Maryland</option>
										   <option value='ME'>Maine</option>
										   <option value='MI'>Michigan</option>
										   <option value='MN'>Minnesota</option>
										   <option value='MO'>Missouri</option>
										   <option value='MS'>Mississippi</option>
										   <option value='MT'>Montana</option>
										   <option value='NC'>North Carolina</option>
										   <option value='ND'>North Dakota</option>
										   <option value='NE'>Nebraska</option>
										   <option value='NH'>New Hampshire</option>
										   <option value='NJ'>New Jersey</option>
										   <option value='NM'>New Mexico</option>
										   <option value='NV'>Nevada</option>
										   <option value='NY'>New York</option>
										   <option value='OH'>Ohio</option>
										   <option value='OK'>Oklahoma</option>
										   <option value='OR'>Oregon</option>
										   <option value='PA'>Pennsylvania</option>
										   <option value='PR'>Puerto Rico</option>
										   <option value='RI'>Rhode Island</option>
										   <option value='SC'>South Carolina</option>
										   <option value='SD'>South Dakota</option>
										   <option value='TN'>Tennessee</option>
										   <option value='TX'>Texas</option>
										   <option value='UT'>Utah</option>
										   <option value='VT'>Vermont</option>
										   <option value='VA'>Virginia</option>
										   <option value='WA'>Washington</option>
										   <option value='WI'>Wisconsin</option>
										   <option value='WV'>West Virginia</option>
										   <option value='WY'>Wyoming</option>
										</select>
									</div>	
							</div>
						<!--Zipcode-->
							<div class="field">
								<div class="12u">
									<label for="zipcode" align="left">Zipcode<font color="red">*</font></label>
									<input type="text" name="contact_zipcode" id="contact_zipcode" placeholder="xxxxx" title="Please enter 5 digits of zipcode." pattern="^\d{5}(?:[-\s]\d{4})?$"required>
								</div>
							</div>
							
						<!--Sign Up, Reset Buttons-->
						<div class="field">
							<div class="12u">
								<ul class="actions">
									<button type="submit" class="style1" name="submit">Sign Up Now</button>
									<li><input type="reset" class="style2" value="Reset" /></li>
								</ul>
							</div>
						</div>
						
					</form>
				</article>
			</div>
		
			</div>

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
		
		<!--Checking to see if passwords match-->
		<script>
			var password = document.getElementById("contact_password")
			  , confirm_password = document.getElementById("contact_password2");
			function validatePassword(){
			  if(password.value != confirm_password.value) {
				confirm_password.setCustomValidity("Passwords Do Not Match");
			  } else {
				  confirm_password.setCustomValidity('');
			  }
			}
		</script>
		
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
		
		<!--Checkbox for user to see their password in text form-->
		<script>
			(function() {
				var pwd = document.getElementById("contact_password2");
				var show = document.getElementById("showPwd2");

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
		
		<!--Alert to check if email is already taken...this code is still under construction-->
		<script type="text/javascript">
			function the_function(){
					$.ajax({
						type: 'POST',
						url: 'server.php',
						success: function(checkemail) {
							alert("This email is already registered.");
							$("p").text(checkemail);

						}
					}
				)};
		</script>

<!--END CODE CONTRIBUTIONS------------------------------------------------------------------------------------------>

	</div>
	</body>
</html>