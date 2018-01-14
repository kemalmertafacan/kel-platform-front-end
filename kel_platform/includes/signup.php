<?php

	if (isset($_POST['submit'])) {
		

	include_once 'dbh.php';

/* mysqli_real_escape_string fonksiyonu bir çeşit güvenlik önemi */
		$first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
		$last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
		$email = mysqli_real_escape_string($conn, $_POST['email']);
		$grd_year = mysqli_real_escape_string($conn, $_POST['grd_year']);
		$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
	
		/* User Side error check*/

		if (empty($first_name) || empty($last_name) || empty($email) || empty($grd_year) || empty($pwd)) {
			
			header("Location: ../kayit_sayfa.php?signup=empty");
			exit();
		}
		else {
			/* Email Validation */
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				
				header("Location: ../kayit_sayfa.php?signup=email&first_name=$first_name&last_name=$last_name");
			}

				
/**/
			else {

					$sql = "SELECT * FROM users WHERE email='$email'";
					$result = mysqli_query($conn, $sql);
					$resultCheck = mysqli_num_rows($result);

					if ($resultCheck > 0) {
						header("Location: ../kayit_sayfa.php?signup=usertaken");
						exit();
					}
					else {

						/* Hashing Passwors */
						$hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
						/* Insert the user to database */
						$sql = "INSERT INTO users (first_name, last_name, email, grd_year, pwd) VALUES ('$first_name', '$last_name', '$email', '$grd_year', '$hashedPwd');";
						mysqli_query($conn, $sql);
						header("Location: ../kayit_sayfa.php?signup=success");
						header("Location: ../giris_sayfa.php");
						exit();
					}
			}
/**/
		}
	}
	else {

		header("Location: ../kayit_sayfa.php");
		exit();

	}

	?>