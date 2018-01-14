<!DOCTYPE html>
<html>
<head>
	<title>KEL-DER</title>
	<link rel="stylesheet" type="text/css" href="styles/style.css">

</head>

<body>
<!-- Signup Side -->
<div class="signup_container">

	<form class="signup_form" action="includes/signup.php" method="POST">
		

		<?php
		/* Formda yanlışlık olduğunda bazı değerlerin sonraki sayfada korunması */
			if (isset($_GET['first_name'])) {
				$first = $_GET['first_name'];
				echo "<input class='signup_input' type='text' name='first_name' placeholder='Ad' value='.$first.'>";
			}
			else {
				echo "<input class='signup_input' type='text' name='first_name' placeholder='Ad'>";
			}
		?>
			<br>
		<?php
			if (isset($_GET['last_name'])) {
				$last = $_GET['last_name'];
				echo "<input class='signup_input' type='text' name='last_name' placeholder='Soyad' value='.$last.'>";
			}
			else {
				echo "<input class='signup_input' type='text' name='last_name' placeholder='Soyad'>";
			}
		?>
			<!-- Gerisi Normal -->
			<br>
			<input class="signup_input" type="email" name="email" placeholder="E-mail">
			<br>
			<input class="signup_input" type="number" name="grd_year" placeholder="Dönem" min="1908" max="3000">
			<br>
			<input class="signup_input" type="password" name="pwd" placeholder="Şifre">
			<br>
			<button class="signup_btn" type="submit" name="submit">Sign up</button>
			

	</form>
</div>
<!-- Login Side -->
<div class="login_container">

	<form class="login_form" action="includes/login.php" method="POST">

			<input class="login_input" type="email" name="email" placeholder="E-mail">
			<br>
			<input class="login_input" type="password" name="pwd" placeholder="Şifre">
			<br>
			<button class="login_btn" type="submit" name="submit_login">Log in</button>
			

	</form>
</div>
</body>
</html>