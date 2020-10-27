<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<div class="col-sm-12 col-md-4 col-xl-4">
		<form action="insert.php" method="GET">
										<input type="" name="img">

										<input type="" name="title">

										<input type="" name="text">

										<input type="" name="price">

								</form>
					
					<button type="button" class="btn btn-primary">Твитнуть</button>					
				</div>
				<a href="http://7less/">Main</a>
				<?php 
										$connect = mysqli_connect("127.0.0.1","root","","myshop");
										
										$text_query = 'SELECT * FROM product';

										$query = mysqli_query($connect, $text_query);


										$result = $query->fetch_assoc();


										echo $result["title"];
									 		?>
</body>
</html>