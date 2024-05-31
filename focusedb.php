	<?php 
    	



		$conn = mysqli_connect('localhost', 'id15136291_binoculars', 'KZ@q@to1<Y2]mRDQ', 'id15136291_whatsapp');

		$sqls = "SELECT `id`, `title`, `category`, `myfile`, `body` FROM `blog` WHERE category='Business' ORDER BY id DESC LIMIT 9";

		$result = mysqli_query($conn, $sqls);
	

		while ($row = mysqli_fetch_assoc($result)) {


				echo "<li>
				<span class='date'>News<strong>4u</strong></span>
				<h3><a href='".$row['title'].".php'>".$row['title']."</a></h3><br>
				</li> ";



		}

        mysqli_close($conn);
?>


