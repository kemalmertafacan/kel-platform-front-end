else {

					$sql = "INSERT INTO users (first_name, last_name, email, grd_year, pwd) VALUES (?, ?, ?, ?, ?);";
								/*Prepeared Statement*/
					$stmt = mysqli_stmt_init($conn);

						/*Error Check*/

					if (!mysqli_stmt_prepare($stmt, $sql)) {
						echo "SQL Error";
					}
					else {

						mysqli_stmt_bind_param($stmt, "sssss", $first_name, $last_name, $email, $grd_year, $pwd );
						mysqli_stmt_execute($stmt);
					}


						header("Location: ../index.php?signup=success");

			}