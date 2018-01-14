<?php
	session_start();
	include 'includes/header.php';

?>
			
			<div class="content_area">
				
				<?php

					if (isset($_SESSION['u_email'])) { 
						include 'includes/content.php';
					 }
					else {
						echo "session error!";
						
					}
					

				?>
				
			</div>

	</div>

			<div class="sidebar">
					
				<?php

					include 'sidebar.php';
				?>

			</div>


			<div class="footer">
				
				<p class="footer_text">Kabataş Reed Team &copy 2017</p>

			</div>

</div>






</body>


</html>