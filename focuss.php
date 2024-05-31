	<?php 
            

		
		$conn = mysqli_connect('localhost', 'id15136291_binoculars', 'KZ@q@to1<Y2]mRDQ', 'id15136291_whatsapp');

		$sqls = "SELECT `id`, `title`, `category`, `myfile`, `body` FROM `blog` WHERE category='Health' ORDER BY id DESC LIMIT 9";

		$result = mysqli_query($conn, $sqls);
	

		while ($row = mysqli_fetch_assoc($result)) {


			echo "<div class='col-4 col-6-medium col-12-small'>
					<section class='box' style='border:none;'>
					<a href='#' class='image featured'><img src='images/".$row['myfile']."' alt='' /></a>
					<header>
					<h3 style='margin-top: -1.3em; text-align: justify;'><a href='".$row['title'].".php'>".$row['title']."</a></h3>
					</header>
													
					</section>
												
				</div>";



		}

        mysqli_close($conn);
?>


