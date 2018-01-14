<?php 
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>
		KEL-DER
	</title>

<link rel="stylesheet" type="text/css" href="styles/style.css">
</head>

<body>

<div class="container">
	
	
	<div class="content">

		<header>
		
			<div class="header_logo">
		
	</div>

		<div class="kel_header_text">

			<h1>Kabataş Erkek Liseliler Derneği Mezunlar İletişim Platformu</h1>

		</div>

	<nav class="top_nav_bar">
		<ul>
			<li><a href="?page=home">Ana Sayfa</a></li>
			<li><a href="?page=profile">Profilim</a></li>
			<li><a href="?page=calendar">djfhsfsdf</a></li>
			<li><a href="#">djfhsfsdf</a></li>
			<li><a href="#">djfhsfsdf</a></li>
			<li><a href="#">djfhsfsdf</a></li>

				<?php
					if (isset($_SESSION['u_email'])) {
						
						echo '<form action="includes/logout.php" method="POST">
					<button type="submit" name="submit">Çıkış Yap</button>
				</form>';
					}
				?>
				
		</ul>
	</nav>

	</header>