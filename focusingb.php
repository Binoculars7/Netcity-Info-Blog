	<?php 
            

		
		$conn = mysqli_connect('localhost', 'id15136291_binoculars', 'KZ@q@to1<Y2]mRDQ', 'id15136291_whatsapp');

		$sqls = "SELECT `id`, `title`, `category`, `myfile`, `body` FROM `blog` WHERE category='Business' ORDER BY id DESC LIMIT 1";

		$result = mysqli_query($conn, $sqls);
	

		while ($row = mysqli_fetch_assoc($result)) {

				echo "<a href='".$row['title'].".php' class='image featured'><img src='images/".$row['myfile']."' alt='' /></a>
										<header>
											<h2><a href='".$row['title'].".php'>".$row['title']."</a></h2>
											<p style='text-align:justify;'>
												".$row['body']."
											</p>
										</header>";



		}

        mysqli_close($conn);
?>


