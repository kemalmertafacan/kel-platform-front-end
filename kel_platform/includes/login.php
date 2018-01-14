

<?php

session_start();
	
	if (isset($_POST['submit_login'])) {
		
		include 'dbh.php';

		$email = mysqli_real_escape_string($conn, $_POST['email']);
		$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

		/* Error check */
		/* Is imputs are empty? */
			if (empty($email) || empty($pwd)) {
				
				header("Location: ../giris_sayfa.php?login=empty");
				exit();
			}
			else {

				$sql = "SELECT * FROM users WHERE email='$email'";
				$result = mysqli_query($conn, $sql);
				$resultCheck = mysqli_num_rows($result);
				if ( $resultCheck < 1 ) {
					
					header("Location: ../giris_sayfa.php?login=error");
					exit();

				}
				else {

					if ($row = mysqli_fetch_assoc($result)) {
						
						/* De-hashing the password */
						$hashedPwdCheck = password_verify($pwd, $row['pwd']);
						
						if ($hashedPwdCheck == false) {
							
							header("Location: ../giris_sayfa.php?login=error");
							exit();
						}

						elseif ($hashedPwdCheck == true) {
							/* Log in the user */
							$_SESSION['u_id'] = $row['id'];
							$_SESSION['u_first_name'] = $row['first_name'];
							$_SESSION['u_last_name'] = $row['last_name'];
							$_SESSION['u_grd_year'] = $row['grd_year'];
							$_SESSION['u_email'] = $row['email'];
							header("Location: ../index.php?login=success");
							exit();
							

						}
					}

				}

			}





	}
	else {

		header("Location: ../giris_sayfa.php?login=error");
		exit();
	}
?>