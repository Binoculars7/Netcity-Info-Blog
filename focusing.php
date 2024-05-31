	<?php 
            

		
		$conn = mysqli_connect('localhost', 'id15136291_binoculars', 'KZ@q@to1<Y2]mRDQ', 'id15136291_whatsapp');

		$sqls = "SELECT `id`, `title`, `category`, `myfile`, `body` FROM `blog` ORDER BY id DESC LIMIT 8";

		$result = mysqli_query($conn, $sqls);
	

		while ($row = mysqli_fetch_assoc($result)) {


				echo "<section class='box' style='margin-bottom:0em;'>
				<a href='#' class='image featured'><img src='images/".$row['myfile']."' alt='' /></a>
				<header>
				<h3 style='margin-top: -1em; margin-bottom: -1.4em; text-align:justify;'><a href='".$row['title'].".php'>".$row['title']."</a></h3><br>
				</header>
				</section>";



		}

        mysqli_close($conn);
?>


